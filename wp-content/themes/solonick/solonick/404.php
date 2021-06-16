<?php $solonick_options = get_option('solonick'); ?>
<?php get_header();?>
<<!--wrapper-->
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
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span><?php esc_html_e('Back to home','solonick');?></span></a>
                    </div>
                    <!-- section-->
                    <section class="parallax-section fw-parallax" data-scrollax-parent="true">
                        <div class="bg par-elem"  data-bg="<?php echo esc_url(Solonick_AfterSetupTheme::return_thme_option('404back','url'));?>" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="error-wrap">
                                <h2><?php if(!empty($solonick_options['translet_opt_14'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_14',''));?><?php else : ?><?php esc_html_e('404','solonick');?><?php endif;?></h2>
                                <p><?php if(!empty($solonick_options['translet_opt_15'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_15',''));?><?php else : ?><?php esc_html_e('We','solonick');?>'<?php esc_html_e('re sorry, but the Page you were looking for, couldn','solonick');?>'<?php esc_html_e('t be found.','solonick');?><?php endif;?></p>
                                <div class="clearfix"></div>
                                <form action="<?php echo esc_url( home_url( '/'  ) ); ?>" method="post">
                                    <input name="s" id="se" type="text" class="search" placeholder="<?php if(!empty($solonick_options['translet_opt_5'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_5',''));?><?php else : ?><?php esc_html_e('Search...','solonick');?><?php endif;?>" value="<?php if(!empty($solonick_options['translet_opt_5'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_5',''));?><?php else : ?><?php esc_html_e('Search...','solonick');?><?php endif;?>">
                                    <button class="search-submit color-bg" id="submit_btn"><i class="fa fa-search"></i> </button>
                                </form>
                                <div class="clearfix"></div>
                                <p><?php if(!empty($solonick_options['translet_opt_16'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_16',''));?><?php else : ?><?php esc_html_e('or','solonick');?><?php endif;?></p>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn flat-btn color-btn"><?php if(!empty($solonick_options['translet_opt_3'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?><?php else : ?><?php esc_html_e('Back To Home Page','solonick');?><?php endif;?></a>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
					<?php if (Solonick_AfterSetupTheme::return_thme_option('404subscribe')=='st2'){ ?>
                    <!-- section-->
                    <section class="dark-bg2 small-padding order-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('40_call_to_title',''));?></h3>
                                </div>
                                <div class="col-md-4">
								<?php if(!empty($solonick_options['40_call_to_bt_url'])):?>
								<a href="<?php echo esc_url(Solonick_AfterSetupTheme::return_thme_option('40_call_to_bt_url',''));?>" class="btn flat-btn color-btn">
								<?php if(!empty($solonick_options['40_call_to_bt_text'])):?>
								<?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('40_call_to_bt_text',''));?>
								<?php else : ?>
								<?php esc_html_e('Our Portfolio','solonick');?>
								<?php endif;?>
								</a> 
								<?php endif;?>
								</div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
					<?php }
					else{ ?>
					<?php } ;?>
                </div>
                <!-- Content end -->
<?php get_footer(); ?>	