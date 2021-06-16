<?php $solonick_options = get_option('solonick');?>
<?php
/*Template Name:Blog Page*/
 get_header();
 
 
 ?>

		<?php if(get_post_meta($post->ID,'rnr_wrblog-pagetype',true)=='st1'){ ?> 
        <?php get_template_part('template-parts/blog/blog-right');?>
		<?php }
		else if(get_post_meta($post->ID,'rnr_wrblog-pagetype',true)=='st2') { ?>
         <?php get_template_part('template-parts/blog/blog-left');?>
		<?php }
		else  { ?>
		<?php get_template_part('template-parts/blog/blog-right');?>
		<?php }?>
 
<?php get_footer(); ?>	