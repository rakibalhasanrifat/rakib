<?php

class Solonick_Instagram_Widget extends WP_Widget {
    var $settings = array( 'title', 'instagram_token');

    function __construct() {
        $widget_ops = array('description' => 'Use this widget to add Instagram feed.' );
        parent::__construct(false, esc_html__('Solonick Instagram Widget', 'solonick'),$widget_ops);
}


function widget($args, $instance) {
        $settings = $this->solonick_get_settings();
        extract( $args, EXTR_SKIP );
        $instance = wp_parse_args( $instance, $settings );
        extract( $instance, EXTR_SKIP );

      
         echo $before_widget; 
        
        if ( $title != '' )
            echo $before_title . apply_filters( 'widget_title', $title, $instance, $this->id_base ) . $after_title;
        
		echo'<div class="widget-container fl-wrap">';
		
		if ( $instagram_token != '' ) {
	   echo '<div class="jr-insta-thumb" id="insta-content" data-instatoken="'.$instagram_token.'"></div>';
		}
		
       echo '</div>';      
       echo $after_widget;      
    }
	
	


function update( $new_instance, $old_instance ) {
        foreach ( array( 'title', 'instagram_token' ) as $setting )
            $new_instance[$setting] = strip_tags( $new_instance[$setting] );
        // Users without unfiltered_html cannot update this arbitrary HTML field
        if ( !current_user_can( 'unfiltered_html' ) )
            $new_instance['address'] = $old_instance['address'];
        return $new_instance;
    }


    function solonick_get_settings() {
        // Set the default to a blank string
        $settings = array_fill_keys( $this->settings, '' );
        // Now set the more specific defaults
        return $settings;
    }

    function form($instance) {
        $instance = wp_parse_args( $instance, $this->solonick_get_settings() );
        extract( $instance, EXTR_SKIP );
?>

    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:','solonick'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $title ); ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>
	
	
	
	<p>
        <label for="<?php echo $this->get_field_id('instagram_token'); ?>"><?php esc_html_e('Instagram Token:','solonick'); ?></label>
        <input type="text" name="<?php echo $this->get_field_name('instagram_token'); ?>" value="<?php echo esc_attr( $instagram_token ); ?>" class="widefat" id="<?php echo $this->get_field_id('instagram_token'); ?>" />
    </p>
	<p>
	<a href="<?php echo esc_url('http://instagram.pixelunion.net/','solonick');?>" target="_blank"><?php esc_html_e('Generate Access Token','solonick');?></a>
	</p>
	
	
    
    

    <?php 

    }
}

register_widget('Solonick_Instagram_Widget');