<?php $solonick_options = get_option('solonick'); ?>
<?php get_header();?>
<?php if(have_posts()) : while ( have_posts() ) : the_post();?>
<!--wrapper-->
            <div id="wrapper" class="single-page-wrap">
                <!-- Content-->
                <div class="content">
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
                        <div class="blog-filters">
                           <?php if( has_tag() ) {?>
                            <!-- filter tag   -->
                            <div class="tag-filter blog-btn-filter">
                                <div class="blog-btn"><?php if(!empty($solonick_options['translet_opt_6'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_6',''));?><?php else : ?><?php esc_html_e('Tags ','solonick');?><?php endif;?><i class="fa fa-tags" aria-hidden="true"></i></div>
                                <ul>
                                    <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
                                </ul>
                            </div>
                            <!-- filter tag end  -->
							<?php }?>
							<?php if( has_category() ) {?>
                            <!-- filter category    -->
                            <div class="category-filter blog-btn-filter">
                                <div class="blog-btn"><?php if(!empty($solonick_options['translet_opt_7'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_7',''));?><?php else : ?><?php esc_html_e('Categories ','solonick');?><?php endif;?><i class="fa fa-list-ul" aria-hidden="true"></i></div>
                                
                                <?php the_category( '', '', '' ); ?>
                                
                            </div>
                            <!-- filter category end  -->
							<?php }?>
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
                    <!-- section end-->  
                    <!-- section --> 
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span><?php the_title();?></div>
                        <div class="container">
                            <!-- blog-container  -->
                            <div class="fl-wrap post-container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <!-- post -->
                                        <div class="post fl-wrap fw-post">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <h2><span><?php the_title()?></span></h2>
                                            <div class="parallax-header"> <a href="#0"><?php the_time( get_option( 'date_format' ) ); ?></a><?php if( has_category() ) {?><span><?php if(!empty($solonick_options['translet_opt_8'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_8',''));?> : <?php else : ?><?php esc_html_e('Category : ','solonick');?><?php endif;?></span><?php the_category(' ') ?> <?php }?></div>
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
                                                <h3><a href="#0"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl-post-sub-opt',true));?></a></h3>
												<?php endif;?>
												<div class=" wr-default-page clearfix">
                                                <?php the_content();
												wp_link_pages( array(
												'before'      => '<div class="page-links">',
												'after'       => '</div>',
												'link_before' => '<span>',
												'link_after'  => '</span>',
												'pagelink'    => '%',
												'separator'   => '',
												) );
												?>
												</div>
                                                <ul class="post-counter single-post-counter">
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
										<?php if (Solonick_AfterSetupTheme::return_thme_option('blog_details_user')=='st2'){ ?>
                                        <!-- post-author-->                                   
                                        <div class="post-author">
                                            <div class="author-img">
											<?php
											// Display author avatar
											echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( '', 80 ) ); ?>

                                            </div>
                                            <div class="author-content">
                                                <h5><a href="#"><?php the_author();?></a></h5>
                                                <p><?php the_author_meta('description'); ?></p>
                                                <div class="team-single-social fl-wrap">
													<?php if ( get_the_author_meta('socialtitle') ) : ?>
                                                    <span><?php the_author_meta('socialtitle'); ?> : </span>
													<?php endif;?>
                                                    <ul>
                                                        <?php if ( get_the_author_meta('facebook') ) : ?>
                                                    <li><a href="<?php the_author_meta('facebook'); ?>" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
													<?php endif;?>
													<?php if ( get_the_author_meta('twitter') ) : ?>
                                                    <li><a href="<?php the_author_meta('twitter'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
													<?php endif;?>
													<?php if ( get_the_author_meta('instagram') ) : ?>
                                                    <li><a href="<?php the_author_meta('instagram'); ?>" target="_blank" ><i class="fab fa-instagram"></i></a></li>
													<?php endif;?>
													<?php if ( get_the_author_meta('tumblr') ) : ?>
                                                    <li><a href="<?php the_author_meta('tumblr'); ?>" target="_blank" ><i class="fab fa-tumblr"></i></a></li>
													<?php endif;?>
													<?php if ( get_the_author_meta('pinterest') ) : ?>
													<li><a href="<?php the_author_meta('pinterest'); ?>" target="_blank" ><i class="fab fa-pinterest"></i></a></li>
													<?php endif;?>
													<?php if ( get_the_author_meta('youtube') ) : ?>
													<li><a href="<?php the_author_meta('youtube'); ?>" target="_blank" ><i class="fab fa-youtube"></i></a></li>
													<?php endif;?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
										 <!--post-author end-->
										<?php } else { ?>
										<?php } ;?>
                                       
										<?php if ( comments_open() || get_comments_number() ) { ?>
                                        <div id="comments" class="single-post-comm">
                                        <?php comments_template();?>
                                        </div>
                                        <!--comments end -->
										<?php }?>
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
                                <!-- content-nav -->
                                <div class="content-nav">
                                    <ul>
												<?php $solonick_previous_post = get_previous_post();
                                                $solonick_url = is_object( $solonick_previous_post ) ? get_permalink( $solonick_previous_post->ID ) : '';
                                                $solonick_title = is_object( $solonick_previous_post ) ? get_the_title( $solonick_previous_post->ID ) : '';
												if ($solonick_previous_post) { 
												 $solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $solonick_previous_post->ID ), '' );
												}
											?>
                                    <li>
									<?php  if ($solonick_previous_post) { ?>
									<a href="<?php echo esc_url( $solonick_url ) ?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_29'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_29',''));?> - <?php else: ?><?php esc_html_e('Prev - ','solonick');?><?php endif;?><?php echo esc_attr( $solonick_title ); ?></span></a>
									<?php } else { ?>
									<?php if(!empty($solonick_options['blog_page_url'])):?>
									<a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('blog_page_url',''));?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php esc_html_e('Back To List','solonick');?></span></a>
									<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php esc_html_e('Back To Home Page','solonick');?><?php echo esc_attr( $solonick_title ); ?></span></a>
									<?php endif;?>
									<?php } ;?>
									</li>
                                    <li>
									<?php if(!empty($solonick_options['blog_page_url'])):?>
                                        <a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('blog_page_url',''));?>" class="cur-page"><span><?php if(!empty($solonick_options['translet_opt_13_p'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_13_p',''));?> <?php else : ?><?php esc_html_e('All Posts','solonick');?> <?php endif;?></span></a>
									<?php endif;?>
                                    </li>
												<?php $solonick_next_post = get_next_post();
                                                  $solonick_url = is_object( $solonick_next_post ) ? get_permalink( $solonick_next_post->ID ) : '';
                                                  $solonick_title = is_object( $solonick_next_post ) ? get_the_title( $solonick_next_post->ID ) : ''; 
												  if ($solonick_next_post) {
												  $solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $solonick_next_post->ID ), '' );
												  }
												?>
                                    <li>
									<?php if ($solonick_next_post) {?>
									<a href="<?php echo esc_url( $solonick_url ) ?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_28'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_28',''));?> - <?php else: ?><?php esc_html_e('Next - ','solonick');?><?php endif;?><?php echo esc_attr( $solonick_title ); ?> </span></a>
									<?php } else { ?>
									<?php if(!empty($solonick_options['blog_page_url'])):?>
									<a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('blog_page_url',''));?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php esc_html_e('Back To List','solonick');?> </span></a>
									<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_3'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?><?php else : ?><?php esc_html_e('Back To Home','solonick');?><?php endif;?> </span></a>
									<?php endif;?>
									<?php };?>
									
									</li>
                                </ul>
                                </div>
                                <!-- content-nav end-->     
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
<?php endwhile;  endif; wp_reset_postdata(); ?>
<?php get_footer(); ?>	