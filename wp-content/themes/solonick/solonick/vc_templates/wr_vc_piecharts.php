<?php

$args = array(
    	'class'=>'',
		'data_color'=>'#FAC921',
);

$html = "";

extract(shortcode_atts($args, $atts));

		
		
		$html .= '<div class="fl-wrap  mar-bottom mar-top">';
		$html .= '<div class="piechart-holder animaper" data-skcolor="'.$data_color.'">';
		$html .= do_shortcode($content);
		$html .= '</div>';
		$html .= '</div>';


echo $html;