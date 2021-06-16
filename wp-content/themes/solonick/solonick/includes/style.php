<?php
global $solonick_options;
$solonick_options = get_option('solonick');
function solonick_style() {
//home
wp_enqueue_style('solonick-main', (SOLONICK_THEME_URL . '/style.css'));
wp_enqueue_style('solonick-reset', (SOLONICK_THEME_URL . '/includes/css/reset.css'));
wp_enqueue_style('solonick-plugins', (SOLONICK_THEME_URL . '/includes/css/plugins.css'));
wp_enqueue_style('solonick-style', (SOLONICK_THEME_URL . '/includes/css/style.css'));
wp_enqueue_style('solonick-color', (SOLONICK_THEME_URL . '/includes/css/color.css'));
wp_enqueue_style('solonick-yourstyle', (SOLONICK_THEME_URL . '/includes/css/yourstyle.css'));
wp_register_style('solonick-preloader', (SOLONICK_THEME_URL . '/includes/css/preloader.css'));

}
add_action('wp_enqueue_scripts', 'solonick_style');

function solonick_fonts_url() {
    $solonick_font_url = '';
    
    if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'solonick' ) ) {
        $solonick_font_url = add_query_arg( 'family','Montserrat:400,500,600,700,800,900|Poppins:400,500,600,700,800,900|Titillium+Web:400,600,700&subset=cyrillic,cyrillic-ext,devanagari,latin-ext,vietnamese' , "//fonts.googleapis.com/css" );
    }
    return $solonick_font_url;
}

function solonick_scripts() {
    wp_enqueue_style( 'solonick_fonts', solonick_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'solonick_scripts' );

function solonick_enqueue_custom_admin_style() {
wp_register_style( 'custom_wp_admin_css', (SOLONICK_THEME_URL . '/includes/css/admin-style.css'), false, '1.0.0' );
wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'solonick_enqueue_custom_admin_style' );