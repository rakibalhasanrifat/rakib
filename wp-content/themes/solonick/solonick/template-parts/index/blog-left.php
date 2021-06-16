<?php $solonick_options = get_option('solonick'); ?>
<!-- blog-container  -->
                            <div class="fl-wrap post-container">
                                <div class="row">
                                    <div class="col-md-8 pull-right">
									<?php global $post, $post_id;?>
									<?php while ( have_posts() ) : the_post();?>
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
										<div class="hidden"><?php the_tags(); next_posts_link(); previous_posts_link();wp_link_pages();comment_form();paginate_comments_links();previous_comments_link(); wp_enqueue_script('comment-reply'); the_post_thumbnail();?></div>
                                       <!-- pagination   -->
                            
                                    <?php if (function_exists("solonick_pagination")) {
									solonick_pagination($wp_query->max_num_pages);
									} ?>
                                
                            <!--  pagination end -->
                                    </div>
                                    <!-- blog-sidebar  -->
                                    <div class="col-md-4 pull-left">
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