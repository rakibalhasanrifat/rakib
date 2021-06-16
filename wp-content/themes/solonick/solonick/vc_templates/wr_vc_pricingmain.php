<?php

$args = array(
    	'class'=>'',
    	
);

		$html = "";
		

extract(shortcode_atts($args, $atts));

$html .= '<div class="pricing-wrap fl-wrap '.$class.'">';
$html .= do_shortcode($content);
$html .= '</div>';

echo $html;