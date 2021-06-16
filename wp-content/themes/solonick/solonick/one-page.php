<?php $solonick_options = get_option('solonick');?>
<?php
/*Template Name:Scrolling Page Template*/
 get_header();
?>
<div id="wrapper">
<?php if(get_post_meta($post->ID,'rnr_wr_nav_sc_opt',true)=='st2'){ ?>
<!-- scroll-nav-wrap-->
                <div class="scroll-nav-wrap">
				<?php if (Solonick_AfterSetupTheme::return_thme_option('scroll_down_opt')=='st2'){ ?>
                    <div class="scroll-down-wrap">
                        <div class="mousey">
                            <div class="scroller"></div>
                        </div>
						<?php if(!empty($solonick_options['translet_opt_2'])):?>
                        <span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_2',''));?></span>
						<?php else : ?>
                        <span><?php esc_html_e('Scroll Down','solonick');?></span>
						<?php endif;?>
                    </div>
					<?php }
					else{ ?>
					<?php } ;?>
                    <nav class="scroll-nav scroll-init">
                        <ul>
									<?php
									$solonick_car_slide_opt = rwmb_meta( 'rnr_po_pu_scroll_nav' );
									if ( ! empty( $solonick_car_slide_opt ) ) {
									foreach ( $solonick_car_slide_opt as $solonick_car_slide_opts ) { ;?>
									<?php $solonick_navi = isset( $solonick_car_slide_opts['po_pu_opt_nav_i'] ) ? $solonick_car_slide_opts['po_pu_opt_nav_i'] : ''; ?>
									<?php $solonick_navn = isset( $solonick_car_slide_opts['po_pu_opt_nav_n'] ) ? $solonick_car_slide_opts['po_pu_opt_nav_n'] : ''; ?>
									<?php if ( !empty( $solonick_navi ) ) { ?>
									<?php if ( !empty( $solonick_navn ) ) { ?>
                                        <li><a class="scroll-link" target="blank" href="<?php echo esc_html($solonick_navi);?>"><?php echo esc_html($solonick_navn);?></a></li>
									<?php } ?>
									<?php } ?>
									<?php } } ;?>
                            
                        </ul>
                    </nav>
                </div>
                <!-- scroll-nav-wrap end-->
				<?php }
				else  { ?>
				<?php } ;?>
<!-- hero-wrap-->
	<?php if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st2'){ ?>
	<?php get_template_part('template-parts/intro/half-image');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st3'){ ?>
	<?php get_template_part('template-parts/intro/impulse');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st4'){ ?>
	<?php get_template_part('template-parts/intro/full-image');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st5'){ ?>
	<?php get_template_part('template-parts/intro/full-slider');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st6'){ ?>
	<?php get_template_part('template-parts/intro/slideshow');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st7'){ ?>
	<?php get_template_part('template-parts/intro/full-carousel');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st8'){ ?>
	<?php get_template_part('template-parts/intro/mp4');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st9'){ ?>
	<?php get_template_part('template-parts/intro/vimeo');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st10'){ ?>
	<?php get_template_part('template-parts/intro/youtube');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st11'){ ?>
	<?php get_template_part('template-parts/intro/rev');?>
	<?php } else if(get_post_meta($post->ID,'rnr_wr_intro_sc_opt',true)=='st0'){ ?>
	<?php } else { ?>
	<?php get_template_part('template-parts/intro/half-slider');?>
	<?php } ;?>
<!-- hero-wrap end-->
							<div class="content">
							<?php while ( have_posts() ) : the_post(); ?>
							<?php the_content();?>
							<?php endwhile; ?>
							<?php wp_reset_postdata();?>
							</div>

<?php get_footer(); ?>	