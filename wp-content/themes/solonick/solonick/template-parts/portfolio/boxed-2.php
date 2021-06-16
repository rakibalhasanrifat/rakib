 <?php $solonick_options = get_option('solonick'); ?>
 <?php while ( have_posts() ) : the_post(); ?>
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
								<?php if (( get_post_meta($post->ID,'rnr_so_port_page_header_title_boxed2',true))):?>
                                <h2><?php echo do_shortcode(get_post_meta($post->ID,'rnr_so_port_page_header_title_boxed2',true)) ?></h2>
								<?php else : ?>
								<h2><?php the_title();?></h2>
								<?php endif;?>
                                <p> <?php echo esc_html(get_post_meta($post->ID,'rnr_so_port_page_header_short_title_boxed2',true)); ?> </p>
                                <div class="horizonral-subtitle"><span><?php echo esc_html(get_post_meta($post->ID,'rnr_so_port_page_header_hor_title_boxed2',true)); ?></span></div>
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
                        <div class="section-subtitle"  data-scrollax="properties: { translateY: '150px' }" ><?php the_title();?><span><?php esc_html_e('//','solonick');?></span></div>
                        <div class="container">
						<?php if (( get_post_meta($post->ID,'rnr_port-filter',true))=='no'):?>
						<?php else : ?>
						<?php if(!get_post_meta(get_the_ID(), 'portfolio_category', true)):
						$solonick_portfolio_category = get_terms('portfolio_category');?>
						<?php if($solonick_portfolio_category):?>
                            <!-- filter -->
                            <div class="filter-holder inline-filter fl-wrap  mar-bottom">
                                <div class="filter-button"><i class="fal fa-filter"></i> <span><?php esc_html_e('Filter : ','solonick');?></span></div>
                                <div class="gallery-filters">
                                    <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*"><?php esc_html_e('All','solonick');?></a>
									<?php  foreach($solonick_portfolio_category as $solonick_portfolio_cat):?>
									<a href="#" class="gallery-filter" data-filter=".<?php echo esc_attr($solonick_portfolio_cat->slug);?>"><?php echo esc_attr($solonick_portfolio_cat->name);?></a>
									<?php endforeach;?>
                                </div>
                                <div class="folio-counter">
                                    <div class="num-album"></div>
                                    <div class="all-album"></div>
                                </div>
                            </div>
                            <!-- filter end-->
						<?php endif;?>
						<?php endif;?>
						<?php endif;?>
                            <!-- portfolio start -->
                            <div class="gallery-items spad  vis-box-det white-det three-column">
							<?php global $post, $post_id;?>
							<?php $solonick_showpost= get_post_meta($post->ID, 'rnr_portfolio-post-show', true);$solonick_categoryname= get_post_meta($post->ID, 'rnr_portfolio-post-cat', true);
							$solonick_paged=(get_query_var('paged'))?get_query_var('paged'):1;
							$solonick_loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page'=>$solonick_showpost, 'portfolio_category'=> $solonick_categoryname, 'paged'=>$solonick_paged ) ); ?>
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
								$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );?>
                                <!-- gallery-item-->
                                <div id="port-main-<?php the_ID(); ?>" class="gallery-item <?php echo (get_post_meta($post->ID,'rnr_post-box-width',true)) ?> <?php echo esc_attr($solonick_class);?>">
                                    <div class="grid-item-holder">
								<?php if(get_post_meta($post->ID,'rnr_post-popup-option',true)=='st2'){ 
								?> 
								<?php if (( get_post_meta($post->ID,'rnr_post_popup_video',true))):?>
								<a href="<?php echo esc_url(get_post_meta($post->ID,'rnr_post_popup_video',true)); ?>" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-play"></i></a>
								<?php endif;?>
								<?php } else { ?>
                                    <a href="<?php echo esc_url($solonick_image[0]);?>" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-search"></i></a>
								<?php } ;?>
                                    <img  src="<?php echo esc_url($solonick_image[0]);?>"    alt="<?php the_title();?>">
                                    <div class="box-item hd-box">
                                        <div class=" fl-wrap full-height">
                                            <div class="hd-box-wrap">
                                                <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                                                <p><?php echo balanceTags($solonick_categories);?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- gallery-item end-->
								<?php endif;?>
								<?php endwhile;
								wp_reset_postdata();?>
                                
                            </div>
                            <!-- portfolio end -->
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
<?php endwhile; ?>
<?php wp_reset_postdata();?> 