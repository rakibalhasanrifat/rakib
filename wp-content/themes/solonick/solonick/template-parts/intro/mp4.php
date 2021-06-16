<!-- hero-wrap-->
                <div class="hero-wrap" id="sec1" data-scrollax-parent="true">
                    <!-- hero-inner-->
                    <div class="hero-inner fl-wrap full-height">
                        <div class="half-hero-wrap">
                            <?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_title_mp4',true))):?>
                            <h1><?php echo balanceTags(get_post_meta($post->ID,'rnr_bl_home_vd_title_mp4',true)); ?></h1>
					    <?php endif;?>
						<?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_subtitle_mp4',true))):?>
                            <h4><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_home_vd_subtitle_mp4',true)); ?></h4>
						<?php endif;?>
						<?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_url_mp4',true))):?>
                            <div class="clearfix"></div>
                            <a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl_home_vd_url_mp4',true)); ?>" class="custom-scroll-link btn float-btn flat-btn color-btn mar-top"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_home_vd_text_mp4',true)); ?></a> 
						<?php endif;?> 
                        </div>
                        <div class="media-container">
						<?php $solonick_images = rwmb_meta( 'rnr_bl_player_back_solonick_mp4','type=image&size=' );
						foreach ( $solonick_images as $solonick_image ){ ?>
                            <div class="bg mob-bg" style="background-image: url(<?php echo esc_url(($solonick_image['url']));?>)"></div>
							<?php } ;?>
                            
                            <div class="video-container">
                                <video autoplay  loop muted  class="bgvid">
                                    <source src="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl-mp4-home-opt_mp4',true)); ?>" type="video/mp4">
                                </video>
                            </div>
                            
                        </div>
                        <div class="overlay"></div>
                        <!--hero dec-->
                        <?php if(get_post_meta($post->ID,'rnr_wr_intro_right_dis_mp4',true)=='st2'){ ?>
                        <div class="hero-decor-let">
								<?php
								$solonick_left_con = rwmb_meta( 'rnr_md_right_intro_slide_item_mp4' );
								if ( ! empty( $solonick_left_con ) ) {
								foreach ( $solonick_left_con as $solonick_left_cons ) { ;?>
								
								<?php $solonick_intro_text_left = isset( $solonick_left_cons['rnr_md_top_con_slide_right_mp4'] ) ? $solonick_left_cons['rnr_md_top_con_slide_right_mp4'] : ''; ?><?php if ( !empty( $solonick_intro_text_left ) ) { ?>
                            <div><?php echo balanceTags($solonick_intro_text_left);?></div>
                            <?php } ?><?php } } ;?>
                        </div>
						<?php } else { ?>
						<?php } ;?>
                        <?php if(get_post_meta($post->ID,'rnr_wr_intro_top_dis1_mp4',true)=='st2'){ ?>
                        <div class="hero-decor-numb"><?php
								$solonick_top_con = rwmb_meta( 'rnr_md_po_top_info1_mp4' );
								if ( ! empty( $solonick_top_con ) ) {
								foreach ( $solonick_top_con as $solonick_top_cons ) { ;?>
								
								<?php $solonick_intro_text_top = isset( $solonick_top_cons['rnr_md_top_con_intro1_mp4'] ) ? $solonick_top_cons['rnr_md_top_con_intro1_mp4'] : ''; ?><?php if ( !empty( $solonick_intro_text_top ) ) { ?><span><?php echo esc_html($solonick_intro_text_top);?>  </span><?php } ?><?php } } ;?> <?php if(get_post_meta($post->ID,'rnr_md_top_con_hover_intro1_mp4',true)):?><a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_md_top_con_hover_intro_url1_mp4',true));?>" target="_blank" class="hero-decor-numb-tooltip"><?php echo esc_html(get_post_meta($post->ID,'rnr_md_top_con_hover_intro1_mp4',true));?></a><?php endif;?></div>
						<?php } else { ?>
						<?php } ;?>
                        <div class="pattern-bg"></div>
                        <div class="hero-line-dec"></div>
                    </div>
                    <!--hero dec end-->
                </div>
                <!-- hero-wrap end-->