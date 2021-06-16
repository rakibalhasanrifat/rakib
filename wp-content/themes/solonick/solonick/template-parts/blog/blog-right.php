<?php $solonick_options = get_option('solonick'); ?>
<!--wrapper-->
            <div id="wrapper" class="single-page-wrap">
                <!-- Content-->
                <div class="content">
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
                                <h2><?php echo do_shortcode(get_post_meta($post->ID,'rnr_so_temp_page_header_title',true)) ?></h2>
								<?php else : ?>
								<h2><?php the_title();?></h2>
								<?php endif;?>
                                <p> <?php echo esc_html(get_post_meta($post->ID,'rnr_so_temp_page_header_short_title',true)); ?> </p>
                                <div class="horizonral-subtitle"><span><?php echo esc_html(get_post_meta($post->ID,'rnr_so_temp_page_header_hor_title',true)); ?></span></div>
                            </div>
							<?php if(!empty($solonick_options['translet_opt_4'])):?>
                            <a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_4',''));?> <i class="fal fa-long-arrow-down"></i></a>
							<?php else : ?>
							<a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php esc_html_e('Let','solonick');?>'<?php esc_html_e('s Start ','solonick');?> <i class="fal fa-long-arrow-down"></i></a>							
							<?php endif;?>
                        </div>
                    </section>
                    <!-- section end-->
					<?php endif;?>
                    <div class="single-page-decor"></div>
                    <!-- single-page-fixed-row-->
                    <div class="single-page-fixed-row blog-single-page-fixed-row">
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
                        <!-- filter  -->
                        <div class="blog-filters so-index-blog-filters">
                            
                            <div class="blog-search">
                                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searh-inner fl-wrap">
                                    <input name="s" id="se" type="text" class="search" placeholder="<?php if(!empty($solonick_options['translet_opt_5'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_5',''));?><?php else : ?><?php esc_html_e('Search...','solonick');?><?php endif;?>" value="<?php if(!empty($solonick_options['translet_opt_5'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_5',''));?><?php else : ?><?php esc_html_e('Search...','solonick');?><?php endif;?>" />
                                    <button class="search-submit color-bg" id="submit_btn"><i class="fa fa-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!-- filter end    -->
                    </div>
                    <!-- single-page-fixed-row end-->
                    <!-- section --> 
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span><?php the_title();?></div>
                        <div class="container">
                            <!-- blog-container  -->
                            <div class="fl-wrap post-container">
                                <div class="row">
                                    <div class="col-md-8">
									<?php
									global $post, $post_id;;
									$solonick_showpost= get_post_meta($post->ID, 'rnr_blog-post-show', true);						
									$solonick_categoryname= get_post_meta($post->ID, 'rnr_blog-post-cat', true);						
									$solonick_paged=(get_query_var('paged'))?get_query_var('paged'):1;
									$solonick_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page'=>$solonick_showpost, 'category_name'=> $solonick_categoryname, 'paged'=>$solonick_paged ) ); ?>
									<?php while ( $solonick_loop->have_posts() ) : $solonick_loop->the_post();?> 
                                        <!-- post -->
                                        <div class="post fl-wrap fw-post">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <h2><a href="<?php the_permalink()?>"><span><?php the_title()?></span></a></h2>
                                            <div class="parallax-header"> <a href="<?php the_permalink()?>"><?php the_time( get_option( 'date_format' ) ); ?></a><?php if( has_category() ) {?><span><?php if(!empty($solonick_options['translet_opt_8'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_8',''));?> : <?php else : ?><?php esc_html_e('Category : ','solonick');?><?php endif;?></span><?php the_category(' ') ?> <?php }?></div>
                                            <!-- blog media -->
                                            <?php if( has_post_format( 'image' ) !='') :?>
											<?php get_template_part('template-parts/posttype/image');?>	
											<?php elseif( has_post_format( 'video' ) !='') :?>
											<?php get_template_part('template-parts/posttype/video');?>
											<?php elseif( has_post_format( 'gallery' ) !='') :?>
											<?php get_template_part('template-parts/posttype/gallery');?>
											<?php else :?>
											<?php get_template_part('template-parts/posttype/image');?>	
											<?php endif;?>
                                            <!-- blog media end -->
											<?php if( has_tag() ) {?>
                                            <div class="parallax-header fl-wrap"><span><?php if(!empty($solonick_options['translet_opt_6'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_6',''));?> : <?php else : ?><?php esc_html_e('Tags : ','solonick');?><?php endif;?></span><?php the_tags( '', '', '' ); ?></div>
											<?php }?>
                                            <div class="blog-text fl-wrap">
                                                <div class="clearfix"></div>
												<?php if (( get_post_meta($post->ID,'rnr_bl-post-sub-opt',true))):?>
                                                <h3><a href="<?php the_permalink();?>"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl-post-sub-opt',true));?></a></h3>
												<?php endif;?>
                                                <?php
												the_excerpt();
												?>
                                                <a href="<?php the_permalink()?>" class="btn float-btn color-btn flat-btn"><?php if(!empty($solonick_options['translet_opt_9'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_9',''));?><?php else : ?><?php esc_html_e('Read more ','solonick');?><?php endif;?></a>
                                                <ul class="post-counter">
													<?php if(function_exists('the_views')) {?>
                                                    <li><i class="fa fa-eye"></i><span><?php  the_views(); ?></span></li>
													<?php } ?>
                                                    <?php
													if(!empty($solonick_options['translet_opt_26'])):
													$solonick_comment_text= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_26',''));;
													else: 
													$solonick_comment_text='Comment';
													endif;
													if(!empty($solonick_options['translet_opt_27'])):
													$solonick_comment_text2= esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_27',''));;
													else: 
													$solonick_comment_text2='Comments';
													endif;
													?>
                                                    <li><i class="fal fa-comments-alt"></i><span><?php echo esc_attr(comments_number( '0 '.$solonick_comment_text.'', '1 '.$solonick_comment_text.'', '% '.$solonick_comment_text2.'' )); ?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- post end-->
										<?php endwhile; ?>
								        <?php wp_reset_postdata();?>
                                       <!-- pagination   -->
                            
                                    <?php if (function_exists("solonick_pagination")) {
									solonick_pagination($solonick_loop->max_num_pages);
									} ?>
                                
                            <!--  pagination end -->
                                    </div>
                                    <!-- blog-sidebar  -->
                                    <div class="col-md-4">
                                        <div class="blog-sidebar fl-wrap fixed-bar">
                                         <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
										<?php dynamic_sidebar( 'sidebar-1' ); ?>
										<?php endif; ?>
										</div>
                                    </div>
                                    <!-- blog-sidebar end -->
                                    <div class="limit-box fl-wrap"></div>
                                </div>
                                    
                            </div>
                            <!-- blog-container end    -->
                        </div>
                        <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
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