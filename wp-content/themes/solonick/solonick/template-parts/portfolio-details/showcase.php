<?php $solonick_options = get_option('solonick'); ?>
<?php if(have_posts()) : while ( have_posts() ) : the_post();?>
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
                    <?php $solonick_images = rwmb_meta( 'rnr_so_po_page_header_back4','type=image&size=' );
					foreach ( $solonick_images as $solonick_image ){ ?>
                    <!-- section-->
					<section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
                        <div class="bg par-elem"  data-bg="<?php echo esc_url(($solonick_image['url']));?>" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="pattern-bg"></div>
                        <div class="container">
                            <div class="section-title">
							    <?php if (( get_post_meta($post->ID,'rnr_so_po_page_header_title4',true))):?>
                                <h2><?php echo do_shortcode(get_post_meta($post->ID,'rnr_so_po_page_header_title4',true)) ?></h2>
								<?php else: ?>
                                <h2><?php the_title();?></h2>
								<?php endif;?>
                                <p> <?php echo esc_html(get_post_meta($post->ID,'rnr_bl-port-short-opt4',true)); ?></p>
                                <div class="horizonral-subtitle"><span><?php echo esc_html(get_post_meta($post->ID,'rnr_bl-port-horizonral-title-opt4',true)); ?></span></div>
                            </div>
                            
                            <?php if(!empty($solonick_options['translet_opt_4'])):?>
                            <a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_4',''));?> <i class="fal fa-long-arrow-down"></i></a>
							<?php else : ?>
							<a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php esc_html_e('Let','solonick');?>'<?php esc_html_e('s Start ','solonick');?> <i class="fal fa-long-arrow-down"></i></a>							
							<?php endif;?> 
							
                        </div>
                    </section>
                    <!-- section end-->
					<?php } ;?>
                    <!-- section-->  
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span><?php the_title();?></div>
                        <div class="container">
                            <div class="fl-wrap">
                                <div class="row">
                                    <?php if (( get_post_meta($post->ID,'rnr_wr_port_right_info_opt',true))=='st2'):?>
                                    <div class="col-md-4">
                                        <div class="fixed-column l-wrap">
                                            <div class="pr-title fl-wrap">
                                                <h3><?php echo esc_html(get_post_meta($post->ID,'rnr_sol_info_right_title',true)); ?></h3>
                                                <span><?php echo esc_html(get_post_meta($post->ID,'rnr_sol_info_right_content',true)); ?></span>
                                            </div>
                                            <div class="ci-num"><span><?php esc_html_e('01.','solonick');?></span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
								<?php else : ?>
								<div class="col-md-12">
								<?php endif;?>
                                        <div class="details-wrap fl-wrap">
                                            <?php if (( get_post_meta($post->ID,'rnr_bl-port-tit-opt',true))):?>
                                            <h3><?php echo do_shortcode(get_post_meta($post->ID,'rnr_bl-port-tit-opt',true)) ?></span></h3>
										<?php else: ?>
										<h3><?php the_title();?></span></h3>
										<?php endif;?>
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
                                            <div class="parallax-header"><span><?php if(!empty($solonick_options['translet_opt_8'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_8',''));?> : <?php else : ?><?php esc_html_e('Category : ','solonick');?><?php endif;?></span><?php echo balanceTags($solonick_categories);?></div>
                                            <!-- det box-->
                                            <div class="fl-wrap vertical-gallery">
											<?php
												$solonick_car_slide_opt = rwmb_meta( 'rnr_so_drt_po_gallery' );
												if ( ! empty( $solonick_car_slide_opt ) ) {
												foreach ( $solonick_car_slide_opt as $solonick_car_slide_opts ) { ;?>
												<?php $solonick_column = isset( $solonick_car_slide_opts['rnr_md_pot_gallery_column'] ) ? $solonick_car_slide_opts['rnr_md_pot_gallery_column'] : ''; ?>
												<?php $solonick_gallery_pop = isset( $solonick_car_slide_opts['rnr_so_port_gallery_video_opt'] ) ? $solonick_car_slide_opts['rnr_so_port_gallery_video_opt'] : ''; ?>
													<!-- swiper-slide-->
										   
												<?php $solonick_image_ids = isset( $solonick_car_slide_opts['rnr_portfolio-image-popu'] ) ? $solonick_car_slide_opts['rnr_portfolio-image-popu'] : array();
												foreach ( $solonick_image_ids as $solonick_image_id ) {
													$solonick_image = RWMB_Image_Field::file_info( $solonick_image_id, array( 'size' => '' ) ); ?>
                                                <!-- box-item-->
                                                <div class="box-item">
                                                    <img src="<?php echo esc_url(($solonick_image['url']));?>" alt="<?php echo esc_attr(($solonick_image['alt']));?>">
                                                    <?php if ( !empty( $solonick_gallery_pop ) ) { ?>
													<a href="<?php echo esc_html($solonick_gallery_pop);?>" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-play"></i></a>
													<?php } else { ?>
													<a href="<?php echo esc_url(($solonick_image['url']));?>" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
													<?php } ;?>
                                                </div>
												<?php } } } ;?>
                                                                                        
                                            </div>
                                            <div class="clearfix"></div>
                                            <?php the_content();?>
                                        </div>
                                        <div class="pr-list fl-wrap">
                                            <div class="row">
											<?php if (( get_post_meta($post->ID,'rnr_wr_port_info_opt',true))=='st2'):?>
                                                <div class="col-md-4">
                                                    <ul>
                                                        <?php
														$solonick_project_info = rwmb_meta( 'rnr_po_pu_pro_in_opt' );
														if ( ! empty( $solonick_project_info ) ) {
														foreach ( $solonick_project_info as $solonick_project_opts ) { ;?>
																<li><span><?php echo esc_attr($solonick_project_opts['car_opt_in_tit']);?>  : </span> <?php echo balanceTags($solonick_project_opts['car_opt_in_con']);?></li>
														<?php } } ;?> 
                                                    </ul>
                                                </div>
												<?php if (( get_post_meta($post->ID,'rnr_sol_clinet_rev_con',true))):?>
												<div class="col-md-8">
                                                    <div class="fl-wrap pr-list-det">
                                                        <?php $solonick_images = rwmb_meta( 'rnr_sol_clinet_rev_logo','type=image&size=' );
													foreach ( $solonick_images as $solonick_image ){ ?>
                                                        <div class="popup-avatar"><img src="<?php echo esc_url(($solonick_image['url']));?>" alt="<?php echo esc_attr(($solonick_image['title']));?>"></div>
													<?php } ;?>
                                                        <h5><?php echo esc_html(get_post_meta($post->ID,'rnr_sol_clinet_rev_title',true)); ?></h5>
                                                        <p><?php echo esc_html(get_post_meta($post->ID,'rnr_sol_clinet_rev_con',true)); ?></p>
                                                    </div>
                                                </div>
												<?php endif;?>
											<?php else: ?>
											<?php if (( get_post_meta($post->ID,'rnr_sol_clinet_rev_con',true))):?>
												<div class="col-md-12">
                                                    <div class="fl-wrap pr-list-det">
                                                        <?php $solonick_images = rwmb_meta( 'rnr_sol_clinet_rev_logo','type=image&size=' );
													foreach ( $solonick_images as $solonick_image ){ ?>
                                                        <div class="popup-avatar"><img src="<?php echo esc_url(($solonick_image['url']));?>" alt="<?php echo esc_attr(($solonick_image['caption']));?>"></div>
													<?php } ;?>
                                                        <h5><?php echo esc_html(get_post_meta($post->ID,'rnr_sol_clinet_rev_title',true)); ?></h5>
                                                        <p><?php echo esc_html(get_post_meta($post->ID,'rnr_sol_clinet_rev_con',true)); ?></p>
                                                    </div>
                                                </div>
												<?php endif;?>
											<?php endif;?>
                                                
                                            </div>
                                        </div>
                                        <?php if (( get_post_meta($post->ID,'rnr_wr_port_accor_opt',true))=='st2'):?>
                                        <!-- accordion-->                            
                                        <div class="accordion mar-top">
											<?php
											$solonick_acc_tab_opt = rwmb_meta( 'rnr_so_acc_tab_opt' );
											if ( ! empty( $solonick_acc_tab_opt ) ) {
											foreach ( $solonick_acc_tab_opt as $solonick_acc_tab_opts ) { ;?>
											
											<?php $solonick_acco_title = isset( $solonick_acc_tab_opts['rnr_so_acc_title_opt'] ) ? $solonick_acc_tab_opts['rnr_so_acc_title_opt'] : ''; ?>
											<?php $solonick_acco_con = isset( $solonick_acc_tab_opts['rnr_so_acc_con_opt'] ) ? $solonick_acc_tab_opts['rnr_so_acc_con_opt'] : ''; ?>
											<?php $solonick_acco_active = isset( $solonick_acc_tab_opts['rnr_so_acc_accon_opt'] ) ? $solonick_acc_tab_opts['rnr_so_acc_accon_opt'] : ''; ?>
											
											<?php 
											if($solonick_acco_active == "st2") {
											$solonick_tab_title_act ='act-accordion';
											$solonick_tab_content_act ='visible';
											}
											else {
											$solonick_tab_title_act ='';
											$solonick_tab_content_act ='';
											}
											
											?>
											
                                            <a class="toggle <?php echo esc_attr($solonick_tab_title_act);?>" href="#"> <?php echo esc_html($solonick_acco_title);?>   <span></span></a>
                                            <div class="accordion-inner <?php echo esc_attr($solonick_tab_content_act);?>">
                                                <p><?php echo esc_html($solonick_acco_con);?></p>
                                            </div>
											<?php } } ;?>
                                            
                                        </div>
                                        <!-- accordion end --> 
										<?php endif;?>                                        
                                        <?php if (( get_post_meta($post->ID,'rnr_bl-port-button-opt',true))):?>
                                                    <a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl-port-button-opt',true)); ?>" class="btn float-btn flat-btn color-btn mar-top" target="_blank"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl-port-button_text-opt',true)); ?></a> 
													<?php endif;?>
                                    </div>
                                </div>
                                <div class="limit-box fl-wrap"></div>
                            </div>
                            <!-- det box end-->
                            <div class="content-nav mar-top">
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
									<?php if(!empty($solonick_options['port_page_url'])):?>
									<a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('port_page_url',''));?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_11'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_11',''));?> <?php else : ?><?php esc_html_e('All Projects','solonick');?> <?php endif;?></span></a>
									<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_3'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?><?php else : ?><?php esc_html_e('Back To Home','solonick');?><?php endif;?></span></a>
									<?php endif;?>
									<?php } ;?>
									</li>
                                    <li>
									<?php if(!empty($solonick_options['port_page_url'])):?>
                                        <a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('port_page_url',''));?>" class="cur-page"><span><?php if(!empty($solonick_options['translet_opt_11'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_11',''));?> <?php else : ?><?php esc_html_e('All Projects','solonick');?> <?php endif;?></span></a>
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
									<?php if(!empty($solonick_options['port_page_url'])):?>
									<a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('port_page_url',''));?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_11'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_11',''));?> <?php else : ?><?php esc_html_e('All Projects','solonick');?> <?php endif;?></span></a>
									<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_3'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?><?php else : ?><?php esc_html_e('Back To Home','solonick');?><?php endif;?> </span></a>
									<?php endif;?>
									<?php };?>
									
									</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
                        <div class="sec-lines"></div>
                    </section>
                    <!-- section end-->              
                    <?php if (( get_post_meta($post->ID,'rnr_bl_call_to_button2',true))):?>
                    <!-- section-->
                    <section class="dark-bg2 small-padding order-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_call_to_title2',true)); ?></h3>
                                </div>
                                <div class="col-md-4"><a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl_call_to_button2',true)); ?>" class="btn flat-btn color-btn"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_call_to_text2',true)); ?></a> </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
					<?php endif;?>
                </div>
                <!-- Content end -->
<?php endwhile;  endif; wp_reset_postdata(); ?>