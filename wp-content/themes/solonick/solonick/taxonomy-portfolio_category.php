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
							$args = array_merge( $wp_query->query, array( 'post_type' => 'portfolio', 'posts_per_page'=>-1, ) );
							query_posts( $args );
							?>	
						<?php $solonick_counter = 01;?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php $solonick_portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');?>
							<?php 
									$solonick_class = ""; 
									$solonick_categories = ""; 
									foreach ($solonick_portfolio_category as $solonick_item) {
										$solonick_class.=esc_attr($solonick_item->slug . ' ');
										$solonick_categories.='<li>';
										$solonick_categories.='<a ';
										$solonick_categories.=' href="'.get_home_url( '/' ).'/portfolio_category/';
										$solonick_categories.=esc_attr($solonick_item->slug . ' ');
										$solonick_categories.='">';
										$solonick_categories.=esc_attr($solonick_item->name . '  ');
										$solonick_categories.='</a>';
										$solonick_categories.='</li>';
									}?>
								<?php if (has_post_thumbnail( $post->ID ) ):
								$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
                                    <!--   hidden-works-item -->
                                    <div class="hidden-works-item fl-wrap" data-bgscr="<?php echo esc_url($solonick_image[0]);?>">
                                        <div class="hidden-works-item-media">
                                            <div class="hidden-works-item-media-img fl-wrap">
                                                <img src="<?php echo esc_url($solonick_image[0]);?>" alt="<?php the_title();?>">
                                                <a href="<?php echo esc_url($solonick_image[0]);?>" class="image-popup"><i class="fal fa-search"></i></a>
                                            </div>
                                            <span><?php esc_html_e('0','solonick');?><?php echo esc_attr($solonick_counter);?>.</span>
                                        </div>
                                        <div class="hidden-works-item-text">
                                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                            <ul>
                                                <?php echo balanceTags($solonick_categories);?>
                                            </ul>
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