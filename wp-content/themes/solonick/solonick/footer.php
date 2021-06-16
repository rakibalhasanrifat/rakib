<?php $solonick_options = get_option('solonick'); ?>

<!-- footer-->
                <?php if (Solonick_AfterSetupTheme::return_thme_option('so_wid_foo_st_opt')!='st2'){ ?>
				<div class="height-emulator fl-wrap"></div>
				<?php } ;?>
                <footer class="main-footer <?php if (Solonick_AfterSetupTheme::return_thme_option('so_wid_foo_st_opt')!='st2'){ ?>fixed-footer<?php } ;?>">
				<?php if (Solonick_AfterSetupTheme::return_thme_option('so_wid_foo_opt')=='st2'){ ?>
                    <!--footer-inner--> 
                    <div class="footer-inner fl-wrap">
                        <div class="container">
						<?php if (Solonick_AfterSetupTheme::return_thme_option('so_wid_foo_effect_opt')=='st2'){ ?>
						<?php } else { ?>
                            <div class="partcile-dec" data-parcount="90"></div>
						<?php } ;?>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="footer-title fl-wrap">
                                        <span><?php  bloginfo('name'); ?></span>
                                    </div>
                                </div>
								<?php if (Solonick_AfterSetupTheme::return_thme_option('headertwitter_opt')=='st2'){ ?>
                                <div class="col-md-5">
								<?php if(!empty($solonick_options['twitter_hd_title'])):?>
                                    <div class="footer-header fl-wrap"><?php echo  do_shortcode(Solonick_AfterSetupTheme::return_thme_option ('twitter_hd_title',''));?></div>
								<?php endif;?>
                                    <div class="footer-box fl-wrap">
                                        <div class="twitter-swiper-container fl-wrap" id="twitts-container" data-twitts-count="2" data-twitts-user="<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('twitter_user',''));?>"></div>
										<?php if(!empty($solonick_options['twitter_follow_bt_title'])):?>
									   <a href="<?php echo esc_url('https://twitter.com/','solonick');?><?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('twitter_user',''));?>" target="_blank" class="btn float-btn trsp-btn"><?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('twitter_follow_bt_title',''));?></a>
									   <?php endif;?>
                                    </div>
                                </div>
								<?php } else { ?>
								<?php } ;?>
                                <div class="col-md-5">
								<?php if(!empty($solonick_options['subscribe_hd_title'])):?>
                                    <div class="footer-header fl-wrap"><?php echo  do_shortcode(Solonick_AfterSetupTheme::return_thme_option ('subscribe_hd_title',''));?></div>
								<?php endif;?>
                                    <!-- footer-box--> 
                                    <div class="footer-box fl-wrap">
										<?php if (Solonick_AfterSetupTheme::return_thme_option('theme-footer-widget-opt-main')=='st2'){ ?>
										<?php if(!empty($solonick_options['subscribe_hd_con'])):?>
                                        <p><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('subscribe_hd_con',''));?></p>
										<?php endif;?>
                                        <div class="subcribe-form fl-wrap">
                                            <?php if( function_exists( 'mc4wp_show_form' ) ) { ?>
											<?php echo do_shortcode(Solonick_AfterSetupTheme::return_thme_option('subscribe_hd_link','')); ?>  
											<?php	} ?>
                                        </div>
										<?php }
										else{ ?>
										<?php } ;?>
										<?php if (Solonick_AfterSetupTheme::return_thme_option('footer_contact_opt')=='st2'){ ?>
                                        <!-- footer-contacts-->                    
                                        <div class="footer-contacts fl-wrap">
                                            <ul>
												<?php if(!empty($solonick_options['contact_st_phn'])):?>
                                                <li><i class="fal fa-phone"></i><span><?php if(!empty($solonick_options['contact_st_phn_title'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('contact_st_phn_title',''));?> :<?php else : ?><?php esc_html_e('Phone :','solonick');?><?php endif;?></span><a href="callto:<?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('contact_st_phn',''));?>"><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('contact_st_phn',''));?></a></li>
												<?php endif;?>
												<?php if(!empty($solonick_options['contact_st_email'])):?>
                                                <li><i class="fal fa-envelope"></i><span><?php if(!empty($solonick_options['contact_st_email_title'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('contact_st_email_title',''));?> :<?php else : ?><?php esc_html_e('Email :','solonick');?><?php endif;?></span><a href="mailto:<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('contact_st_email',''));?>"><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('contact_st_email',''));?></a></li>
												<?php endif;?>
												<?php if(!empty($solonick_options['contact_st_address'])):?>
                                                <li><i class="fal fa-map-marker"></i><span><?php if(!empty($solonick_options['contact_st_address_title'])):?><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('contact_st_address_title',''));?> :<?php else : ?><?php esc_html_e('Address :','solonick');?><?php endif;?></span><a href="#"><?php echo balanceTags(Solonick_AfterSetupTheme::return_thme_option('contact_st_address',''));?></a></li>
												<?php endif;?>
                                            </ul>
                                        </div>
                                        <!-- footer end --> 
										<?php }
										else{ ?>
										<?php } ;?>
										<?php if (Solonick_AfterSetupTheme::return_thme_option('social_show_hide_opt_footer')=='st2'){ ?>
                                        <!-- footer-socilal -->            
                                        <div class="footer-socilal fl-wrap">
                                            <ul >
                                    <?php if(!empty($solonick_options['facebook'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['facebook']);?>"><i class="fab fa-facebook-f"></i></a></li>
									<?php endif;?>
									<?php if(!empty($solonick_options['twitter'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['twitter']);?>"><i class="fab fa-twitter"></i></a></li>
									<?php endif;?>
									<?php if(!empty($solonick_options['pinterest'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['pinterest']);?>"><i class="fab fa-pinterest"></i></a></li>
									<?php endif;?>
									<?php if(!empty($solonick_options['dribbble'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['dribbble']);?>"><i class="fab fa-dribbble"></i></a></li>
									<?php endif;?>
									<?php if(!empty($solonick_options['behance'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['behance']);?>"><i class="fab fa-behance"></i></a></li>
									<?php endif;?>
									
									<?php if(!empty($solonick_options['gplus'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['gplus']);?>"><i class="fab fa-google-plus"></i></a></li>
									<?php endif;?>
									
									<?php if(!empty($solonick_options['linkedin'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['linkedin']);?>"><i class="fab fa-linkedin"></i></a></li>
									<?php endif;?>
									
									<?php if(!empty($solonick_options['youtube'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['youtube']);?>"><i class="fab fa-youtube"></i></a></li>
									<?php endif;?>
									
									<?php if(!empty($solonick_options['vimeo'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['vimeo']);?>"><i class="fab fa-vimeo"></i></a></li>
									<?php endif;?>
									
									<?php if(!empty($solonick_options['slack'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['slack']);?>"><i class="fab fa-slack"></i></a></li>
									<?php endif;?>
									
									<?php if(!empty($solonick_options['instagram'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['instagram']);?>"><i class="fab fa-instagram"></i></a></li>
									<?php endif;?>
									
									<?php if(!empty($solonick_options['tumblr'])):?>
                                    <li><a target="_blank" href="<?php echo esc_url($solonick_options['tumblr']);?>"><i class="fab fa-tumblr"></i></a></li>
									<?php endif;?>
									<?php
									$solonick_more_social = Solonick_AfterSetupTheme::return_thme_option('opt_add_more_social','');
									if ( ! empty( $solonick_more_social ) ) {
									foreach ( $solonick_more_social as $solonick_more_socials ) { ;?>
									<?php echo balanceTags($solonick_more_socials);?>
									<?php } } ;?> 
                                            </ul>
                                        </div>
                                        <!-- footer-socilal end -->   
									<?php }
									else{ ?>
									
									<?php } ;?>
                                    </div>
                                    <!-- footer-box end--> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--footer-inne endr--> 
					<?php }
					else{ ?>
					<div class="footer-inner-blank fl-wrap">
						<div class="container">
						<?php if (Solonick_AfterSetupTheme::return_thme_option('so_wid_foo_effect_opt')=='st2'){ ?>
						<?php } else { ?>
                            <div class="partcile-dec" data-parcount="90"></div>
						<?php } ;?>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="footer-title fl-wrap">
                                        <span><?php  bloginfo('name'); ?></span>
                                    </div>
                                </div>
								<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
								<div class="col-md-5">
								<?php dynamic_sidebar( 'sidebar-4' ); ?>
								</div>
								<?php endif; ?>
								<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
								<div class="col-md-5">
								<?php dynamic_sidebar( 'sidebar-5' ); ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<?php } ;?>
                    <!--subfooter--> 
                    <div class="subfooter fl-wrap">
                        <div class="container">
                            <!-- policy-box-->
                            <div class="policy-box">
                            <?php $solonick_copy = Solonick_AfterSetupTheme::return_thme_option('copyright');
						  echo apply_filters('the_content',$solonick_copy);
						 ?>
                            </div>
                            <!-- policy-box end-->
                            <a href="#" class="to-top color-bg"><i class="fal fa-angle-up"></i><span></span></a>
                        </div>
                    </div>
                    <!--subfooter end--> 
                </footer>
                <!-- footer end-->
				<?php if (Solonick_AfterSetupTheme::return_thme_option('headercontact_opt')=='st2'){ ?>
                <!-- contact-btn -->	
                <a class="contact-btn color-bg" href="<?php echo esc_url(Solonick_AfterSetupTheme::return_thme_option('con_p_url',''));?>"><i class="fal fa-envelope"></i><span>
				<?php if(!empty($solonick_options['contact_bt_title'])):?>
				<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('contact_bt_title',''));?>
				<?php else: ?>
				<?php esc_html_e('Get in Touch','solonick');?>
				<?php endif;?>
				</span></a>  
                <!-- contact-btn end -->
				<?php } else { ?>
				<?php } ;?>

</div>
<!--   content end -->
			<!-- share-wrapper -->                       
            <div class="share-wrapper isShare">
                <div class="share-title">
					<?php if(!empty($solonick_options['share_bt_title2'])):?>
                    <span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('share_bt_title2',''));?></span>
					<?php else: ?>
					<span><?php esc_html_e('Share','solonick');?></span>
					<?php endif;?>
				
				</div>
                <div class="close-share soa">
					<?php if(!empty($solonick_options['share_bt_title3'])):?>
                    <span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('share_bt_title3',''));?></span>
					<?php else: ?>
					<span><?php esc_html_e('Close','solonick');?></span>
					<?php endif;?>
				
				<i class="fal fa-times"></i></div>
                <div class="share-inner soa">
                    <div class="share-container"></div>
                </div>
            </div>
            <!-- share-wrapper end -->	
</div>
<!-- Main end -->
<?php wp_footer(); ?>
</body>
</html>