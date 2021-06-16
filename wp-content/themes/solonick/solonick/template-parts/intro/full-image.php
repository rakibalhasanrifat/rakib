<!-- hero-wrap-->
                <div class="hero-wrap" id="sec1" data-scrollax-parent="true">
                    <!-- hero-inner-->
                    <div class="hero-inner fl-wrap full-height">
                        <div class="half-hero-wrap">
                            <?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_title_full_image',true))):?>
                            <h1><?php echo balanceTags(get_post_meta($post->ID,'rnr_bl_home_vd_title_full_image',true)); ?></h1>
					    <?php endif;?>
						<?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_subtitle_full_image',true))):?>
                            <h4><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_home_vd_subtitle_full_image',true)); ?></h4>
						<?php endif;?>
						<?php if (( get_post_meta($post->ID,'rnr_bl_home_vd_url_full_image',true))):?>
                            <div class="clearfix"></div>
                            <a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_bl_home_vd_url_full_image',true)); ?>" class="custom-scroll-link btn float-btn flat-btn color-btn mar-top"><?php echo esc_html(get_post_meta($post->ID,'rnr_bl_home_vd_text_full_image',true)); ?></a> 
						<?php endif;?> 
                        </div>
                        <?php $solonick_images = rwmb_meta( 'rnr_bl_player_back_solonick_full_image','type=image&size=' );
						foreach ( $solonick_images as $solonick_image ){ ?>
                            <div class="bg"  data-bg="<?php echo esc_url(($solonick_image['url']));?>" data-scrollax="properties: { translateY: '250px' }" ></div>
                            <div class="overlay"></div>
							<?php } ;?>
                        <div class="overlay"></div>
                        <!--hero dec-->
                        <?php if(get_post_meta($post->ID,'rnr_wr_intro_right_dis_full_image',true)=='st2'){ ?>
                        <div class="hero-decor-let">
								<?php
								$solonick_left_con = rwmb_meta( 'rnr_md_right_intro_slide_item_full_image' );
								if ( ! empty( $solonick_left_con ) ) {
								foreach ( $solonick_left_con as $solonick_left_cons ) { ;?>
								
								<?php $solonick_intro_text_left = isset( $solonick_left_cons['rnr_md_top_con_slide_right_full_image'] ) ? $solonick_left_cons['rnr_md_top_con_slide_right_full_image'] : ''; ?><?php if ( !empty( $solonick_intro_text_left ) ) { ?>
                            <div><?php echo balanceTags($solonick_intro_text_left);?></div>
                            <?php } ?><?php } } ;?>
                        </div>
						<?php } else { ?>
						<?php } ;?>
                        <?php if(get_post_meta($post->ID,'rnr_wr_intro_top_dis1_full_image',true)=='st2'){ ?>
                        <div class="hero-decor-numb"><?php
								$solonick_top_con = rwmb_meta( 'rnr_md_po_top_info1_full_image' );
								if ( ! empty( $solonick_top_con ) ) {
								foreach ( $solonick_top_con as $solonick_top_cons ) { ;?>
								
								<?php $solonick_intro_text_top = isset( $solonick_top_cons['rnr_md_top_con_intro1_full_image'] ) ? $solonick_top_cons['rnr_md_top_con_intro1_full_image'] : ''; ?><?php if ( !empty( $solonick_intro_text_top ) ) { ?><span><?php echo esc_html($solonick_intro_text_top);?>  </span><?php } ?><?php } } ;?> <?php if(get_post_meta($post->ID,'rnr_md_top_con_hover_intro1_full_image',true)):?><a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_md_top_con_hover_intro_url1_full_image',true));?>" target="_blank" class="hero-decor-numb-tooltip"><?php echo esc_html(get_post_meta($post->ID,'rnr_md_top_con_hover_intro1_full_image',true));?></a><?php endif;?></div>
						<?php } else { ?>
						<?php } ;?>
                        <div class="pattern-bg"></div>
                        <div class="hero-line-dec"></div>
                    </div>
                    <!--hero dec end-->
                </div>
                <!-- hero-wrap end-->