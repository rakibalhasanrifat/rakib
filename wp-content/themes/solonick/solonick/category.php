<?php $solonick_options = get_option('solonick'); ?>
<?php get_header();?>
<!--wrapper-->
            <div id="wrapper" class="single-page-wrap">
                <!-- Content-->
                <div class="content">
                    
                    <div class="single-page-decor"></div>
                    <!-- single-page-fixed-row-->
                    <div class="single-page-fixed-row blog-single-page-fixed-row">
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
                        <!-- filter  -->
                        <div class="blog-filters so-index-blog-filters">
                            
                            <div class="blog-search">
                                <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searh-inner fl-wrap">
                                    <input name="s" id="se" type="text" class="search" placeholder="<?php if(!empty($solonick_options['translet_opt_5'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_5',''));?><?php else : ?><?php esc_html_e('Search...','solonick');?><?php endif;?>" value="<?php if(!empty($solonick_options['translet_opt_5'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_5',''));?><?php else : ?><?php esc_html_e('Search...','solonick');?><?php endif;?>" />
                                    <button class="search-submit color-bg" id="submit_btn"><i class="fa fa-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!-- filter end    -->
                    </div>
                    <!-- single-page-fixed-row end-->
                    <!-- section --> 
                    <section data-scrollax-parent="true" id="sec1">
                        <div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span><?php single_cat_title( '', true ); ?></div>
                        <div class="container">
                            <?php if ($solonick_options['blogtyle']=="st2") {?>
							<?php get_template_part('template-parts/index/blog-left');?>
							<?php } else { ?>
							<?php get_template_part('template-parts/index/blog-right');?>
							<?php } ;?>
                        </div>
                        <div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
                        <div class="sec-lines"></div>
                    </section>
                    
                </div>
                <!-- Content end -->
<?php get_footer(); ?>	