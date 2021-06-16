<?php

$args = array(
    	'page_name'=>'',
		'boxsize'=>'',
		'boxheight'=>'',
		'title'=>'',
		'iconclass'=>'',
		'class'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

$html .= '<div class="gallery-items spad  hde three-column   fl-wrap '.$class.'">';
$html .= do_shortcode($content);
$html .= '</div>';
		
		


echo $html;