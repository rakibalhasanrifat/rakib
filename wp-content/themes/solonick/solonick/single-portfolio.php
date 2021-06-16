<?php $solonick_options = get_option('solonick'); ?>
<?php get_header();?>
		
		<?php if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st1'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/carousel');?>
		
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st2'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/carousel2');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st3'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/gallery');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st4'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/gallery2');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st5'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/slider');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st6'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/showcase');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st7'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/fullscreen-slider');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st8'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/youtube');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st9'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/vimeo');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr_port_dt_opt',true)=='st10'){ ?> 
         <?php get_template_part('template-parts/portfolio-details/mp4');?>
		 <?php }
		 else  { ?>
		 <?php get_template_part('template-parts/portfolio-details/carousel');?>
		 <?php }?>
<?php get_footer(); ?>	