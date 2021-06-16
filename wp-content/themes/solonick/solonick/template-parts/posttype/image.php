<?php if (has_post_thumbnail( $post->ID ) ):?>
<div class="blog-media fl-wrap">
	<?php 
	$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solonick_portfolio_image' );?>
	<a href="<?php the_permalink();?>">
	<img alt="<?php the_title();?>" src="<?php echo esc_url($solonick_image[0]);?>" class="respimg" />
	</a>
	
</div>
<?php endif;?>