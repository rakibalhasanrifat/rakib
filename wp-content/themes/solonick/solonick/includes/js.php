<?php

if( !function_exists ('solonick_enqueue_scripts') ) :
	function solonick_enqueue_scripts() {
	global $solonick_event_array, $solonick_coming_array, $opt_theme_style;
	$solonick_options = get_option('solonick');
		
	wp_enqueue_script('solonick-plugins', (SOLONICK_THEME_URL . '/includes/js/plugins.js'), array('jquery'), '1.0',true);
	wp_enqueue_script('solonick-scripts', (SOLONICK_THEME_URL . '/includes/js/scripts.js'), array('jquery'), '1.0',true);
	wp_register_script('solonick-shuffleLetters', (SOLONICK_THEME_URL . '/includes/js/shuffleLetters.js'), array('jquery'), '1.0',true);	
	wp_enqueue_script('solonick-map', (SOLONICK_THEME_URL . '/includes/js/map.js'), array('jquery'), '1.0',true);
	
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
	}
}
	add_action('wp_enqueue_scripts', 'solonick_enqueue_scripts');
endif;