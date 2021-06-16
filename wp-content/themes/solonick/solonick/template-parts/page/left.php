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
                        <?php if(!empty($solonick_options['translet_opt_3'])):?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?></span></a>
						<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span><?php esc_html_e('Back to home','solonick');?></span></a>
						<?php endif;?>
                    </div>
                    <!-- single-page-fixed-row end-->
                    <!-- section --> 
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span><?php the_title();?></div>
						<?php while ( have_posts() ) : the_post(); ?>
                        <div class="container">
                            <!-- blog-container  -->
                            <div class="fl-wrap post-container">
                                <div class="row">
                                    <div class="col-md-8 pull-right">
									
                                        <!-- post -->
                                        <div class="post fl-wrap fw-post">
										<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            
                                            <div class="blog-text fl-wrap">
                                                <div class="clearfix"></div>
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
                                        </div>
                                        </div>
                                        <!-- post end-->
										
                                    </div>
                                    <!-- blog-sidebar  -->
                                    <div class="col-md-4 pull-left">
                                        <div class="blog-sidebar fl-wrap fixed-bar">
                                         <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
										<?php dynamic_sidebar( 'sidebar-2' ); ?>
										<?php endif; ?>
										</div>
                                    </div>
                                    <!-- blog-sidebar end -->
                                    <div class="limit-box fl-wrap"></div>
                                </div>
                                    
                            </div>
                            <!-- blog-container end    -->
                        </div>
						<?php endwhile; ?>
						<?php wp_reset_postdata();?>  
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