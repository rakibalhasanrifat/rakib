<?php

add_filter( 'cron_schedules', 'cron_add_minutely' );
function cron_add_minutely( $schedules )
{
    // Adds once weekly to the existing schedules.
    $schedules['minutely'] = array(
        'interval' => 60,
        'display'  => __( 'Once every minute' ),
    );
    return $schedules;
}

function persistent_login_get_allowed_roles()
{
    $roles = [];
    // add the current roles to the outputted roles array, start user count at 0.
    
    if ( isset( $persistent_login_premium_options ) ) {
        $allowed_roles = $persistent_login_premium_options['roles'];
        
        if ( is_array( $allowed_roles ) && !empty($allowed_roles) ) {
            foreach ( $allowed_roles as $role ) {
                array_push( $roles, $role );
            }
        } else {
            $wp_roles = wp_roles();
            foreach ( $wp_roles->roles as $key => $value ) {
                array_push( $roles, $key );
            }
        }
    
    } else {
        $wp_roles = wp_roles();
        foreach ( $wp_roles->roles as $key => $value ) {
            array_push( $roles, $key );
        }
    }
    
    set_transient( 'persistent_login_allowed_roles_reference', $roles, 0 );
    return $roles;
}

add_action( 'persistent_login_user_count', 'persistent_login_start_count' );
function persistent_login_start_count()
{
    // set the count started transient, so we know we keep running the loop
    $is_count_running = ( get_transient( 'persistent_login_user_count_running' ) ?: NULL );
    
    if ( !$is_count_running ) {
        set_transient( 'persistent_login_user_count_running', 1, 0 );
        $last_count = persistent_login_getUserCount();
        set_transient( 'persistent_login_last_count', $last_count, 0 );
    }
    
    $roles = [];
    $allowed_roles = persistent_login_get_allowed_roles();
    
    if ( is_array( $allowed_roles ) && !empty($allowed_roles) ) {
        foreach ( $allowed_roles as $key => $value ) {
            $roles[$value] = 0;
        }
        update_option( 'persistent_login_user_count', $roles );
        $offset = ( get_transient( 'persistent_login_user_count_offset' ) ?: 0 );
        $current_role = $allowed_roles[0];
        set_transient( 'persistent_login_user_count_current_role', $current_role, 0 );
        set_transient( 'persistent_login_user_count_offset', 0, 0 );
        $timestamp = wp_next_scheduled( 'persistent_login_update_count' );
        // If $timestamp == false schedule daily backups since it hasn't been done previously
        if ( $timestamp == false ) {
            // Schedule the event for right now, then to repeat daily using the hook 'persistent_login_user_count'
            wp_schedule_event( time(), 'minutely', 'persistent_login_update_count' );
        }
    }

}

add_action( 'persistent_login_update_count', 'persistent_login_update_count', 10 );
function persistent_login_update_count()
{
    $block_size = 300;
    $offset = ( get_transient( 'persistent_login_user_count_offset' ) ?: 0 );
    $role = get_transient( 'persistent_login_user_count_current_role' );
    $args = array(
        'role'         => $role,
        'meta_key'     => 'session_tokens',
        'meta_compare' => 'EXISTS',
        'fields'       => array( 'ID' ),
        'count_total'  => false,
        'offset'       => $offset,
        'number'       => $block_size,
    );
    $users = count( get_users( $args ) );
    // update the option
    $roles = get_option( 'persistent_login_user_count' );
    $roles[$role] += $users;
    update_option( 'persistent_login_user_count', $roles );
    
    if ( $users < $block_size ) {
        $allowed_roles = get_transient( 'persistent_login_allowed_roles_reference' );
        if ( is_array( $allowed_roles ) ) {
            foreach ( $allowed_roles as $key => $value ) {
                
                if ( $role === $value ) {
                    $next_role = $key + 1;
                    
                    if ( isset( $allowed_roles[$next_role] ) ) {
                        set_transient( 'persistent_login_user_count_current_role', $allowed_roles[$next_role], 0 );
                        set_transient( 'persistent_login_user_count_offset', 0, 0 );
                    } else {
                        persistent_login_stop_count();
                    }
                    
                    break;
                }
            
            }
        }
    } else {
        // set the current offset in a transient
        $new_offset = $offset + $users;
        set_transient( 'persistent_login_user_count_offset', $new_offset, 0 );
    }

}

function persistent_login_stop_count()
{
    // we're done, clean up transients
    delete_transient( 'persistent_login_user_count_current_role' );
    delete_transient( 'persistent_login_user_count_offset' );
    delete_transient( 'persistent_login_user_count_running' );
    delete_transient( 'persistent_login_allowed_roles_reference' );
    delete_transient( 'persistent_login_last_count' );
    // stop the minutely count task
    wp_clear_scheduled_hook( 'persistent_login_update_count' );
}
