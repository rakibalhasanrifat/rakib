<?php $solonick_options = get_option('solonick'); ?>
<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
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
						<?php if(!empty($solonick_options['translet_opt_3'])):?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_3',''));?></span></a>
						<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="single-page-fixed-row-link"><i class="fal fa-arrow-left"></i> <span><?php esc_html_e('Back to home','solonick');?></span></a>
						<?php endif;?>
                        
                    </div>
                    <!-- single-page-fixed-row end-->
					<?php $solonick_images = rwmb_meta( 'rnr_so_music_page_header_back','type=image&size=' );
					foreach ( $solonick_images as $solonick_image ){ ?>
                    <!-- section-->
                    <section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true">
                        <div class="bg par-elem"  data-bg="<?php echo esc_url(($solonick_image['url']));?>" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="pattern-bg"></div>
                        <div class="container">
                            <div class="section-title">
                                <?php if (( get_post_meta($post->ID,'rnr_so_music_page_header_title',true))):?>
                                <h2><?php echo balanceTags(get_post_meta($post->ID,'rnr_so_music_page_header_title',true)); ?></h2>
								<?php else : ?>
								<h2><?php the_title();?></h2>
								<?php endif;?>
                                <p> <?php echo esc_html(get_post_meta($post->ID,'rnr_so_music_page_header_short_title',true)); ?> </p>
                                <div class="horizonral-subtitle"><span><?php echo esc_html(get_post_meta($post->ID,'rnr_so_music_page_header_hor_title',true)); ?></span></div>
                            </div>
							<?php if(!empty($solonick_options['translet_opt_4'])):?>
                            <a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php echo esc_html(Solonick_AfterSetupTheme::return_thme_option('translet_opt_4',''));?> <i class="fal fa-long-arrow-down"></i></a>
							<?php else : ?>
							<a href="#sec1" class="custom-scroll-link hero-start-link"><span><?php esc_html_e('Let','solonick');?>'<?php esc_html_e('s Start ','solonick');?> <i class="fal fa-long-arrow-down"></i></a>							
							<?php endif;?>
							
                        </div>
                    </section>
                    <!-- section end-->
					<?php } ;?>
<section data-scrollax-parent="true" id="sec1">
<div class="section-subtitle left-pos"  data-scrollax="properties: { translateY: '-250px' }" ><span>//</span><?php the_title();?></div>
<div class="container">
<?php /**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );?>
<div class="row">

<div class="col-md-4">
<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="fl-wrap">
        
        <?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
    </div>
    </div>
</div>

	<div class="col-md-8">
	<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="summary entry-summary fw-post">
		<?php
			/**
			 * Hook: Woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>
		
		<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
	</div>
	</div>
	</div>

	

<!-- content-nav -->
                                <div class="content-nav">
                                    <ul>
												<?php $solonick_previous_post = get_previous_post();
                                                $solonick_url = is_object( $solonick_previous_post ) ? get_permalink( $solonick_previous_post->ID ) : '';
                                                $solonick_title = is_object( $solonick_previous_post ) ? get_the_title( $solonick_previous_post->ID ) : '';
												if ($solonick_previous_post) { 
												 $solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $solonick_previous_post->ID ), '' );
												}
											?>
                                    <li>
									<?php  if ($solonick_previous_post) { ?>
									<a href="<?php echo esc_url( $solonick_url ) ?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php esc_html_e('Prev - ','solonick');?><?php echo esc_attr( $solonick_title ); ?></span></a>
									<?php } else { ?>
									<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="ln"><i class="fal fa-arrow-left"></i><span class="tooltip"><?php esc_html_e('Back To Shop','solonick');?></span></a>
									<?php } ;?>
									</li>
                                    <li>
									
                                        <a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="cur-page"><span><?php esc_html_e('All Product','solonick');?></span></a>
									
                                    </li>
												<?php $solonick_next_post = get_next_post();
                                                  $solonick_url = is_object( $solonick_next_post ) ? get_permalink( $solonick_next_post->ID ) : '';
                                                  $solonick_title = is_object( $solonick_next_post ) ? get_the_title( $solonick_next_post->ID ) : ''; 
												  if ($solonick_next_post) {
												  $solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $solonick_next_post->ID ), '' );
												  }
												?>
                                    <li>
									<?php if ($solonick_next_post) {?>
									<a href="<?php echo esc_url( $solonick_url ) ?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php esc_html_e('Next - ','solonick');?><?php echo esc_attr( $solonick_title ); ?> </span></a>
									<?php } else { ?>
									<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="rn"><i class="fal fa-arrow-right"></i><span class="tooltip"><?php esc_html_e('Back To Shop','solonick');?> </span></a>
									<?php };?>
									
									</li>
                                </ul>
                                </div>
                                <!-- content-nav end-->


</div>
</div>
						<div class="bg-parallax-module" data-position-top="50"  data-position-left="20" data-scrollax="properties: { translateY: '-250px' }"></div>
                        <div class="bg-parallax-module" data-position-top="40"  data-position-left="70" data-scrollax="properties: { translateY: '150px' }"></div>
                        <div class="bg-parallax-module" data-position-top="80"  data-position-left="80" data-scrollax="properties: { translateY: '350px' }"></div>
                        <div class="bg-parallax-module" data-position-top="95"  data-position-left="40" data-scrollax="properties: { translateY: '-550px' }"></div>
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
<?php do_action( 'woocommerce_after_single_product' ); ?>
