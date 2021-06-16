<?php $solonick_options = get_option('solonick'); ?>
<?php
 get_header();?>

 <!--wrapper-->
            <div id="wrapper" class="single-page-wrap">
                <!-- Content-->
                <div class="content">
                    <div class="single-page-decor"></div>
                    <div class="single-page-fixed-row">
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
                        <?php if(!empty($solonick_options['translet_opt_3'])):?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?></span></a>
						<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span><?php esc_html_e('Back to home','solonick');?></span></a>
						<?php endif;?>
                    </div>
                    <!-- section-->
                    <section class="dark-bg no-padding">
                        <div class="hidden-info-wrap-bg">
                            <div class="bg-ser">
                            </div>
                            <div class="overlay"></div>
                        </div>
                        <!--   hidden-info-wrap -->
                        <div class="hidden-info-wrap">
                            <div class="hidden-info fl-wrap">
                                <div class="hidden-info-title"><?php single_cat_title( '', true ); ?></div>
                                <div class="hidden-works-list fl-wrap">
								<?php global $loop; 
							$args = array_merge( $wp_query->query, array( 'post_type' => 'service', 'posts_per_page'=>-1, ) );
							query_posts( $args );
							?>	
							<?php $solonick_counter = 01;?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php if (has_post_thumbnail( $post->ID ) ):
								$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solonick_music_post' );?>
                                    <!--   hidden-works-item -->
                                    <div class="hidden-works-item  serv-works-item fl-wrap" data-bgscr="<?php echo esc_url($solonick_image[0]);?>">
                                        <div class="hidden-works-item-text">
                                            <h3><?php the_title();?></h3>
											<?php if (( get_post_meta($post->ID,'rnr_wr_service_so_en',true))=='st2'):?>
                                            <ul class="fl-wrap">
											<?php
											$solonick_service_list = rwmb_meta( 'rnr_so_ser_data_tab' );
											if ( ! empty( $solonick_service_list ) ) {
											foreach ( $solonick_service_list as $solonick_service_lists ) { ;?>
											<?php $solonick_service_name = isset( $solonick_service_lists['rnr_so_ser_data_title'] ) ? $solonick_service_lists['rnr_so_ser_data_title'] : ''; ?>
											<?php $solonick_service_url = isset( $solonick_service_lists['rnr_so_ser_data_url'] ) ? $solonick_service_lists['rnr_so_ser_data_url'] : ''; ?>
											<?php if ( !empty( $solonick_service_name ) ) { ?>
											<?php if ( !empty( $solonick_service_url ) ) { ?>
                                            <li><a href="<?php echo esc_url($solonick_service_url);?>"><?php echo esc_html($solonick_service_name);?></a></li>
											<?php } ;?>
											<?php } ;?>
											<?php } } ;?>
                                            </ul>
											<?php else :?>
											<?php endif;?>
                                            <?php the_content();?>
                                            <div class="clearfix"></div>
											<?php if (( get_post_meta($post->ID,'rnr_popu_service_tab_p',true))):?>
                                            <div class="serv-price"><?php echo esc_html(get_post_meta($post->ID,'rnr_popu_service_tab_p',true)); ?></div>
											<?php endif;?>
                                            <span class="serv-number"><?php esc_html_e('0','solonick');?><?php echo esc_attr($solonick_counter);?>.</span>
											<?php if (( get_post_meta($post->ID,'rnr_popu_service_tab_i',true))):?>
                                            <div class="serv-icon"><i class="<?php echo esc_attr(get_post_meta($post->ID,'rnr_popu_service_tab_i',true)); ?>"></i></div>
											<?php endif;?>
                                        </div>
                                    </div>
                                    <!--   hidden-works-item end -->
                                    <?php endif;?>
									<?php $solonick_counter++;?>
									
							<?php  endwhile; endif; wp_reset_postdata(); ?>  
                                </div>
								
                            </div>
                        </div>
                        <!-- hidden-info-wrap end -->
                        <div class="fl-wrap limit-box"></div>
                    </section>
                    <!-- section end-->              
                    
                </div>
                <!-- Content end -->
 
<?php get_footer(); ?>	