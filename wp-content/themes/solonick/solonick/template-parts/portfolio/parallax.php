<?php $solonick_options = get_option('solonick'); ?>
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
                    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
					<?php if (has_post_thumbnail( $post->ID ) ):
					$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
					<?php endif;?>
                        <div class="bg par-elem"  data-bg="<?php echo esc_url($solonick_image[0]);?>" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="pattern-bg"></div>
                        <div class="container">
                            <div class="section-title">
								<?php if (( get_post_meta($post->ID,'rnr_so_port_page_header_title_parallax',true))):?>
                                <h2><?php echo do_shortcode(get_post_meta($post->ID,'rnr_so_port_page_header_title_parallax',true)) ?></h2>
								<?php else : ?>
								<h2><?php the_title();?></h2>
								<?php endif;?>
                                <p> <?php echo esc_html(get_post_meta($post->ID,'rnr_so_port_page_header_short_title_parallax',true)); ?> </p>
                                <div class="horizonral-subtitle"><span><?php echo esc_html(get_post_meta($post->ID,'rnr_so_port_page_header_hor_title_parallax',true)); ?></span></div>
                            </div>
							<?php if(!empty($solonick_options['translet_opt_4'])):?>
                            <a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_4',''));?> <i class="fal fa-long-arrow-down"></i></a>
							<?php else : ?>
							<a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php esc_html_e('Let','solonick');?>'<?php esc_html_e('s Start ','solonick');?> <i class="fal fa-long-arrow-down"></i></a>							
							<?php endif;?>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section-->
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle"  data-scrollax="properties: { translateY: '150px' }" ><?php the_title();?><span><?php esc_html_e('//','solonick');?></div>
                        <div class="container">
						<?php global $post, $post_id;?>
							<?php $solonick_showpost= get_post_meta($post->ID, 'rnr_portfolio-post-show', true);$solonick_categoryname= get_post_meta($post->ID, 'rnr_portfolio-post-cat', true);
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
										$solonick_categories.='<a ';
										$solonick_categories.=' href="'.get_home_url( '/' ).'/portfolio_category/';
										$solonick_categories.=esc_attr($solonick_item->slug . ' ');
										$solonick_categories.='">';
										$solonick_categories.=esc_attr($solonick_item->name . '  ');
										$solonick_categories.='</a>';
									}?>
								<?php if (has_post_thumbnail( $post->ID ) ):
								$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solonick_portfolio_image' );?>
							<?php if(get_post_meta($post->ID,'rnr_wr_tmp_par_image',true)=='st2'){ ?> 
							<?php global $solonick_left_1, $solonick_left_2, $solonick_left_3, $solonick_top_1, $solonick_top_2, $solonick_top_3, $solonick_translatey_1, $solonick_translatey_2, $solonick_translatey_3 ?>
							<!--left 1 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_left1',true))): ?>
							<?php $solonick_left_1 = get_post_meta($post->ID,'rnr_tmp_data_position_left1',true);?>
							<?php else :?>
							<?php $solonick_left_1 = '0';?>
							<?php endif;?>
							<!--top 1 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_top1',true))): ?>
							<?php $solonick_top_1 = get_post_meta($post->ID,'rnr_tmp_data_position_top1',true);?>
							<?php else :?>
							<?php $solonick_top_1 = '0';?>
							<?php endif;?>
							<!--translatey 1 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_translatey1',true))): ?>
							<?php $solonick_translatey_1 = get_post_meta($post->ID,'rnr_tmp_translatey1',true);?>
							<?php else :?>
							<?php $solonick_translatey_1 = '-150px';?>
							<?php endif;?>
							
							<!--left 2 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_left2',true))): ?>
							<?php $solonick_left_2 = get_post_meta($post->ID,'rnr_tmp_data_position_left2',true);?>
							<?php else :?>
							<?php $solonick_left_2 = '25';?>
							<?php endif;?>
							<!--top 2 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_top2',true))): ?>
							<?php $solonick_top_2 = get_post_meta($post->ID,'rnr_tmp_data_position_top2',true);?>
							<?php else :?>
							<?php $solonick_top_2 = '60';?>
							<?php endif;?>
							<!--translatey 2 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_translatey2',true))): ?>
							<?php $solonick_translatey_2 = get_post_meta($post->ID,'rnr_tmp_translatey2',true);?>
							<?php else :?>
							<?php $solonick_translatey_2 = '-50px';?>
							<?php endif;?>
							<!--left 3 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_left3',true))): ?>
							<?php $solonick_left_3 = get_post_meta($post->ID,'rnr_tmp_data_position_left3',true);?>
							<?php else :?>
							<?php $solonick_left_3 = '25';?>
							<?php endif;?>
							<!--top 3 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_top3',true))): ?>
							<?php $solonick_top_3 = get_post_meta($post->ID,'rnr_tmp_data_position_top3',true);?>
							<?php else :?>
							<?php $solonick_top_3 = '60';?>
							<?php endif;?>
							<!--translatey 3 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_translatey3',true))): ?>
							<?php $solonick_translatey_3 = get_post_meta($post->ID,'rnr_tmp_translatey3',true);?>
							<?php else :?>
							<?php $solonick_translatey_3 = '-50px';?>
							<?php endif;?>
							
							<!--parallax-item end-->	
                            <div class="paralax-sec-separator fl-wrap"></div>
                            <!--parallax-item -->	
                            <div id="port-main-<?php the_ID(); ?>" class="parallax-item fl-wrap" data-scrollax-parent="true">
                                <div class="row">
                                    <div class="col-md-5"></div>
                                    <div class="col-md-7">
                                        <div class="parallax-header right-parallax-header"><span><?php esc_html_e('Category : ','solonick');?></span><?php echo balanceTags($solonick_categories);?></div>
                                        <img  src="<?php echo esc_url($solonick_image[0]);?>"   alt="<?php the_title();?>">
                                    </div>
                                    <div class="parallax-text left-pos" data-scrollax="properties: { translateY: '-250px' }">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
										 <?php if (( get_post_meta($post->ID,'rnr_tmp_par_list_title',true))):?>
                                        <h4><span><?php echo esc_html(get_post_meta($post->ID,'rnr_tmp_par_list_title',true)); ?></span></h4>
										<?php else : ?>
										<div class="so-gap"></div>
										<?php endif;?>
                                        <a href="<?php the_permalink();?>" class="btn float-btn flat-btn color-btn"><?php esc_html_e('View project','solonick');?></a>
                                    </div>
                                    <div class="album-thumbnails">
                                        <?php $solonick_images = rwmb_meta( 'rnr_tmp_st_img1','type=image&size=' );
									foreach ( $solonick_images as $solonick_image ){ ?>
                                        <div data-position-left2="<?php echo esc_attr($solonick_left_1); ?>" data-position-top2="<?php echo esc_attr($solonick_top_1); ?>" data-scrollax="properties: { translateY: '<?php echo esc_attr($solonick_translatey_1); ?>' }"><img src="<?php echo esc_url(($solonick_image['url']));?>" alt="" class="respimg"></div>
									<?php } ;?>
									<?php if (( get_post_meta($post->ID,'rnr_tmp_st_video',true))): ?>
                                        <div data-position-left2="<?php echo esc_attr($solonick_left_3); ?>" data-position-top2="<?php echo esc_attr($solonick_top_3); ?>" data-scrollax="properties: { translateY: '<?php echo esc_attr($solonick_translatey_3); ?>' }">
                                            <video autoplay loop muted  class="bgvid">
                                                <source src="<?php echo esc_url(get_post_meta($post->ID,'rnr_tmp_st_video',true)); ?>" type="video/mp4">
                                            </video>
                                        </div>
										<?php endif;?>
										
										<?php $solonick_images2 = rwmb_meta( 'rnr_tmp_st_img2','type=image&size=' );
									foreach ( $solonick_images2 as $solonick_image2 ){ ?>
                                        <div data-position-left2="<?php echo esc_attr($solonick_left_2); ?>" data-position-top2="<?php echo esc_attr($solonick_top_2); ?>" data-scrollax="properties: { translateY: '<?php echo esc_attr($solonick_translatey_2); ?>' }"><img src="<?php echo esc_url(($solonick_image2['url']));?>" alt="" class="respimg"></div>
									<?php } ;?>
                                    </div>
                                </div>
                                <div class="parallax-item-number lf-num"><?php esc_html_e('0','solonick');?><?php echo esc_attr($solonick_counter);?><?php esc_html_e('.','solonick');?></div>
                            </div>
                            <!--parallax-item end--> 	
                            <div class="paralax-sec-separator fl-wrap"></div>
							
							<?php }
							else  { ?>
							<?php global $solonick_left_1, $solonick_left_2, $solonick_left_3, $solonick_top_1, $solonick_top_2, $solonick_top_3, $solonick_translatey_1, $solonick_translatey_2, $solonick_translatey_3 ?>
							<!--left 1 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_left1',true))): ?>
							<?php $solonick_left_1 = get_post_meta($post->ID,'rnr_tmp_data_position_left1',true);?>
							<?php else :?>
							<?php $solonick_left_1 = '65';?>
							<?php endif;?>
							<!--top 1 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_top1',true))): ?>
							<?php $solonick_top_1 = get_post_meta($post->ID,'rnr_tmp_data_position_top1',true);?>
							<?php else :?>
							<?php $solonick_top_1 = '-5';?>
							<?php endif;?>
							<!--translatey 1 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_translatey1',true))): ?>
							<?php $solonick_translatey_1 = get_post_meta($post->ID,'rnr_tmp_translatey1',true);?>
							<?php else :?>
							<?php $solonick_translatey_1 = '-150px';?>
							<?php endif;?>
							
							<!--left 2 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_left2',true))): ?>
							<?php $solonick_left_2 = get_post_meta($post->ID,'rnr_tmp_data_position_left2',true);?>
							<?php else :?>
							<?php $solonick_left_2 = '80';?>
							<?php endif;?>
							<!--top 2 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_top2',true))): ?>
							<?php $solonick_top_2 = get_post_meta($post->ID,'rnr_tmp_data_position_top2',true);?>
							<?php else :?>
							<?php $solonick_top_2 = '50';?>
							<?php endif;?>
							<!--translatey 2 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_translatey2',true))): ?>
							<?php $solonick_translatey_2 = get_post_meta($post->ID,'rnr_tmp_translatey2',true);?>
							<?php else :?>
							<?php $solonick_translatey_2 = '-350px';?>
							<?php endif;?>
							<!--left 3 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_left3',true))): ?>
							<?php $solonick_left_3 = get_post_meta($post->ID,'rnr_tmp_data_position_left3',true);?>
							<?php else :?>
							<?php $solonick_left_3 = '80';?>
							<?php endif;?>
							<!--top 3 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_data_position_top3',true))): ?>
							<?php $solonick_top_3 = get_post_meta($post->ID,'rnr_tmp_data_position_top3',true);?>
							<?php else :?>
							<?php $solonick_top_3 = '50';?>
							<?php endif;?>
							<!--translatey 3 -->
							<?php if (( get_post_meta($post->ID,'rnr_tmp_translatey3',true))): ?>
							<?php $solonick_translatey_3 = get_post_meta($post->ID,'rnr_tmp_translatey3',true);?>
							<?php else :?>
							<?php $solonick_translatey_3 = '-350px';?>
							<?php endif;?>
                            <!--parallax-item -->	
                            <div class="parallax-item fl-wrap" data-scrollax-parent="true">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="parallax-header"><span><?php esc_html_e('Category : ','solonick');?></span><?php echo balanceTags($solonick_categories);?></div>
                                        <img  src="<?php echo esc_url($solonick_image[0]);?>"   alt="<?php the_title();?>">
                                    </div>
                                    <div class="parallax-text right-pos" data-scrollax="properties: { translateY: '-250px' }">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
										 <?php if (( get_post_meta($post->ID,'rnr_tmp_par_list_title',true))):?>
                                        <h4><span><?php echo esc_html(get_post_meta($post->ID,'rnr_tmp_par_list_title',true)); ?></span></h4>
										<?php else : ?>
										<div class="so-gap"></div>
										<?php endif;?>
                                        <a href="<?php the_permalink();?>" class="btn float-btn flat-btn color-btn"><?php esc_html_e('View project','solonick');?></a>
                                    </div>
                                    <div class="album-thumbnails">
									<?php $solonick_images = rwmb_meta( 'rnr_tmp_st_img1','type=image&size=' );
									foreach ( $solonick_images as $solonick_image ){ ?>
                                        <div data-position-left2="<?php echo esc_attr($solonick_left_1); ?>" data-position-top2="<?php echo esc_attr($solonick_top_1); ?>" data-scrollax="properties: { translateY: '<?php echo esc_attr($solonick_translatey_1); ?>' }"><img src="<?php echo esc_url(($solonick_image['url']));?>" alt="" class="respimg"></div>
									<?php } ;?>
									<?php if (( get_post_meta($post->ID,'rnr_tmp_st_video',true))): ?>
                                        <div data-position-left2="<?php echo esc_attr($solonick_left_3); ?>" data-position-top2="<?php echo esc_attr($solonick_top_3); ?>" data-scrollax="properties: { translateY: '<?php echo esc_attr($solonick_translatey_3); ?>' }">
                                            <video autoplay loop muted  class="bgvid">
                                                <source src="<?php echo esc_url(get_post_meta($post->ID,'rnr_tmp_st_video',true)); ?>" type="video/mp4">
                                            </video>
                                        </div>
										<?php endif;?>
										
										<?php $solonick_images2 = rwmb_meta( 'rnr_tmp_st_img2','type=image&size=' );
									foreach ( $solonick_images2 as $solonick_image2 ){ ?>
                                        <div data-position-left2="<?php echo esc_attr($solonick_left_2); ?>" data-position-top2="<?php echo esc_attr($solonick_top_2); ?>" data-scrollax="properties: { translateY: '<?php echo esc_attr($solonick_translatey_2); ?>' }"><img src="<?php echo esc_url(($solonick_image2['url']));?>" alt="" class="respimg"></div>
									<?php } ;?>
                                    </div>
                                </div>
                                <div class="parallax-item-number rg-num"><?php esc_html_e('.0','solonick');?><?php echo esc_attr($solonick_counter);?></div>
                            </div>
                            <!--parallax-item end-->	
                            <div class="paralax-sec-separator fl-wrap"></div>
							<?php }?>
							
							<?php endif;?>
							<?php $solonick_counter++;?>
							<?php endwhile;
							wp_reset_postdata();?>
							
							 
                            <div class="content-nav mar-top" style="display:none;">
                                <ul>
                                    <li class="sol-ln"><?php previous_posts_link( '<i class="fal fa-arrow-left"></i><span class="tooltip">Prev - Page</span>', $solonick_loop->max_num_pages ); ?></li>
                                    <li>
                                        <a class="cur-page"><span></span></a>
                                    </li>
                                    <li class="sol-rn"><?php next_posts_link( '<i class="fal fa-arrow-right"></i><span class="tooltip">Next - Page</span>', $solonick_loop->max_num_pages ); ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sec-lines"></div>
                    </section>
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