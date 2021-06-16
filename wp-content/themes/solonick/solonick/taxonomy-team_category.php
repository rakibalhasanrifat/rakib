<?php $solonick_options = get_option('solonick_wp');?>
<?php
 get_header();?>
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
                        <div class="bg par-elem"  data-bg="" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="pattern-bg"></div>
                        <div class="container">
                            <div class="section-title">
                                <h2><?php single_cat_title( '', true ); ?></h2>
                                
                                <div class="horizonral-subtitle"><span><?php single_cat_title( '', true ); ?></span></div>
                            </div>
                            <a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php esc_html_e('Let','solonick');?>'<?php esc_html_e('s Start ','solonick');?></span> <i class="fal fa-long-arrow-down"></i></a>
                        </div>
                    </section>
                    <!-- section end-->
                    <!-- section end-->  
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '-250px' }"><span>//</span><?php single_cat_title( '', true ); ?></div>
                        <div class="container">
						   <?php global $loop; 
							$args = array_merge( $wp_query->query, array( 'post_type' => 'team', 'posts_per_page'=>-1, ) );
							query_posts( $args );
							?>	
						
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
                            <!-- team-box   --> 
                            <div class="team-box">
							<?php if (has_post_thumbnail( $post->ID ) ):
							$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solonick_team_image' );?>
                                <div class="team-photo">
                                    <div class="overlay"></div>
                                    <a href="<?php the_permalink()?>"><?php esc_html_e('Deatils','solonick');?></a>
                                    <img src="<?php echo esc_url($solonick_image[0]);?>" alt="<?php the_title();?>" class="respimg"> 										
                                </div>
								<?php endif;?>
                                <div class="team-info">
                                    <h3><?php the_title();?></h3>
									<?php if (( get_post_meta($post->ID,'rnr_popu_des_team',true))):?>
                                    <h4><?php echo esc_html(get_post_meta($post->ID,'rnr_popu_des_team',true));?></h4>
									<?php endif;?>
                                    <p><?php $solonick_excerpt= substr(strip_tags($post->post_content), 0, 120);
									update_post_meta(get_the_ID(), 'solonick_excerpt', $solonick_excerpt);
									echo esc_html($solonick_excerpt); ?></p>
									<?php if(get_post_meta($post->ID,'rnr_wr_team_so_en',true)=='st2'){ ?>
                                    <ul class="team-social">
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
									<?php } else { ?>
									<?php } ;?>
                                </div>
                            </div>
                            <!-- team-box end --> 
							
							<?php  endwhile; endif; wp_reset_postdata(); ?>
                                                           
                        </div>
                        <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
                        <div class="sec-lines"></div>
                    </section>
                    <!-- section end-->              
                    
                </div>
                <!-- Content end -->
<?php get_footer(); ?>	