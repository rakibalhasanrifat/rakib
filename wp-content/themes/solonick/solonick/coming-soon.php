<?php $solonick_options = get_option('solonick');?>
<?php
/*Template Name:Coming Soon Page Template*/
 get_template_part('coming-header');
 
 
 ?>
 <!-- Main  -->
        <div id="main">
            <div class="cs-wrap">
                <!-- hero-wrap-->
                <div class="hero-wrap soon-wrap">
                    <div class="impulse-wrap">
                        <div class="mm-parallax">
                            <div class="half-hero-wrap section-entry">
                                <h1><?php the_title();?></h1>
								<?php if (( get_post_meta($post->ID,'rnr_so_co_co_opt',true))):?>
                                <div class="counter-widget fl-wrap" data-countDate="<?php echo esc_attr(get_post_meta($post->ID,'rnr_so_co_co_opt',true)); ?>">
                                    <!-- countdown -->
                                    <div class="countdown fl-wrap">
                                        <div class="countdown-item">
                                            <span class="days rot">00</span>
                                            <p><?php esc_html_e('days','solonick');?></p>
                                        </div>
                                        <div class="countdown-item">
                                            <span class="hours rot">00</span>
                                            <p><?php esc_html_e('hours ','solonick');?></p>
                                        </div>
                                        <div class="countdown-item">
                                            <span class="minutes rot2">00</span>
                                            <p><?php esc_html_e('minutes ','solonick');?></p>
                                        </div>
                                        <div class="countdown-item">
                                            <span class="seconds rot2">00</span>
                                            <p><?php esc_html_e('seconds ','solonick');?></p>
                                        </div>
                                    </div>
                                    <!-- countdown end -->  
                                </div>
								<?php endif;?>
								<?php if (( get_post_meta($post->ID,'rnr_so_co_sub_ti',true))):?>
                                <h4><?php echo esc_html(get_post_meta($post->ID,'rnr_so_co_sub_ti',true)); ?></h4>
								<?php endif;?>
                                <div class="clearfix"></div>
								<?php if (( get_post_meta($post->ID,'rnr_so_co_mail_link',true))):?>
                                <div class="subcribe-form">
                                    <?php if( function_exists( 'mc4wp_show_form' ) ) { ?>
									<?php echo do_shortcode(get_post_meta($post->ID,'rnr_so_co_mail_link',true)) ?>  
									<?php } ?>
                                </div>
								<?php endif;?>
                            </div>
							<?php if (has_post_thumbnail( $post->ID ) ):
							$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
							<?php endif;?>
                            <div class="half-bg">
                                <div class="bg"  data-bg="<?php echo esc_url($solonick_image[0]);?>"></div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                    <!-- impulse-wrap end-->
                </div>
                <!-- hero-wrap end-->
                <div class="hero-line-dec imp-her-line"></div>
                <div class="pattern-bg"></div>
                <div class="half-bg-dec" data-ran="12"></div>
            </div>
        </div>
        <!-- Main end -->
<?php get_template_part('coming-footer'); ?>	