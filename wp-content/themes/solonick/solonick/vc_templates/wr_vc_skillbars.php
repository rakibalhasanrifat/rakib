<?php

$args = array(
    	'class'=>'',
		
);

$html = "";

extract(shortcode_atts($args, $atts));

		
		
		$html .= '<div class="fl-wrap '.$class.' mar-bottom mar-top">';
		$html .= '<div class="skillbar-box animaper">';
		$html .= do_shortcode($content);
		$html .= '</div>';
		$html .= '</div>';


echo $html;