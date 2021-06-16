<?php $solonick_options = get_option('solonick'); ?>
<?php get_header();?>
<?php global $post, $post_id;?>
<?php while ( have_posts() ) : the_post();?>
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
                    <?php $solonick_images = rwmb_meta( 'rnr_so_music_page_header_back','type=image&size=' );
					foreach ( $solonick_images as $solonick_image ){ ?>
                    <!-- section-->
                    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
                        <div class="bg par-elem"  data-bg="<?php echo esc_url(($solonick_image['url']));?>" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="pattern-bg"></div>
                        <div class="container">
                            <div class="section-title">
                                <?php if (( get_post_meta($post->ID,'rnr_so_music_page_header_title',true))):?>
                                <h2><?php echo balanceTags(get_post_meta($post->ID,'rnr_so_music_page_header_title',true)); ?></h2>
								<?php else : ?>
								<h2><?php the_title();?></h2>
								<?php endif;?>
                                <p> <?php echo esc_html(get_post_meta($post->ID,'rnr_so_music_page_header_short_title',true)); ?> </p>
                                <div class="horizonral-subtitle"><span><?php echo esc_html(get_post_meta($post->ID,'rnr_so_music_page_header_hor_title',true)); ?></span></div>
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
                    <!-- section end-->  
                    <!-- section-->
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle"  data-scrollax="properties: { translateY: '-250px' }" > <span>//</span> <?php the_title();?></div>
                        <div class="container">
                            <div class="row mar-bottom">
							<?php $solonick_images = rwmb_meta( 'rnr_so_team_right_side_img','type=image&size=solonick_team_single_image' );
							foreach ( $solonick_images as $solonick_image ){ ?>
                                <div class="col-md-5">
                                    <div class="collage-image fl-wrap">
                                        <div class="collage-image-title" data-scrollax="properties: { translateY: '150px' }"><?php the_title();?></div>
                                        <img src="<?php echo esc_url(($solonick_image['url']));?>" class="respimg" alt="<?php the_title();?>">
                                    </div>
                                </div>
							<?php } ;?>
                                <div class="col-md-7">
                                    <div class="main-about fl-wrap">
									<?php if (( get_post_meta($post->ID,'rnr_popu_des_team',true))): ?>
                                        <h5><?php echo esc_html(get_post_meta($post->ID,'rnr_popu_des_team',true));?></h5>
									<?php endif;?>
                                        <h2><?php the_title();?></h2>
                                        <?php the_content();?>
										<?php if(get_post_meta($post->ID,'rnr_wr_team_sk_en',true)=='st2'){ ?>
                                        <div class="bold-title fl-wrap"><?php esc_html_e('Skills','solonick');?></div>
                                        <div class="fw-skills fl-wrap">
                                            <div class="skillbar-box animaper">
                                                <?php $solonick_car_slide_opt = rwmb_meta( 'rnr_po_pu_team_sk_gr' );
													if ( ! empty( $solonick_car_slide_opt ) ) {
													foreach ( $solonick_car_slide_opt as $solonick_car_slide_opts ) {
													$solonick_so_i = isset( $solonick_car_slide_opts['po_pu_se_i'] ) ? $solonick_car_slide_opts['po_pu_se_i'] : '';
													$solonick_so_u = isset( $solonick_car_slide_opts['po_pu_se_u'] ) ? $solonick_car_slide_opts['po_pu_se_u'] : '';
													if ( !empty( $solonick_so_i ) ) {
													if ( !empty( $solonick_so_u ) ) { ?>
                                                <div class="custom-skillbar-title"><span><?php echo esc_attr($solonick_so_i);?></span></div>
                                                <div class="skill-bar-percent"><?php echo esc_attr($solonick_so_u);?>%</div>
                                                <div class="skillbar-bg" data-percent="<?php echo esc_attr($solonick_so_u);?>%">
                                                    <div class="custom-skillbar"></div>
                                                </div>
                                                <?php } } } } ?>  
                                            </div>
                                        </div>
										<?php } else { ?>
										<?php } ;?>
										<?php if(get_post_meta($post->ID,'rnr_wr_team_so_en',true)=='st2'){ ?>
                                        <div class="team-single-social fl-wrap">
                                            <span><?php esc_html_e('Follow : ','solonick');?></span>
                                            <ul>
                                                <?php $solonick_car_slide_opt = rwmb_meta( 'rnr_po_pu_team_so_gr' );
													if ( ! empty( $solonick_car_slide_opt ) ) {
													foreach ( $solonick_car_slide_opt as $solonick_car_slide_opts ) {
													$solonick_so_i = isset( $solonick_car_slide_opts['po_pu_so_i'] ) ? $solonick_car_slide_opts['po_pu_so_i'] : '';
													$solonick_so_u = isset( $solonick_car_slide_opts['po_pu_so_u'] ) ? $solonick_car_slide_opts['po_pu_so_u'] : '';
													if ( !empty( $solonick_so_i ) ) {
													if ( !empty( $solonick_so_u ) ) { ?>
                                                        <li><a href="<?php echo esc_url($solonick_so_u);?>" target="_blank" ><i class="<?php echo esc_attr($solonick_so_i);?>"></i></a></li>
													<?php } } } } ?>
                                            </ul>
                                        </div>
										<?php } else { ?>
										<?php } ;?>
                                    </div>
                                </div>
                            </div>
                            <div class="content-nav team-nav">
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
									<?php if(!empty($solonick_options['team_page_url'])):?>
									<a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('team_page_url',''));?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_12'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_12',''));?> <?php else : ?><?php esc_html_e('All Members','solonick');?> <?php endif;?></span></a>
									<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_3'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?><?php else : ?><?php esc_html_e('Back To Home','solonick');?><?php endif;?> </span></a>
									<?php endif;?>
									<?php } ;?>
									</li>
                                    <li>
									<?php if(!empty($solonick_options['team_page_url'])):?>
                                        <a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('team_page_url',''));?>" class="cur-page"><span><?php if(!empty($solonick_options['translet_opt_12'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_12',''));?> <?php else : ?><?php esc_html_e('All Members','solonick');?> <?php endif;?></span></a>
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
									<?php if(!empty($solonick_options['team_page_url'])):?>
									<a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('team_page_url',''));?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_12'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_12',''));?> <?php else : ?><?php esc_html_e('All Members','solonick');?> <?php endif;?> </span></a>
									<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_3'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?><?php else : ?><?php esc_html_e('Back To Home','solonick');?><?php endif;?> </span></a>
									<?php endif;?>
									<?php };?>
									
									</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bg-parallax-module" data-position-top="90"  data-position-left="25" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="70"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
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
				<?php endwhile; ?>
				<?php wp_reset_postdata();?>
<?php get_footer(); ?>	