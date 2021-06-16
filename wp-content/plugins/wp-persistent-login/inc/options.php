<?php

/* ------------------------------------------------------------------------ *
 * Setting Registration
 * ------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------ *
 * Create menu page in wordpress
 * ------------------------------------------------------------------------ */
function persistent_login_create_menu_page()
{
    add_submenu_page(
        'options-general.php',
        'Persistent Login',
        'Persistent Login',
        'administrator',
        'wp-persistent-login',
        'persistent_login_options_display'
    );
}

// end sandbox_create_menu_page
add_action( 'admin_menu', 'persistent_login_create_menu_page' );
/* ------------------------------------------------------------------------ *
 * Build up options page
 * ------------------------------------------------------------------------ */
function persistent_login_options_display()
{
    /* ------------------------------------------------------------------------ *
     * Views
     * ------------------------------------------------------------------------ */
    if ( isset( $_GET['view'] ) ) {
        // updated db version
        
        if ( $_GET['view'] == 'update' ) {
            $message = __( 'WordPress Persistent Login has been updated to the latest database version!' );
            $class = 'notice updated';
            printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) );
        }
    
    }
    /* ------------------------------------------------------------------------ *
     * END Views
     * ------------------------------------------------------------------------ */
    /* ------------------------------------------------------------------------ *
     * Form handlers
     * ------------------------------------------------------------------------ */
    // update usage form handler
    if ( isset( $_POST['usage-updated'] ) ) {
        if ( $_POST['usage-updated'] === 'true' ) {
            persistent_login_handle_usage_update();
        }
    }
    // update settings form handler
    if ( isset( $_POST['settings-updated'] ) ) {
        if ( $_POST['settings-updated'] === 'true' ) {
            persistent_login_handle_settings_update();
        }
    }
    // end if is premium
    /* ------------------------------------------------------------------------ *
     * Free forever plan - upgrade promotion
     * ------------------------------------------------------------------------ */
    
    if ( persistent_login()->is_not_paying() && !persistent_login()->is_trial() ) {
        settings_errors();
        ?>
		<div class="wrap">
			
			<h1>WordPress Persistent Login</h1><br/>
			
			<h2 style="float: left;">Free Forever Plan</h2>
			
			<div style="float: right;">
				<p>
					<a href="<?php 
        echo  admin_url() ;
        ?>options-general.php?page=wp-persistent-login-account">
						My Account
					</a>
					&nbsp;|&nbsp;
					<a href="<?php 
        echo  admin_url() ;
        ?>options-general.php?billing_cycle=annual&page=wp-persistent-login-pricing">
						Change my plan
					</a>
					&nbsp;|&nbsp;
					<a href="<?php 
        echo  admin_url() ;
        ?>options-general.php?page=wp-persistent-login-contact">
						Support
					</a>
				</p>
			</div>
			<div class="clear"></div>	
			
			<p>You are currently using Persistent Login - Free Forever. Persistent login will keep all users logged in automatically. For free. Forever. </p>

			<div style="width: calc(100% - 270px); float: left;">
				
				<form method="POST">
						
					<input type="hidden" name="usage-updated" value="true" />
					<input type="hidden" name="end-sessions" value="true" />
						
					<?php 
        wp_nonce_field( 'persistent_login_update_usage', 'usage_form' );
        ?>
				
					<div class="postbox-container" style="max-width: 500px;">
						<div class="metabox-holder"> 
									
							<div class="postbox" style="margin-bottom: 1rem;">
								<div class="inside">
									<h3>Usage</h3>
									<?php 
        $users = persistent_login_getUserCount();
        $is_count_running = ( get_transient( 'persistent_login_user_count_running' ) ?: NULL );
        if ( $is_count_running ) {
            $last_count = get_transient( 'persistent_login_last_count' );
        }
        ?>
									<?php 
        
        if ( $is_count_running ) {
            ?>
										<p>
											User count is currently running. The previous loggged in user count was: <?php 
            echo  $last_count ;
            ?>
										</p>
									<?php 
        }
        
        ?>
									<p>
										<strong>
											<?php 
        echo  $users ;
        ?> user<?php 
        echo  ( $users === 1 ? ' ' : 's ' ) ;
        ?>
										</strong> 
										<?php 
        echo  ( $users === 1 ? 'is ' : 'are ' ) ;
        ?>
										being kept logged into your website
									</p>
										
									<?php 
        $breakdown = persistent_login_getRolesBreakdown();
        ?> 
									<strong style="margin-bottom: 5px; display: block;">Usage Breakdown:</strong>
									<?php 
        
        if ( $breakdown && !empty($breakdown) ) {
            ?>
											<?php 
            foreach ( $breakdown as $key => $value ) {
                ?>
													<span style="width: 250px; max-width: 45%; float: left; display: block; float: left;">
														<?php 
                echo  str_replace( [ '_', '-' ], ' ', ucfirst( $key ) ) ;
                ?>s: <strong><?php 
                echo  $value ;
                ?></strong>
													</span>
											<?php 
            }
            ?>
									<?php 
        } else {
            ?>
										<p><em>Logins not counted yet.</em></p>
									<?php 
        }
        
        ?>
									
									<div style="display: block; clear: both;"></div>
									
									<?php 
        
        if ( !$is_count_running ) {
            $time_now = time();
            $next_check = wp_next_scheduled( 'persistent_login_user_count' );
            $difference = $next_check - $time_now;
            $difference_in_hours = round( $difference / 60 / 60, 1 );
            if ( $next_check ) {
                echo  '<p style="color: #9e9e9e;">
												Next automated check in approximately ' . $difference_in_hours . ' hours
												</p>' ;
            }
        } else {
            echo  '<p style="color: #9e9e9e;">
												Count is currently running. Please check back later.
											</p>' ;
        }
        
        ?>
									
									
									<input type="submit" name="sessions" id="sessions" value="End all sessions" class="button"><br/>
									<p style="margin-top: 0;">
										<small>
											If you end all sessions, all users will be logged out of the website (including you).
										</small>
									</p>
								
								</div>
							</div>
							<p>Did you know, you can control which user roles are kept logged in by upgrading?</p>
						</div>
					</div>
												
				</form>
				<div style="display: block; clear: both;"></div>

			
			
				<h3 style="margin-top: 2.5em; margin-bottom: 0;">Settings</h3>
				<form method="POST">
					
					<input type="hidden" name="settings-updated" value="true" />
					<?php 
        wp_nonce_field( 'persistent_login_update_settings', 'settings_form' );
        ?>
					
					<table class="form-table">
						<tbody>   
					
					
							<!-- toggle dashboard at a glance screen -->
							<?php 
        $hideDashboardStats = get_option( 'persistent_login_dashboard_stats' );
        ?> 
						
							<tr style="border-bottom: 1px solid #dfdfdf; border-top: 1px solid #dfdfdf;">
							
								<th><br/>
									Dashboard Panel Options<br/>
								</th>
								<td>
									<br/>
									<label style="width: auto; display: inline-block;">
										<input 
											name="hidedashboardstats" id="hidedashboardstats" type="checkbox" value="1" 
											class="regular-checkbox" <?php 
        echo  ( $hideDashboardStats !== '0' ? 'checked' : '' ) ;
        ?>
										/> 
										Hide 'At a glance' dashboard stats
									</label><br/>
									<p class="description">
										<small>
											(improves dashboard speed for websites with lots of users)
										</small>
									</p>
									<br/>
								</td>
							</tr>
							<!-- END toggle dashboard at a glance screen -->		
					
					
							<!-- toggle allow duplicate sessions -->
							<?php 
        $freeOptions = get_option( 'persistent_login_options' );
        
        if ( isset( $freeOptions['duplicateSessions'] ) ) {
            $duplicateSessions = $freeOptions['duplicateSessions'];
        } else {
            $duplicateSessions = '0';
        }
        
        ?> 
							<tr style="border-bottom: 1px solid #dfdfdf;">
								<th>
									<br/> 
									Duplicate Sessions<br/>
								</th>
								<td>
									<br/>
									<label style="width: auto; display: inline-block;">
										<input 
											name="duplicateSessions" id="duplicateSessions" type="checkbox" value="1" 
											class="regular-checkbox" <?php 
        echo  ( $duplicateSessions === '0' || $duplicateSessions === NULL ? '' : 'checked' ) ;
        ?>
										/>
										Allow duplicate sessions
									</label><br/>
									<p class="description">
										<small>
											(select if you're having trouble staying logged in on multiple devices)
										</small>
									</p>
								</td> 
							</tr>
							<!-- END toggle allow duplicate sessions -->
					
					
							<!-- manage sessions -->
							<tr style="border-bottom: 1px solid #dfdfdf;">
								<th>
									Manage Sessions<br/>
								</th>
								<td>
									<p>
										You <strong>and</strong> your users can manage <strong>your own sessions</strong> from your profile page in the dashboard.
									</p>
									<br/>
									<p>
										<a href="<?php 
        echo  admin_url() ;
        ?>profile.php#sessions" class="button button-primary">
											Manage your sessions
										</a>
										&nbsp;or&nbsp;
										<a href="<?php 
        echo  persistent_login()->get_upgrade_url() ;
        ?>&trial=true" class="button ">
											Upgrade
										</a>
										to manage all users sessions &amp; activate front-end session management.
									</p>
									<br/>
								</td>
							</tr>
							<!-- END manage sessions -->	              
				
						</tbody>
					</table>
					<p class="submit">
						<input type="submit" name="submit" id="submit" class="button button-primary" value="Save Settings">
					</p>
				</form>

				<div class="metabox-holder">
					<div class="postbox" style="max-width: 500px;">
						
						<div class="inside">
							<h3>Try premium for 7 days, free</h3>
							<p>Persistent Login is great, but we've made it even better!</p>
							<p>If you love Persistent Login, but want more control, have a look at the <a href="<?php 
        echo  persistent_login()->get_upgrade_url() ;
        ?>">features in our premium version</a>. </p>
							<p>	    	
								<a href="<?php 
        echo  persistent_login()->get_upgrade_url() ;
        ?>&trial=true" class="button button-primary">
								7 Day Free Trial
								</a>
								&nbsp; or &nbsp;
								<a href="<?php 
        echo  persistent_login()->get_upgrade_url() ;
        ?>" class="button">
								Purchase Premium &amp; Support Cure Leukaemia
								</a>
							</p>
							<p style="color: #9f9f9f;">Between now and October 2021, all of the money made from Persistent Login will be <a href="https://www.justgiving.com/fundraising/luke-seager" target="_blank">donated to Cure Leukaemia</a>.</p>
						</div>
					</div>
				</div>

			</div>

			<div class="postbox-container" style="max-width: 250px; float: right;">
				<div class="metabox-holder"> 
					<div class="postbox">
						<div class="inside">
							<h3 style="margin-top: 1rem; margin-bottom: 0.5rem;">Supporting Cure Leukaemia</h3>
							<p style="margin-top: 0;">
								Hi, this is Luke, the developer of WP Persistent Login. This year I'm cycling 500km over 4 days from London to Paris to raise &pound;1,500 for <a href="http://www.cureleukaemia.co.uk/" target="_blank">Cure Leukaemia</a>, a charity that funds vital blood cancer research, connecting patients with pioneering treatments through clinical trials.
							</p>
							<p>
								Between now and Ocotber 2021, all of the money I make from Persistent Login will be donated to Cure Leukaemia. So if you'd like to get <a href="<?php 
        echo  persistent_login()->get_upgrade_url() ;
        ?>">all the benefits of Persistent Login Premium</a>, and help support a great charity, why not consider <a href="<?php 
        echo  persistent_login()->get_upgrade_url() ;
        ?>">upgrading</a>. 
							</p>
							<p>
								If you would like to keep track of my progress, or make a personal donation, please take <a href="https://www.justgiving.com/fundraising/luke-seager" target="_blank">a look at my Just Giving page</a>.  
							</p>
							<a href="https://www.justgiving.com/fundraising/luke-seager" target="_blank" class="button">
								Visit my Just Giving page
							</a>
						</div>
					</div>
					<div class="postbox">
						<div class="inside">
							<h3 style="margin-top: 1rem; cursor: auto;">Want a new feature?</h3>
							<p>If you'd like to see a new feature on WordPress Persistent Login, just request it by clicking the button below and <strong>choose the Feature Request option</strong>.</p>
							<a href="<?php 
        echo  admin_url() ;
        ?>options-general.php?page=wp-persistent-login-contact" class="button">
								Request a Feature
							</a>
						</div>
					</div>
				</div>
			</div>

			<div style="clear:both; display: block;"></div>
							
		</div>
	<?php 
    }
    
    /* ------------------------------------------------------------------------ *
     * END free forever plan
     * ------------------------------------------------------------------------ */
}

// end persistent_login_options_display
/* ------------------------------------------------------------------------ *
 * Form handlers
 * ------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------ *
 * Update usage - end all sessions
 * ------------------------------------------------------------------------ */
function persistent_login_handle_usage_update()
{
    // make sure the nonce is correct, if not, something's wrong
    
    if ( !isset( $_POST['usage_form'] ) || !wp_verify_nonce( $_POST['usage_form'], 'persistent_login_update_usage' ) ) {
        $message = __( 'Sorry, your nonce was not correct. Please try again.' );
        $type = 'error';
        add_settings_error(
            'persistent_login_roles_update',
            esc_attr( 'persistent_login' ),
            $message,
            $type
        );
        // if nonce is correct, then crack on...
    } else {
        // make sure user is updating the settings
        if ( isset( $_POST['usage-updated'] ) && $_POST['usage-updated'] === 'true' ) {
            /* ------------------------------------------------------------------------ *
             * Remove all sessions
             * ------------------------------------------------------------------------ */
            
            if ( isset( $_POST['end-sessions'] ) && $_POST['end-sessions'] === 'true' ) {
                $wp_session_token = WP_Session_Tokens::get_instance( get_current_user_id() );
                $wp_session_token->destroy_all_for_all_users();
                // success message
                $message = __( 'Done! All users will now have to login.' );
                $type = 'updated';
                add_settings_error(
                    'persistent_login_roles_update',
                    esc_attr( 'persistent_login' ),
                    $message,
                    $type
                );
            }
        
        }
    }

}

/* ------------------------------------------------------------------------ *
 * END update usage - end all sessions
 * ------------------------------------------------------------------------ */
/* ------------------------------------------------------------------------ *
 * Update Settings
 * ------------------------------------------------------------------------ */
function persistent_login_handle_settings_update()
{
    global  $options ;
    // make sure the nonce is correct, if not, something's wrong
    
    if ( !isset( $_POST['settings_form'] ) || !wp_verify_nonce( $_POST['settings_form'], 'persistent_login_update_settings' ) ) {
        $message = __( 'Sorry, your nonce was not correct. Please try again.' );
        $type = 'error';
        add_settings_error(
            'persistent_login_roles_update',
            esc_attr( 'persistent_login' ),
            $message,
            $type
        );
        // if nonce is correct, then crack on...
    } else {
        // make sure user is updating the settings
        
        if ( isset( $_POST['settings-updated'] ) && $_POST['settings-updated'] === 'true' ) {
            /* ------------------------------------------------------------------------ *
             * Dashboard stats
             * ------------------------------------------------------------------------ */
            
            if ( isset( $_POST['hidedashboardstats'] ) ) {
                $hideStats = $_POST['hidedashboardstats'];
                $hideStats = sanitize_text_field( $hideStats );
                update_option( 'persistent_login_dashboard_stats', $hideStats );
            } else {
                update_option( 'persistent_login_dashboard_stats', '0' );
            }
            
            /* ------------------------------------------------------------------------ *
             * Free options
             * ------------------------------------------------------------------------ */
            $currentOptions = get_option( 'persistent_login_options' );
            // update allow duplicate sessions option
            
            if ( isset( $_POST['duplicateSessions'] ) ) {
                $duplicateSessions = $_POST['duplicateSessions'];
            } else {
                $duplicateSessions = '0';
            }
            
            $currentOptions['duplicateSessions'] = $duplicateSessions;
            /* ------------------------------------------------------------------------ *
             * Update options
             * ------------------------------------------------------------------------ */
            update_option( 'persistent_login_options', $currentOptions );
            // end if is premium
            /* ------------------------------------------------------------------------ *
             * Success message
             * ------------------------------------------------------------------------ */
            // message
            $message = __( 'Persistent Login settings updated!' );
            $type = 'updated';
            add_settings_error(
                'persistent_login_roles_update',
                esc_attr( 'persistent_login' ),
                $message,
                $type
            );
        }
    
    }

}

/* ------------------------------------------------------------------------ *
 * END update Settings
 * ------------------------------------------------------------------------ */