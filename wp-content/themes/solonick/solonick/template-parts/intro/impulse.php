 <!-- hero-wrap-->
                <div class="hero-wrap no-hidden" id="sec1" data-scrollax-parent="true">
                    <!-- impulse-wrap-->
                    <div class="impulse-wrap">
                        <div class="mm-parallax">
                            <div class="half-hero-wrap section-entry">
                                <?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_title_impulse',true))):?>
                            <h1><?php echo balanceTags(get_post_meta($post->ID,'rnr_bl_home_vd_title_impulse',true)); ?></h1>
					    <?php endif;?>
						<?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_subtitle_impulse',true))):?>
                            <h4><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_home_vd_subtitle_impulse',true)); ?></h4>
						<?php endif;?>
						<?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_url_impulse',true))):?>
                            <div class="clearfix"></div>
                            <a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl_home_vd_url_impulse',true)); ?>" class="custom-scroll-link btn float-btn flat-btn color-btn mar-top"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_home_vd_text_impulse',true)); ?></a> 
						<?php endif;?> 
                            </div>
                            <div class="half-bg">
                                <?php $solonick_images = rwmb_meta( 'rnr_bl_player_back_solonick_impulse','type=image&size=' );
						foreach ( $solonick_images as $solonick_image ){ ?>
                            <div class="bg"  data-bg="<?php echo esc_url(($solonick_image['url']));?>" data-scrollax="properties: { translateY: '250px' }" ></div>
                            <div class="overlay"></div>
							<?php } ;?>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    </div>
                    <!-- impulse-wrap end-->
                    <!--hero dec-->
                    <?php if(get_post_meta($post->ID,'rnr_wr_intro_right_dis_impulse',true)=='st2'){ ?>
                        <div class="hero-decor-let">
								<?php
								$solonick_left_con = rwmb_meta( 'rnr_md_right_intro_slide_item_impulse' );
								if ( ! empty( $solonick_left_con ) ) {
								foreach ( $solonick_left_con as $solonick_left_cons ) { ;?>
								
								<?php $solonick_intro_text_left = isset( $solonick_left_cons['rnr_md_top_con_slide_right_impulse'] ) ? $solonick_left_cons['rnr_md_top_con_slide_right_impulse'] : ''; ?><?php if ( !empty( $solonick_intro_text_left ) ) { ?>
                            <div><?php echo balanceTags($solonick_intro_text_left);?></div>
                            <?php } ?><?php } } ;?>
                        </div>
						<?php } else { ?>
						<?php } ;?>
                    <?php if(get_post_meta($post->ID,'rnr_wr_intro_top_dis1_impulse',true)=='st2'){ ?>
                        <div class="hero-decor-numb"><?php
								$solonick_top_con = rwmb_meta( 'rnr_md_po_top_info1_impulse' );
								if ( ! empty( $solonick_top_con ) ) {
								foreach ( $solonick_top_con as $solonick_top_cons ) { ;?>
								
								<?php $solonick_intro_text_top = isset( $solonick_top_cons['rnr_md_top_con_intro1_impulse'] ) ? $solonick_top_cons['rnr_md_top_con_intro1_impulse'] : ''; ?><?php if ( !empty( $solonick_intro_text_top ) ) { ?><span><?php echo esc_html($solonick_intro_text_top);?>  </span><?php } ?><?php } } ;?> <?php if(get_post_meta($post->ID,'rnr_md_top_con_hover_intro1_impulse',true)):?><a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_md_top_con_hover_intro_url1_impulse',true));?>" target="_blank" class="hero-decor-numb-tooltip"><?php echo esc_html(get_post_meta($post->ID,'rnr_md_top_con_hover_intro1_impulse',true));?></a><?php endif;?></div>
						<?php } else { ?>
						<?php } ;?>
                    <div class="hero-line-dec imp-her-line"></div>
                    <div class="pattern-bg"></div>
                    <div class="half-bg-dec" data-ran="12"></div>
                    <!--hero dec end-->
                </div>
                <!-- hero-wrap end-->