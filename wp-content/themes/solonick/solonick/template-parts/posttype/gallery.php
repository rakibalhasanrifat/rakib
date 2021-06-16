<div class="blog-media fl-wrap nomar-bottom">
    <div class="single-slider-wrap slider-carousel-wrap ">
        <div class="single-slider cur_carousel-slider-container fl-wrap"  >
         <?php $solonick_images = rwmb_meta( 'rnr_wr_galleryimg_blog','type=image&size=solonick_portfolio_image' );
         foreach ( $solonick_images as $solonick_image ){
         echo "<div class='slick-slide-item'><img src='{$solonick_image['url']}' alt='{$solonick_image['caption']}'></div>
							   ";
		};?>   
        </div>
    <div class="sp-cont   sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
    <div class="sp-cont   sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
   </div>
</div>