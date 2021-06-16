<?php $solonick_options = get_option('solonick');?>
<?php
/*Template Name:Service Page Template*/
 get_header();
 ?>
 
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
                                <div class="hidden-info-title"><?php the_title();?></div>
                                <div class="hidden-works-list fl-wrap">
								<?php global $post, $post_id;?>
							<?php $solonick_showpost= get_post_meta($post->ID, 'rnr_service-post-show', true);$solonick_categoryname= get_post_meta($post->ID, 'rnr_service-post-cat', true);
							$solonick_paged=(get_query_var('paged'))?get_query_var('paged'):1;
							$solonick_loop = new WP_Query( array( 'post_type' => 'service', 'posts_per_page'=>$solonick_showpost, 'service_category'=> $solonick_categoryname, 'paged'=>$solonick_paged ) ); ?>
							<?php $solonick_counter = 01;?>
							<?php while ( $solonick_loop->have_posts() ) : $solonick_loop->the_post();?>
							<?php $solonick_music_category = wp_get_post_terms($post->ID,'music_category');?>
							<?php 
									$solonick_class = ""; 
									$solonick_categories = ""; 
									foreach ($solonick_music_category as $solonick_item) {
										$solonick_class.=esc_attr($solonick_item->slug . ' ');
										$solonick_categories.='';
										$solonick_categories.=esc_attr($solonick_item->name . '  ');
										$solonick_categories.=' ';
									}?>
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
									<?php endwhile;
									wp_reset_postdata();?>  
                                </div>
								<?php
								global $solonick_previous_post, $solonick_next_post;
								if(!empty($solonick_options['translet_opt_17'])):
								$solonick_previous_post= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_17',''));
								else: 
								$solonick_previous_post='Previous Page';
								endif;
								if(!empty($solonick_options['translet_opt_18'])):
								$solonick_next_post= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_18',''));
								else: 
								$solonick_next_post='Next Page';
								endif;
								
								?>
								<div class="hidden-info-pagination"><?php previous_posts_link( '<i class="fal fa-arrow-left"></i><span class="previous-post">'.esc_html($solonick_previous_post).'</span>', $solonick_loop->max_num_pages ); ?><?php next_posts_link( '<span class="next-post">'. esc_html($solonick_next_post).'</span><i class="fal fa-arrow-right"></i>', $solonick_loop->max_num_pages ); ?></div>
                            </div>
                        </div>
                        <!-- hidden-info-wrap end -->
                        <div class="fl-wrap limit-box"></div>
                    </section>
                    <!-- section end-->              
                    <?php if (( get_post_meta($post->ID,'rnr_bl_call_to_button',true))):?>
                    <!-- section-->
                    <section class="dark-bg2 small-padding order-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_call_to_title',true)); ?></h3>
                                </div>
                                <div class="col-md-4"><a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl_call_to_button',true)); ?>" class="btn flat-btn color-btn"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_call_to_text',true)); ?></a> </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
					<?php endif;?>
                </div>
                <!-- Content end -->
 
<?php get_footer(); ?>	