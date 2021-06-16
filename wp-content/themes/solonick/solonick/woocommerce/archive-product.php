<?php $solonick_options = get_option('solonick'); ?>
<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<div id="wrapper" class="single-page-wrap">
<div class="content">
<div class="woocommerce-products-header">
	
</div>
<div class="single-page-decor"></div>
                    <!-- single-page-fixed-row-->
                    <div class="single-page-fixed-row blog-single-page-fixed-row">
                        <div class="scroll-down-wrap">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span><?php esc_html_e('Scroll Down','solonick');?></span>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span><?php esc_html_e('Back to home','solonick');?></span></a>
                    </div>
					
					<!-- section-->
                    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
					<?php $solonick_shop_back = Solonick_AfterSetupTheme::return_thme_option('shopheaderimg','url');
					$solonick_dot="'";
					?>
					<?php if ( is_product_category() ){
					global $wp_query;
					$solonick_cat = $wp_query->get_queried_object();
					$solonick_thumbnail_id = get_woocommerce_term_meta( $solonick_cat->term_id, 'thumbnail_id', true );
					$solonick_image = wp_get_attachment_url( $solonick_thumbnail_id );
					if ( $solonick_image ) {
						echo '<div class="bg par-elem"  data-bg="'.$solonick_image.'" data-scrollax="properties: { translateY: '.$solonick_dot.'30%'.$solonick_dot.' }"></div>';
					}
					else {
					echo '<div class="bg par-elem"  data-bg="'.$solonick_shop_back.'" data-scrollax="properties: { translateY: '.$solonick_dot.'30%'.$solonick_dot.' }"></div>';
					}
					} else { ?>
                        <div class="bg par-elem"  data-bg="<?php echo esc_url($solonick_shop_back);?>" data-scrollax="properties: { translateY: '30%' }"></div>
					<?php } ;?>
                        <div class="overlay"></div>
                        <div class="pattern-bg"></div>
                        <div class="container">
                            <div class="section-title">
                                
								<h2><?php woocommerce_page_title(); ?></h2>
								<?php if ( is_product_category() ){ ?>
                                <p><?php
								/**
								 * Hook: woocommerce_archive_description.
								 *
								 * @hooked woocommerce_taxonomy_archive_description - 10
								 * @hooked woocommerce_product_archive_description - 10
								 */
								do_action( 'woocommerce_archive_description' );
								?> </p>
								<?php } else {?>
									<?php if(!empty($solonick_options['shopsubtitle'])):?>
									<p> 
									<?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('shopsubtitle',''));?>
									</p>
									<?php endif;?>
									<?php } ;?>
                                <div class="horizonral-subtitle"><span><?php woocommerce_page_title(); ?></span></div>
                            </div>
							<?php if(!empty($solonick_options['translet_opt_4'])):?>
                            <a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_4',''));?> <i class="fal fa-long-arrow-down"></i></a>
							<?php else : ?>
							<a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php esc_html_e('Let','solonick');?>'<?php esc_html_e('s Start ','solonick');?> <i class="fal fa-long-arrow-down"></i></a>							
							<?php endif;?> 
                        </div>
                    </section>
                    <!-- section end-->
					
<section data-scrollax-parent="true" id="sec1">
<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
<div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span><?php woocommerce_page_title(); ?></div>
<?php endif; ?>
<div class="container">
    <!-- blog-container  -->
    <div class="fl-wrap post-container">
    <div class="row">

<div class="col-md-8">
<?php

if ( have_posts() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked wc_print_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>
</div>

				        
<?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>						
<div class="col-md-4">
<div class="blog-sidebar fl-wrap fixed-bar">
<?php dynamic_sidebar( 'sidebar-3' ); ?>
<?php
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' ); ?>
</div>
</div>
<div class="limit-box fl-wrap"></div>
<?php } ?>
</div>
</div>
</div>
<div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
                        <div class="sec-lines"></div>
</section>

<?php if(!empty($solonick_options['shop_call_to_title'])):?>
                    <!-- section-->
                    <section class="dark-bg2 small-padding order-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3><?php echo esc_attr(Solonick_AfterSetupTheme::return_thme_option('shop_call_to_title',''));?></h3>
                                </div>
                                <div class="col-md-4"><a href="<?php echo esc_url(Solonick_AfterSetupTheme::return_thme_option('shop_call_to_buttonurl',''));?>" class="btn flat-btn color-btn"><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('shop_call_to_buttontxt',''));?></a> </div>
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
					<?php endif;?>

</div>

<?php get_footer( 'shop' );?>

