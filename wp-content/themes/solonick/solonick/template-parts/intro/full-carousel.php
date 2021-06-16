<!-- hero-wrap-->
                <div class="hero-wrap" id="sec1" data-scrollax-parent="true">
                    <!-- hero-inner-->
                    <div class="hero-inner fl-wrap full-height">
                        <!-- fs-carousel-wrap-->
                        <div class="fs-carousel-wrap fl-wrap full-height slider-carousel-wrap">
						<?php if(get_post_meta($post->ID,'rnr_so_carousel_speed',true)):?>
						<?php $solonick_slider_speed = get_post_meta($post->ID,'rnr_so_carousel_speed',true);?>
						<?php else: ?>
						<?php $solonick_slider_speed = '1000';?>
						<?php endif;?>
						<?php if(get_post_meta($post->ID,'rnr_so_carousel_autoplay_speed',true)):?>
						<?php $solonick_slider_autoplay_speed = get_post_meta($post->ID,'rnr_so_carousel_autoplay_speed',true);?>
						<?php else: ?>
						<?php $solonick_slider_autoplay_speed = '4000';?>
						<?php endif;?>
							<div class="fs-carousel fl-wrap full-height cur_carousel-slider-container" data-slider-speed="<?php echo esc_attr($solonick_slider_speed);?>" data-autoplay="<?php echo esc_attr(get_post_meta($post->ID,'rnr_so_carousel_autoplay',true));?>" data-slider-auto-play-speed="<?php echo esc_attr($solonick_slider_autoplay_speed);?>">
							<?php if(get_post_meta($post->ID,'rnr_ns_home_intro_car_new_opt',true)=='st2'){ ?>
							<?php
									$solonick_cus_car_main_opt = rwmb_meta( 'rnr_md_po_car_cus_gallery' );
									if ( ! empty( $solonick_cus_car_main_opt ) ) {
									$solonick_counter = 1;
									foreach ( $solonick_cus_car_main_opt as $solonick_cus_car_main_opts ) { ;?>
									<?php $solonick_intro_title = isset( $solonick_cus_car_main_opts['rnr_md_car_cus_gallery_intro_title_opt'] ) ? $solonick_cus_car_main_opts['rnr_md_car_cus_gallery_intro_title_opt'] : ''; ?>
									<?php $solonick_intro_subtitle = isset( $solonick_cus_car_main_opts['rnr_md_car_cus_gallery_intro_sub_title_opt'] ) ? $solonick_cus_car_main_opts['rnr_md_car_cus_gallery_intro_sub_title_opt'] : ''; ?>
									<?php $solonick_intro_buttonurl = isset( $solonick_cus_car_main_opts['rnr_md_car_cus_intro_buttonurl_opt'] ) ? $solonick_cus_car_main_opts['rnr_md_car_cus_intro_buttonurl_opt'] : ''; ?>
									<?php $solonick_intro_buttontext = isset( $solonick_cus_car_main_opts['rnr_md_car_cus_intro_buttontext_opt'] ) ? $solonick_cus_car_main_opts['rnr_md_car_cus_intro_buttontext_opt'] : ''; ?>
									<?php $solonick_image_ids = isset( $solonick_cus_car_main_opts['rnr_md_po_car_cus_gallery_img'] ) ? $solonick_cus_car_main_opts['rnr_md_po_car_cus_gallery_img'] : array();
									foreach ( $solonick_image_ids as $solonick_image_id ) {
									$solonick_image = RWMB_Image_Field::file_info( $solonick_image_id, array( 'size' => '' ) ); ?>
									 <!-- fs-carousel-item-->
                                <div class="fs-carousel-item">
                                    <div class="fs-carousel-title fl-wrap">
                                        <div class="fs-carousel-titlecat"><a href="#0"><?php echo esc_html($solonick_intro_subtitle);?></a></div>
                                        <?php if ( !empty( $solonick_intro_title ) ) { ?>
										<h3><a href="<?php if ( !empty( $solonick_intro_buttonurl ) ) { ?><?php echo esc_url($solonick_intro_buttonurl);?><?php } else { ?>#<?php } ?>"><?php echo esc_html($solonick_intro_title);?></a></h3>
										<?php } ?>
										<?php if ( !empty( $solonick_intro_buttonurl ) ) { ?>
                                        <a href="<?php echo esc_url($solonick_intro_buttonurl);?>" class="fs-carousel-link"><?php if ( !empty( $solonick_intro_buttontext ) ) { ?><?php echo esc_html($solonick_intro_buttontext);?><?php } else { ?><?php esc_html_e('View Project','solonick');?><?php } ?></a>
										<?php } ?>
                                    </div>
                                    <div class="carousle-item-number"><span><?php esc_html_e('0','solonick');?><?php echo esc_attr($solonick_counter);?><?php esc_html_e('.','solonick');?></span></div>
                                    <div class="bg"  data-bg="<?php echo esc_url(($solonick_image['url']));?>"></div>
                                    <div class="overlay"></div>
                                </div>
                                <!-- fs-carousel-item end-->
								
									<?php } ?>
									<?php $solonick_counter++;?>
									<?php } } ;?>
							<?php } else { ?>
							<?php global $post, $post_id;?>
							<?php $solonick_showpost= get_post_meta($post->ID, 'rnr_so_intro_car_po_co', true); $solonick_categoryname= get_post_meta($post->ID, 'rnr_so_intro_car_po', true);
							$solonick_paged=(get_query_var('paged'))?get_query_var('paged'):1;
							$solonick_loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page'=>$solonick_showpost, 'portfolio_category'=> $solonick_categoryname, 'paged'=>$solonick_paged ) ); ?>
							<?php $solonick_counter = 01;?>
							<?php while ( $solonick_loop->have_posts() ) : $solonick_loop->the_post();?>
				
							<?php $solonick_portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');?>
							<?php 
									$solonick_class = ""; 
									$solonick_categories = ""; 
									foreach ($solonick_portfolio_category as $solonick_item) {
										$solonick_class.=esc_attr($solonick_item->slug . ' ');
										$solonick_categories.='<a>';
										$solonick_categories.=esc_attr($solonick_item->name . '  ');
										$solonick_categories.='</a>';
									}?>
								<?php if (has_post_thumbnail( $post->ID ) ):
								$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
                                <!-- fs-carousel-item-->
                                <div class="fs-carousel-item">
                                    <div class="fs-carousel-title fl-wrap">
                                        <div class="fs-carousel-titlecat"><?php echo balanceTags($solonick_categories);?></div>
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <a href="<?php the_permalink();?>" class="fs-carousel-link"><?php esc_html_e('View Project','solonick');?></a>
                                    </div>
                                    <div class="carousle-item-number"><span><?php esc_html_e('0','solonick');?><?php echo esc_attr($solonick_counter);?><?php esc_html_e('.','solonick');?></span></div>
                                    <div class="bg"  data-bg="<?php echo esc_url($solonick_image[0]);?>"></div>
                                    <div class="overlay"></div>
                                </div>
                                <!-- fs-carousel-item end-->
								<?php endif;?>
								<?php $solonick_counter++;?>
                                <?php endwhile;
								wp_reset_postdata();?>
                               <?php } ;?>                                                      
                            </div>
                            <!--  fs-carousel end --> 
                            <!--  slider nav --> 
                            <div class="sp-cont sarr-contr sp-cont-prev"><i class="fal fa-arrow-left"></i></div>
                            <div class="sp-cont sarr-contr sp-cont-next"><i class="fal fa-arrow-right"></i></div>
                            <div class="slider-nav-counter"></div>
                            <!--  slider nav end--> 
                        </div>
                        <!-- fs-carousel-wrap-->
                    </div>
                </div>
                <!-- hero-wrap end-->