<?php $solonick_options = get_option('solonick'); ?>
<?php get_header();?>
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
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span><?php the_title();?></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
								<?php if (has_post_thumbnail( $post->ID ) ):
								$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solonick_music_cover' );?>
					
                                    <div class="collage-image fl-wrap">
                                        <div class="collage-image-title" data-scrollax="properties: { translateY: '150px' }"><?php the_title();?>.</div>
                                        <img src="<?php echo esc_url($solonick_image[0]);?>" class="respimg" alt="<?php the_title();?>">
                                    </div>
								<?php endif;?>
								<?php if (( get_post_meta($post->ID,'rnr_wr_music_info_opt',true))=='st2'):?>
                                    <div class="pr-list mu-det fl-wrap">
                                        <ul>
										<?php
										$solonick_project_info = rwmb_meta( 'rnr_music_info_main_list' );
										if ( ! empty( $solonick_project_info ) ) {
										foreach ( $solonick_project_info as $solonick_project_opts ) { ;?>
                                            <li><span><?php echo esc_attr($solonick_project_opts['rnr_music_info_main_list1']);?>  : </span><?php echo balanceTags($solonick_project_opts['rnr_music_info_main_list2']);?></li>
                                        <?php } } ;?>    
                                        </ul>
                                    </div>
								<?php else: ?>
								<?php endif;?>
								<?php if (( get_post_meta($post->ID,'rnr_wr_music_store_opt',true))=='st2'):?>
                                    <div class="buy-album fl-wrap mar-top">
									<?php if (( get_post_meta($post->ID,'rnr_wr_stoe_sec_title',true))):?>
                                        <span><?php echo esc_html(get_post_meta($post->ID,'rnr_wr_stoe_sec_title',true)); ?> : </span>
									<?php else : ?>
                                        <span><?php esc_html_e('Available on : ','solonick');?></span>
									<?php endif;?>
									<?php
									$solonick_store_list = rwmb_meta( 'rnr_wr_store_list_tab_opt' );
									if ( ! empty( $solonick_store_list ) ) {
									foreach ( $solonick_store_list as $solonick_store_lists ) { ;?>
									<?php $solonick_store_name = isset( $solonick_store_lists['rnr_wr_store_name_ti'] ) ? $solonick_store_lists['rnr_wr_store_name_ti'] : ''; ?>
									<?php $solonick_store_url = isset( $solonick_store_lists['rnr_wr_store_url'] ) ? $solonick_store_lists['rnr_wr_store_url'] : ''; ?>
									<?php if ( !empty( $solonick_store_name ) ) { ?>
									<?php if ( !empty( $solonick_store_url ) ) { ?>
                                        <a href="<?php echo esc_url($solonick_store_url);?>" target="_blank"><?php echo esc_html($solonick_store_name);?></a>
									<?php } ;?>
									<?php } ;?>
                                    <?php } } ;?>     
                                    </div>
								<?php else :?>
								<?php endif;?>
                                </div>
                                <div class="col-md-8">
                                    <div class="main-about fl-wrap">
                                        <?php the_content();?>
										<?php if (( get_post_meta($post->ID,'rnr_wr_music_list_opt',true))=='st2'):?>
                                        <!-- audio-player-wrap-->
                                        <div class="audio-player-wrap fl-wrap mar-top">
                                            <audio preload></audio>
                                            <div class="volume-control">
                                                <span   id="vol-100" data-value='1'></span>
                                                <span   id="vol-70"  data-value='2'></span>
                                                <span   id="vol-40"   data-value='3'></span>
                                                <span   id="vol-0"  data-value='4'></span>
                                            </div>
                                            <!-- audio-player-wrap end-->
                                            <div class="playlist-wrap fl-wrap">
											<?php if (( get_post_meta($post->ID,'rnr_wr_album_title',true))):?>
                                                <ol data-listalbumtitle="<?php echo esc_attr(get_post_meta($post->ID,'rnr_wr_album_title',true)); ?>">
											<?php else : ?>
                                                <ol data-listalbumtitle="<?php the_title();?>">
											<?php endif;?>
												<?php
												$solonick_track_list = rwmb_meta( 'rnr_wr_music_list_tab_opt' );
												if ( ! empty( $solonick_track_list ) ) {
												foreach ( $solonick_track_list as $solonick_track_lists ) { ;?>
												<?php $solonick_track_icon = isset( $solonick_track_lists['rnr_wr_music_list_icon'] ) ? $solonick_track_lists['rnr_wr_music_list_icon'] : ''; ?>
                                                    <li class="<?php echo esc_attr($solonick_track_lists['rnr_wr_music_list_track_play']);?>">
                                                        <a href="#" class="audio-link" data-srcaudio="<?php echo esc_url($solonick_track_lists['rnr_wr_music_list_track_url']);?>"><?php echo esc_attr($solonick_track_lists['rnr_wr_music_list_track_ti']);?></a><span class="album-list-title"></span>
                                                        <a class="downbuy-link" href="#">
														<?php if ( !empty( $solonick_track_icon ) ) { ?>
														<i class="fal <?php echo esc_attr($solonick_track_icon);?>"></i>
														<?php } else { ?>
														<i class="fal fa-download"></i>
														<?php } ;?>
														</a>
                                                    </li>
												<?php } } ;?> 
                                                    
                                                </ol>
                                            </div>
                                            <!-- audio-player-wrap end-->       
                                        </div>
                                        <!-- audio-player-wrap end-->
										<?php else :?>
										<?php endif;?>
                                    </div>
                                </div>
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
									<?php if(!empty($solonick_options['music_page_url'])):?>
									<a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('music_page_url',''));?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_13'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_13',''));?> <?php else : ?><?php esc_html_e('All Albums','solonick');?> <?php endif;?></span></a>
									<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_3'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?><?php else : ?><?php esc_html_e('Back To Home','solonick');?><?php endif;?> <?php echo esc_attr( $solonick_title ); ?></span></a>
									<?php endif;?>
									<?php } ;?>
									</li>
                                    <li>
									<?php if(!empty($solonick_options['music_page_url'])):?>
                                        <a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('music_page_url',''));?>" class="cur-page"><span><?php if(!empty($solonick_options['translet_opt_13'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_13',''));?> <?php else : ?><?php esc_html_e('All Albums','solonick');?> <?php endif;?></span></a>
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
									<?php if(!empty($solonick_options['music_page_url'])):?>
									<a href="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('music_page_url',''));?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php if(!empty($solonick_options['translet_opt_13'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_13',''));?> <?php else : ?><?php esc_html_e('All Albums','solonick');?> <?php endif;?> </span></a>
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