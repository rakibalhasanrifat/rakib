<!-- hero-wrap-->
                <div class="hero-wrap" id="sec1" data-scrollax-parent="true">
                    <!-- hero-inner-->
                    <div class="hero-inner fl-wrap full-height">
                        <!-- half-slider-wrap-->
                        <!-- half-slider-img-wrap-->
						<?php if(get_post_meta($post->ID,'rnr_so_half_slider_speed',true)):?>
						<?php $solonick_slider_speed = get_post_meta($post->ID,'rnr_so_half_slider_speed',true);?>
						<?php else: ?>
						<?php $solonick_slider_speed = '1000';?>
						<?php endif;?>
						<?php if(get_post_meta($post->ID,'rnr_so_half_slider_autoplay_speed',true)):?>
						<?php $solonick_slider_autoplay_speed = get_post_meta($post->ID,'rnr_so_half_slider_autoplay_speed',true);?>
						<?php else: ?>
						<?php $solonick_slider_autoplay_speed = '4000';?>
						<?php endif;?>
                        <div class="half-slider-img-wrap">
                            <!-- half-slider-img-->
                            <div class="half-slider-img fl-wrap full-height" data-slider-speed="<?php echo esc_attr($solonick_slider_speed);?>" data-autoplay="<?php echo esc_attr(get_post_meta($post->ID,'rnr_so_half_slider_autoplay',true));?>" data-slider-auto-play-speed="<?php echo esc_attr($solonick_slider_autoplay_speed);?>">
                                
								<?php
								$solonick_half_slide_opt = rwmb_meta( 'rnr_md_po_gallery' );
								if ( ! empty( $solonick_half_slide_opt ) ) {
								foreach ( $solonick_half_slide_opt as $solonick_half_slide_opts ) { ;?>
								
                                    <!-- half-slider-img item-->
                                   
										<?php $solonick_image_ids = isset( $solonick_half_slide_opts['rnr_md_po_gallery_img'] ) ? $solonick_half_slide_opts['rnr_md_po_gallery_img'] : array();
										foreach ( $solonick_image_ids as $solonick_image_id ) {
											$solonick_image = RWMB_Image_Field::file_info( $solonick_image_id, array( 'size' => '' ) ); ?>
											
										<div class="half-slider-img-item">
											<div class="bg"  data-bg="<?php echo esc_url(($solonick_image['url']));?>" data-scrollax="properties: { translateY: '250px' }" ></div>
											<div class="overlay"></div>
										</div>
                                <!-- half-slider-img item end-->
										<?php } ?>
        
								<?php } } ;?>
                                
                                                                                                    
                            </div>
                            <!-- half-slider-img end-->
                        </div>
                        <!-- half-slider-img-wrap end-->
                        <!-- slider-carousel-wrap-->
                        <div class="half-slider-wrap  slider-carousel-wrap fl-wrap  full-height">
                           <!-- slider-nav-->
                            <div class="slider-nav cur_carousel-slider-container" data-slider-speed="<?php echo esc_attr($theside_slider_speed);?>" data-autoplay="<?php echo esc_attr(get_post_meta($post->ID,'rnr_so_half_slider_autoplay',true));?>">
                                <?php
								$solonick_half_slide_text_opt = rwmb_meta( 'rnr_md_po_gallery' );
								if ( ! empty( $solonick_half_slide_text_opt ) ) {
								foreach ( $solonick_half_slide_text_opt as $solonick_half_slide_text_opts ) { ;?>
								
								<?php $solonick_intro_title = isset( $solonick_half_slide_text_opts['rnr_md_gallery_intro_title_opt'] ) ? $solonick_half_slide_text_opts['rnr_md_gallery_intro_title_opt'] : ''; ?>
								
								<?php $solonick_intro_subtitle = isset( $solonick_half_slide_text_opts['rnr_md_gallery_intro_sub_title_opt'] ) ? $solonick_half_slide_text_opts['rnr_md_gallery_intro_sub_title_opt'] : ''; ?>
								
								<?php $solonick_intro_buttontxt = isset( $solonick_half_slide_text_opts['rnr_md_intro_buttontxt_opt'] ) ? $solonick_half_slide_text_opts['rnr_md_intro_buttontxt_opt'] : ''; ?>
								
								<?php $solonick_intro_buttonurl = isset( $solonick_half_slide_text_opts['rnr_md_intro_buttonurl_opt'] ) ? $solonick_half_slide_text_opts['rnr_md_intro_buttonurl_opt'] : ''; ?>
								<!-- half-slider-item-->
                                <div class="half-slider-item fl-wrap">
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
                                <!-- half-slider-item end-->
								<?php } } ;?>
                                                                             
                            </div>
                            <!--  slider nav end--> 
                            <div class="sp-cont sarr-contr sp-cont-prev"><i class="fal fa-arrow-left"></i></div>
                            <div class="sp-cont sarr-contr sp-cont-next"><i class="fal fa-arrow-right"></i></div>
                            <div class="slider-nav-counter"></div>
                        </div>
                        <!-- half-slider-wrap end-->
                        <!--hero dec-->
                        <div class="half-bg-dec" data-ran="12"></div>
						<?php if(get_post_meta($post->ID,'rnr_wr_intro_top_dis',true)=='st2'){ ?>
                        <div class="hero-decor-numb"><?php
								$solonick_top_con = rwmb_meta( 'rnr_md_po_top_info' );
								if ( ! empty( $solonick_top_con ) ) {
								foreach ( $solonick_top_con as $solonick_top_cons ) { ;?>
								
								<?php $solonick_intro_text_top = isset( $solonick_top_cons['rnr_md_top_con_intro'] ) ? $solonick_top_cons['rnr_md_top_con_intro'] : ''; ?><?php if ( !empty( $solonick_intro_text_top ) ) { ?><span><?php echo esc_html($solonick_intro_text_top);?>  </span><?php } ?><?php } } ;?> <?php if(get_post_meta($post->ID,'rnr_md_top_con_hover_intro',true)):?><a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_md_top_con_hover_intro_url',true));?>" target="_blank" class="hero-decor-numb-tooltip"><?php echo esc_html(get_post_meta($post->ID,'rnr_md_top_con_hover_intro',true));?></a><?php endif;?></div>
						<?php } else { ?>
						<?php } ;?>
                        <div class="pattern-bg"></div>
                        <div class="hero-line-dec"></div>
                    </div>
                    <!--hero dec end-->
                </div>
                <!-- hero-wrap end-->