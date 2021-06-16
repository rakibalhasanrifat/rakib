<?php $solonick_options = get_option('solonick'); ?>
<?php get_header();?>
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
                        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span><?php printf( esc_attr__( 'Results for : "%s"', 'solonick' ), '<em>' . get_search_query() . '</em>' ); ?></div>
                        <div class="container">
                            <!-- blog-container  -->
                            <div class="fl-wrap post-container">
                                <div class="row">
                                    <div class="col-md-8">
									<?php if(have_posts()) : ?>
									<?php global $post, $post_id;?>
									<?php while ( have_posts() ) : the_post();?>
                                        <!-- post -->
                                        <div class="post fl-wrap fw-post">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <h2><a href="<?php the_permalink()?>"><span><?php the_title()?></span></a></h2>
                                            <div class="parallax-header"> <a href="<?php the_permalink()?>"><?php the_time( get_option( 'date_format' ) ); ?></a><?php if( has_category() ) {?><span><?php esc_html_e('Category : ','solonick');?></span><?php the_category(' ') ?> <?php }?></div>
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
                                            <div class="parallax-header fl-wrap"><span><?php esc_html_e('Tags : ','solonick');?></span><?php the_tags( '', '', '' ); ?></div>
											<?php }?>
                                            <div class="blog-text fl-wrap">
                                                <div class="clearfix"></div>
												<?php if (( get_post_meta($post->ID,'rnr_bl-post-sub-opt',true))):?>
                                                <h3><a href="<?php the_permalink();?>"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl-post-sub-opt',true));?></a></h3>
												<?php endif;?>
                                                <?php
												the_excerpt();
												?>
                                                <a href="<?php the_permalink()?>" class="btn float-btn color-btn flat-btn"><?php esc_html_e('Read more ','solonick');?></a>
                                                <ul class="post-counter">
													<?php if(function_exists('the_views')) {?>
                                                    <li><i class="fa fa-eye"></i><span><?php  the_views(); ?></span></li>
													<?php } ?>
                                                    <li><i class="fal fa-comments-alt"></i><span><?php echo esc_attr(comments_number( '0 Comment', '1 Comment', '% Comments' )); ?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- post end-->
										<?php endwhile; ?>
										<?php wp_reset_postdata();?>
										<?php else : ?>
										<div class="post fl-wrap fw-post">
										<div class="blog-text fl-wrap">
                                        <div class="clearfix"></div>
										<h3><?php esc_attr_e('No Posts Found','solonick');?></h3>
										</div>
										</div>
										<?php endif;?>
										
                                       <!-- pagination   -->
                            
                                    <?php if (function_exists("solonick_pagination")) {
									solonick_pagination($wp_query->max_num_pages);
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
                    
                </div>
                <!-- Content end -->
<?php get_footer(); ?>	