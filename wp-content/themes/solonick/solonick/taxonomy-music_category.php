<?php $solonick_options = get_option('solonick_wp');?>
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
					<?php if (has_post_thumbnail( $post->ID ) ):
					$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
                    <!-- section-->
                    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
                        <div class="bg par-elem"  data-bg="<?php echo esc_url($solonick_image[0]);?>" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="pattern-bg"></div>
                        <div class="container">
                            <div class="section-title">
                                <?php if (( get_post_meta($post->ID,'rnr_so_temp_page_header_title',true))):?>
                                <h2><?php echo balanceTags(get_post_meta($post->ID,'rnr_so_temp_page_header_title',true)); ?></h2>
								<?php else : ?>
								<h2><?php the_title();?></h2>
								<?php endif;?>
                                <p> <?php echo esc_html(get_post_meta($post->ID,'rnr_so_temp_page_header_short_title',true)); ?> </p>
                                <div class="horizonral-subtitle"><span><?php echo esc_html(get_post_meta($post->ID,'rnr_so_temp_page_header_hor_title',true)); ?></span></div>
                            </div>
							<?php if (( get_post_meta($post->ID,'rnr_so_temp_page_header_scroll_title',true))):?>
                            <a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php echo esc_html(get_post_meta($post->ID,'rnr_so_temp_page_header_scroll_title',true)); ?></span> <i class="fal fa-long-arrow-down"></i></a>
							<?php endif;?>
                        </div>
                    </section>
                    <!-- section end-->
					<?php endif;?>
                    <!-- section -->
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle"  data-scrollax="properties: { translateY: '150px' }" ><?php the_title();?><span>//</span></div>
                        <div class="container">
						
                            <!-- portfolio start -->
                            <div class="gallery-items spad    three-column">
							<?php global $loop; 
							$args = array_merge( $wp_query->query, array( 'post_type' => 'music', 'posts_per_page'=>-1, ) );
							query_posts( $args );
							?>	
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                                <!-- gallery-item-->
                                <div class="gallery-item <?php echo esc_attr($solonick_class);?>">
                                    <div class="grid-item-holder">
                                        <img  src="<?php echo esc_url($solonick_image[0]);?>"    alt="<?php the_title();?>">
										<?php if (( get_post_meta($post->ID,'rnr_music_mp3_opt',true))):?>
                                        <div class="album-preview color-bg" data-audiopath="<?php echo esc_html(get_post_meta($post->ID,'rnr_music_mp3_opt',true)); ?>"><i class="fal fa-play"></i></div>
										<?php endif;?>
                                        <div class="album-cover-title">
                                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        </div>
                                        <div class="album-cover-datils">
                                            <ul>
												<?php if (( get_post_meta($post->ID,'rnr_music_track_opt',true))):?>
                                                <li><i class="fal fa-sort-numeric-down"></i><span><?php echo esc_html(get_post_meta($post->ID,'rnr_music_track_opt',true)); ?></span></li>
												<?php endif;?>
                                                <li><i class="fal fa-music"></i><span><?php echo balanceTags($solonick_categories);?></span></li>
												<?php if (( get_post_meta($post->ID,'rnr_music_pur_opt',true))):?>
                                                <li><a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_so_temp_page_header_title',true)); ?>"><i class="fal fa-shopping-cart"></i></a><span>
												<?php if (( get_post_meta($post->ID,'rnr_music_pur_but_opt',true))):?>
												<?php echo esc_html(get_post_meta($post->ID,'rnr_music_pur_but_opt',true)); ?>
												<?php else: ?>
												<?php esc_html_e('Buy','solonick');?>
												<?php endif;?>
												</span></li>
												<?php endif;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- gallery-item end-->
                                <?php endif;?>
								<?php  endwhile; endif; wp_reset_postdata(); ?>
                                
                            </div>
                            <!-- portfolio end -->
                            <!-- preview-sound-->
                            <audio id="preview-sound" src="/"></audio>
                            <!-- preview-sound end-->
                        </div>
                        <div class="sec-lines"></div>
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