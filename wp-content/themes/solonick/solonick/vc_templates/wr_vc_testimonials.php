<?php

$args = array(
    	'class'=>'',
		'boxsize'=>'',
		'boxheight'=>'',
		'title'=>'',
		'iconclass'=>'',
		'autoplay'=>'false',
		'slider_speed'=>'1400',
);

$html = "";

extract(shortcode_atts($args, $atts));

		
		$html .= '<div class="clearfix"></div>';
		$html .= '<div class="slider-carousel-wrap text-carousel-wrap fl-wrap '.$class.'">';
		$html .= '<div class="text-carousel-controls fl-wrap">
                                <div class="container">
                                    <div class="sp-cont  sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
                                    <div class="sp-cont   sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>
                                </div>
                            </div>';
		$html .= '<div class="text-carousel cur_carousel-slider-container fl-wrap" data-slider-speed="'.esc_attr($slider_speed).'" data-slider-play="'.esc_attr($autoplay).'">';
		$html .= do_shortcode($content);
		
		$html .= '</div>';
		$html .= '</div>';


echo $html;