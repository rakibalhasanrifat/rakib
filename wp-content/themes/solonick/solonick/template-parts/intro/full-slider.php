<!-- hero-wrap-->
                <div class="hero-wrap" id="sec1" data-scrollax-parent="true">
                    <!-- hero-inner-->
                    <!-- fullscreen-slider-wrap-->
                    <div class="slider-carousel-wrap full-height fullscreen-slider-wrap">
						<?php if(get_post_meta($post->ID,'rnr_so_full_slider_speed',true)):?>
						<?php $solonick_slider_speed = get_post_meta($post->ID,'rnr_so_full_slider_speed',true);?>
						<?php else: ?>
						<?php $solonick_slider_speed = '1000';?>
						<?php endif;?>
						<?php if(get_post_meta($post->ID,'rnr_so_full_slider_autoplay_speed',true)):?>
						<?php $solonick_slider_autoplay_speed = get_post_meta($post->ID,'rnr_so_full_slider_autoplay_speed',true);?>
						<?php else: ?>
						<?php $solonick_slider_autoplay_speed = '4000';?>
						<?php endif;?>
                        <div class="fullscreen-slider full-height cur_carousel-slider-container fl-wrap" data-slider-speed="<?php echo esc_attr($solonick_slider_speed);?>" data-autoplay="<?php echo esc_attr(get_post_meta($post->ID,'rnr_so_full_slider_autoplay',true));?>" data-slider-auto-play-speed="<?php echo esc_attr($solonick_slider_autoplay_speed);?>">
						
						<?php
								$solonick_half_slide_text_opt = rwmb_meta( 'rnr_md_po_gallery_full_slider' );
								if ( ! empty( $solonick_half_slide_text_opt ) ) {
								foreach ( $solonick_half_slide_text_opt as $solonick_half_slide_text_opts ) { ;?>
								
								<?php $solonick_intro_title = isset( $solonick_half_slide_text_opts['rnr_md_gallery_intro_title_opt_full_slider'] ) ? $solonick_half_slide_text_opts['rnr_md_gallery_intro_title_opt_full_slider'] : ''; ?>
								
								<?php $solonick_intro_subtitle = isset( $solonick_half_slide_text_opts['rnr_md_gallery_intro_sub_title_opt_full_slider'] ) ? $solonick_half_slide_text_opts['rnr_md_gallery_intro_sub_title_opt_full_slider'] : ''; ?>
								
								<?php $solonick_intro_buttontxt = isset( $solonick_half_slide_text_opts['rnr_md_intro_buttontxt_opt_full_slider'] ) ? $solonick_half_slide_text_opts['rnr_md_intro_buttontxt_opt_full_slider'] : ''; ?>
								
								<?php $solonick_intro_buttonurl = isset( $solonick_half_slide_text_opts['rnr_md_intro_buttonurl_opt_full_slider'] ) ? $solonick_half_slide_text_opts['rnr_md_intro_buttonurl_opt_full_slider'] : ''; ?>
								
								<?php $solonick_image_ids = isset( $solonick_half_slide_text_opts['rnr_md_po_gallery_img_full_slider'] ) ? $solonick_half_slide_text_opts['rnr_md_po_gallery_img_full_slider'] : array();
								foreach ( $solonick_image_ids as $solonick_image_id ) {
								$solonick_image = RWMB_Image_Field::file_info( $solonick_image_id, array( 'size' => '' ) ); ?>
								<!-- fullscreen-slider-item-->
                            <div class="fullscreen-slider-item full-height fl-wrap">
                                <div class="bg par-elem"  data-bg="<?php echo esc_url(($solonick_image['url']));?>"></div>
                                <div class="overlay"></div>
                                <div class="half-hero-wrap">
                                    <?php if ( !empty( $solonick_intro_title ) ) { ?>
                                        <h1><?php echo balanceTags($solonick_intro_title);?></h1>
									<?php } ?>
                                    <?php if ( !empty( $solonick_intro_subtitle ) ) { ?>
                                        <h4><?php echo esc_html($solonick_intro_subtitle);?></h4>
									<?php } ?>
                                    <?php if ( !empty( $solonick_intro_buttontxt ) ) { ?>
									<?php if ( !empty( $solonick_intro_buttonurl ) ) { ?>
                                        <div class="clearfix"></div>
                                        <a href="<?php echo esc_url($solonick_intro_buttonurl);?>" class="custom-scroll-link btn float-btn flat-btn color-btn mar-top"><?php echo esc_html($solonick_intro_buttontxt);?></a> 
									<?php } ?>
									<?php } ?> 
                                </div>
                            </div>
                            <!-- fullscreen-slider-item end-->
							<?php } ?>
								<?php } } ;?>
						
                            
                                                                
                        </div>
                        <div class="sp-cont   sp-cont-prev"><i class="fal fa-arrow-left"></i></div>
                        <div class="sp-cont   sp-cont-next"><i class="fal fa-arrow-right"></i></div>
                        <div class="fullscreenslider-counter"></div>
                    </div>
                    <!-- fullscreen-slider-wrap end-->
                    <!--hero dec-->
                    <?php if(get_post_meta($post->ID,'rnr_wr_intro_top_dis_full_slider',true)=='st2'){ ?>
                        <div class="hero-decor-numb"><?php
								$solonick_top_con = rwmb_meta( 'rnr_md_po_top_info_full_slider' );
								if ( ! empty( $solonick_top_con ) ) {
								foreach ( $solonick_top_con as $solonick_top_cons ) { ;?>
								
								<?php $solonick_intro_text_top = isset( $solonick_top_cons['rnr_md_top_con_intro_full_slider'] ) ? $solonick_top_cons['rnr_md_top_con_intro_full_slider'] : ''; ?><?php if ( !empty( $solonick_intro_text_top ) ) { ?><span><?php echo esc_html($solonick_intro_text_top);?>  </span><?php } ?><?php } } ;?> <?php if(get_post_meta($post->ID,'rnr_md_top_con_hover_intro_full_slider',true)):?><a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_md_top_con_hover_intro_url_full_slider',true));?>" target="_blank" class="hero-decor-numb-tooltip"><?php echo esc_html(get_post_meta($post->ID,'rnr_md_top_con_hover_intro_full_slider',true));?></a><?php endif;?></div>
						<?php } else { ?>
						<?php } ;?>
                </div>
                <!-- hero-wrap end-->