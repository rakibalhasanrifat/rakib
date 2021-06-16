<?php $solonick_options = get_option('solonick'); ?>
<?php get_header();?>



		 <?php if(get_post_meta($post->ID,'rnr_wr-pagetype',true)=='st1'){ ?> 
         <?php get_template_part('template-parts/page/default');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr-pagetype',true)=='st2'){ ?> 
         <?php get_template_part('template-parts/page/solonick-element');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr-pagetype',true)=='st3'){ ?> 
         <?php get_template_part('template-parts/page/left');?>
		 <?php }
		 else if(get_post_meta($post->ID,'rnr_wr-pagetype',true)=='st4'){ ?> 
         <?php get_template_part('template-parts/page/right');?>
		 <?php }
		 
		 else  { ?>
		 <?php get_template_part('template-parts/page/default');?>
		 <?php }?>
       
  
<?php get_footer(); ?>	
