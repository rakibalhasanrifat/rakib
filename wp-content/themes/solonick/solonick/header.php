<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $solonick_options = get_option('solonick'); ?>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php 
	wp_head(); 
	?>
</head>
<body <?php body_class(); ?>>
<?php if (Solonick_AfterSetupTheme::return_thme_option('preloader_enable_opt')=='st1'){ ?>
<!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
        </div>
<!--loader end-->
<?php }  else { ?>
<?php wp_enqueue_style('solonick-preloader');?>
<?php } ;?>
<!-- Main  -->
<div id="main">
<?php get_template_part('template-parts/main-header');?>