<?php $solonick_options = get_option('solonick');?>
<?php
/*Template Name:Portfolio Page Template*/
 get_header();
 
 
 ?>
 
		 <?php if(get_post_meta($post->ID,'rnr_wr_portfolio_pagetype',true)=='st2'){ ?> 
         <?php get_template_part('template-parts/portfolio/masonry-2');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_portfolio_pagetype',true)=='st3'){ ?> 
         <?php get_template_part('template-parts/portfolio/boxed');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_portfolio_pagetype',true)=='st4'){ ?> 
         <?php get_template_part('template-parts/portfolio/boxed-2');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_portfolio_pagetype',true)=='st5'){ ?> 
         <?php get_template_part('template-parts/portfolio/parallax');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_portfolio_pagetype',true)=='st6'){ ?> 
         <?php get_template_part('template-parts/portfolio/parallax-dark');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_portfolio_pagetype',true)=='st7'){ ?> 
         <?php get_template_part('template-parts/portfolio/list');?>
		 <?php }
		 else  { ?>
		 <?php get_template_part('template-parts/portfolio/masonry');?>
		 <?php }?>
<?php get_footer(); ?>	