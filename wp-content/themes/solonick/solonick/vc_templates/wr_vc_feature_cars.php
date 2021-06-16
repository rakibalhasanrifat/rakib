<?php

$args = array(
    	'class'=>'',
		'data_color'=>'#FAC921',
);

$html = "";

extract(shortcode_atts($args, $atts));

		
		
		$html .= '<div class="serv-carousel-wrap slider-carousel-wrap fl-wrap '.$class.'">';
		$html .= '<div class="sp-cont  sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
                  <div class="sp-cont   sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>';
		$html .= '<div class="serv-carousel fl-wrap cur_carousel-slider-container">';
		$html .= do_shortcode($content);
		$html .= '</div>';
		$html .= '</div>';


echo $html;