<?php $solonick_options = get_option('solonick'); ?>
 <!-- header-->
            <header class="main-header">
                <div class="logo-holder">
					<?php if (Solonick_AfterSetupTheme::return_thme_option('smalllogo')=='st2'){ ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(Solonick_AfterSetupTheme::return_thme_option('logopicsmall','url'));?>" class="solonick-small-logo" alt="<?php  bloginfo('name'); ?>"></a>
					<?php }
					else{ ?>
					<?php } ;?>
                </div>
				<?php if(has_nav_menu('top-menu')) { ?>
                <!-- nav-button-wrap-->
                <div class="nav-button but-hol">
                    <span  class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                    <div class="menu-button-text"><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('menu_st_title',''));?></div>
                </div>
                <!-- nav-button-wrap end-->
				<?php } ;?>
				<?php if (Solonick_AfterSetupTheme::return_thme_option('social_show_hide_opt_head')=='st2'){ ?>
                <div class="header-social">
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
				<?php }
				else{ ?>
				<?php } ;?>
				<?php if (Solonick_AfterSetupTheme::return_thme_option('headershare_opt')=='st2'){ ?>
                <!--  showshare -->  
                <div class="show-share showshare">
                    <i class="fal fa-retweet"></i>
					<?php if(!empty($solonick_options['share_bt_title'])):?>
                    <span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('share_bt_title',''));?></span>
					<?php else: ?>
					<span><?php esc_html_e('Share This','solonick');?></span>
					<?php endif;?>
                </div>
                <!--  showshare end -->
				<?php } else { ?>
				<?php } ;?>
				<?php if (Solonick_AfterSetupTheme::return_thme_option('headercontact_opt')=='st2'){ ?>
                <!-- contact-btn -->	
                <a class="contact-btn only-small-screen color-bg" href="<?php echo esc_url(Solonick_AfterSetupTheme::return_thme_option('con_p_url',''));?>"><i class="fal fa-envelope"></i><span>
				<?php if(!empty($solonick_options['contact_bt_title'])):?>
				<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('contact_bt_title',''));?>
				<?php else: ?>
				<?php esc_html_e('Get in Touch','solonick');?>
				<?php endif;?>
				</span></a>  
                <!-- contact-btn end -->
				<?php } else { ?>
				<?php } ;?>
            </header>
            <!--  header end -->
            <!--  navigation bar -->
            <div class="nav-overlay">
			<?php if(!empty($solonick_options['translet_opt_1'])):?>
                <div class="tooltip color-bg"><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_1',''));?></div>
			<?php else : ?>
                <div class="tooltip color-bg"><?php esc_html_e('Close Menu','solonick');?></div>
			<?php endif;?>
            </div>
            <div class="nav-holder">
				<?php if (Solonick_AfterSetupTheme::return_thme_option('textlogo')=='st2'){ ?>
				<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(Solonick_AfterSetupTheme::return_thme_option('logopic','url'));?>" alt="<?php  bloginfo('name'); ?>"></a> 
					<?php }
					else{ ?>
					<a class="header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php if(!empty($solonick_options['logotext'])):?>
					<h1><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('logotext',''));?></h1>
					<?php else:?>
					<h1><?php  bloginfo('name'); ?></h1>
					<?php endif;?>
					
					</a>
					 <?php } ;?>
                <?php if(!empty($solonick_options['menu_st_title'])):?>
                <div class="nav-title"><span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('menu_st_title',''));?></span></div>
				<?php else: ?>
                <div class="nav-title"><span><?php esc_html_e('Menu','solonick');?></span></div>
				<?php endif;?>
                <div class="nav-inner-wrap">
                    <nav class="nav-inner sound-nav" id="menu">
                        <ul>
                            <?php

										$defaults = array(
													'theme_location'  => 'top-menu',
													'menu'            => 'nav',
													'container'       => '',
													'container_class' => '',
													'menu_class'      => 'navbar-main-menu',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'wp_page_menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '%3$s',
													'depth'           => 0,
													'walker'          => '',
													
														);
								if(has_nav_menu('top-menu')) {
														wp_nav_menu( $defaults );
								}
										  else {
											echo '<li><a>No menu assigned!</a></li>';
										  }
														?>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--  navigation bar end -->
<?php if ($solonick_options['menu_hover_effect']=="st2") { ?>
<?php } else { ?>
<?php 
wp_enqueue_script( 'solonick-shuffleLetters' );		
?>
<?php } ;?>