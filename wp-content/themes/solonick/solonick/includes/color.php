<?php
add_action('wp_head', 'solonick_custom_colors', 160);
function solonick_custom_colors() { 
$solonick_options = get_option('solonick');
?>
 
 <style type="text/css" class="solonick-custom-dynamic-css">
 <?php if(!empty($solonick_options['opt-theme-style'])):?>
 .header-contacts li i   ,  .nav-holder nav li a.act-link , #twitts-container  .timePosted a:before ,   .follow-twiit-button  , #twitts-container ul li:before ,   .sliding-menu a i.act-link  , .sliding-menu a:hover , .sliding-menu a:hover i, .submen-dec:before , .footer-contacts  li  i  , .footer-contacts  li:hover a , .nav-title:before , .sliding-menu a.back:hover:before  , .scroll-nav a:hover , .scroll-nav a.act-scrlink , .section-title h2 span , .section-subtitle span , .inline-facts-wrap i , .sp-arr  , .text-carousel .slick-center  .text-carousel-item:before, .text-carousel .slick-center  .text-carousel-item:after , .listing-rating i , .text-carousel-item  a.testim-link:hover , .half-hero-wrap h1 span , .hero-decor-let , .fet_pr-carousel-cat a:hover , .fet_pr-carousel-box-media-zoom , .pin:before , .fsp-filter .filter-title i , .fsp-filter .gallery-filters a:hover , .fsp-filter .gallery-filters a.gallery-filter-active , .all-album , .hd-box-wrap p a:hover , .inline-filter .filter-button i , .load-more i , .parallax-header span  , .parallax-header a:hover , .content-nav li a.ln , .content-nav li a.rn , .single-page-fixed-row-link i , .sarr-contr , .details-wrap h3 span  , .pr-list li a:hover , .cur-page:hover span , .show-info:hover span , .tooltip-info h5 , .inline-transparent-filter a:hover , .inline-transparent-filter .folio-counter div.all-album   , .inline-transparent-filter a.gallery-filter-active , .show-case-slider-wrap-style2  .sarr-contr:hover , .hero-start-link i , .hero-start-link span:before , .single-slider-wrap .sp-cont , .fullscreen-slider-title h3 span ,   .hero-start-button i , .audiojs .time strong  , .audiojs .play:before , .audiojs .pause:before , .playlist-wrap ol li:before , .playlist-wrap ol li.playing   a.downbuy-link , .playlist-wrap ol li    a.downbuy-link:hover , .playlist-wrap ol li a.audio-link:hover  , .playlist-wrap ol li.playing a.audio-link , .album-download-links li a , .custom-form label i , .custom-form  .verify-wrap .selectbox  , .selectbox li:hover , .contact-list li i , .recomm-price i , .main-about h2 a , .event-header-item i , .buy-ticket-link  , .album-cover-datils li i , .process-wrap li .process-details a:hover , .blog-btn i  , .widget-wrap .tagcloud li a , .serv-zoom , .hidden-works-item-text ul li a:hover , .hidden-works-item-media-img a  , .hidden-works-item.act-index .hidden-works-item-dec , .hidden-info-pagination i , .team-box .team-photo a:hover , .team-single-social li a:hover , .main-about h2 span , .fullscreen-slider-wrap .sp-cont , .fs-carousel-titlecat a  , .fs-carousel-link:hover , .lg-actions .lg-next:hover, .lg-actions .lg-prev:hover, .content-nav li.sol-ln a i,
.content-nav li.sol-rn a i, .wpcf7 label i , .comment-form label i, .tagcloud a, .tagcloud a:hover, span.wpcf7-not-valid-tip, .current_page_parent > a, .current-menu-item  > a, .current-menu-parent > a, .woocommerce-message::before, .leaflet-touch .leaflet-bar a {
	color:<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>
}
 .color-bg , .color-btn ,   .btn:before , .btn:before ,.ps-container > .ps-scrollbar-y-rail > .ps-scrollbar-y , .follow-twiit-button span ,  .share-container  .share-icon span , .subcribe-form .subscribe-button   , .close-twitter:hover ,  .nav-button span , .scroller  , .show-share    , .section-title:before , .promo-link , .close-share:hover , .scroll-nav a.act-scrlink:after , .line-item:before , .custom-inner-header:before , .custom-inner-header i , .custom-skillbar , .pr-title:before , .slick-dots li.slick-active button:before , .order-wrap h3:before , .inline-facts-wrap h6:before , .features-box h3:before , .hero-decor-numb:before , .fet_pr-carousel-box-text h3:before  , .fet_pr-carousel-counter:before , .fsp-filter .gallery-filters a:after , .hd-box-wrap h2:before  , .inline-filter .gallery-filters  a:before , .inline-filter .folio-counter:before , .parallax-text h3:before , .show-case-title h3:before , .accordion a.toggle span , .details-wrap h3:before  ,   .small-color-separator , .audiojs .progress , .volume-control span , .volume-control span.allvolumne , .contact-form-footer p:before , .collage-image:before , .best-price .price-head , .price-link , .album-cover-title h3:before , .video-promo-text h3:before , .fw-post h2:before , .about-widget h5:after , .serv-works-item .hidden-works-item-text h3:before , .main-about h2:before , .call-to-2  h3:before, .current-page, .wpcf7 input[type=submit], .comment-form input[type=submit], .subcribe-form .mc4wp-form input[type="submit"], .widget_mc4wp_form_widget input[type="submit"], .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button, .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order:hover, .woocommerce div.product form.cart .button, .woocommerce div.product form.cart .button:hover, input[type="button"], input[type="submit"] {
	background:<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>;
}
 
#twitts-container ul li:hover .timePosted a:after, .woocommerce-message {
 
	border-top-color: <?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>!important;
 
}

.woocommerce .widget_price_filter .ui-slider .ui-slider-handle{background-color:<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>;}

.gradient-bg{
  background-color: <?php echo esc_attr(solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>;
  background: -webkit-gradient(linear, 0% 0%, 0% 50%, from(<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>), to(#305A88));
  background: -webkit-linear-gradient(top, <?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>, #305A88);
  background: -moz-linear-gradient(top, <?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>, #305A88);
  background: -ms-linear-gradient(top, <?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>, #305A88);
  background: -o-linear-gradient(top, <?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('opt-theme-style',''));?>, #305A88);
}

 
 <?php endif;?>
 <?php if(!empty($solonick_options['loading_site_title'])):?>
 .pin:after {
    content: "<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('loading_site_title',''));?> : ";
    position: absolute;
    left: -100%;
    color: rgba(255, 255, 255, 0.51);
}
<?php else : ?>
.pin:after {
    content: "<?php  bloginfo('name'); ?> : ";
    position: absolute;
    left: -100%;
    color: rgba(255, 255, 255, 0.51);
}
<?php endif;?>
<?php if(!empty($solonick_options['loading_translet_title'])):?>
.pin:before {
    content: "<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('loading_translet_title',''));?>";
    position: absolute;
    overflow: hidden;
    max-width: 0;
    text-align: left;
    animation: pinanim 2.2s ease-out infinite;
}
<?php endif;?>
<?php if(!empty($solonick_options['translet_opt_4'])):?>
.hero-start-link span:before {
    content: "<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('translet_opt_4',''));?>";
    position: absolute;
    overflow: hidden;
    max-width: 0;
    white-space: nowrap;
    font-weight: 500;
    text-align: left;
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}
<?php endif;?>
<?php if (Solonick_AfterSetupTheme::return_thme_option('headershare_mob_opt')=='st2'){ ?>
@media only screen and (max-width: 1064px) {
.show-share{
display:none;
}
.only-small-screen{
display:block!important;
}
.logged-in .contact-btn.only-small-screen{
top:0px;
}
}
<?php } else { ?>
<?php } ;?>
<?php if (Solonick_AfterSetupTheme::return_thme_option('so_wid_foo_st_opt')=='st2'){ ?>
.main-footer{
	position:relative;
	left:0px;
	float: left;
	width:100%;
	clear:both;
}

<?php } ;?>
 </style>
 
 
 <?php 
	}
?>
