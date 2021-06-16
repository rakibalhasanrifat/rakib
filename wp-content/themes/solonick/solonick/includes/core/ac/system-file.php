<?php 
require (SOLONICK_THEME_PATH . '/includes/core/ab/system-file.php');
add_action( 'tgmpa_register', 'solonick_register_required_plugins' );
if (class_exists('WPBakeryVisualComposerAbstract')) {
add_action('init', 'requireVcExtend',2);
}
?>