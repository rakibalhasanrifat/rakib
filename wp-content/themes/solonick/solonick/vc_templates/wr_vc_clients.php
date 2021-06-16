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

		
		
		$html .= '<div class="fl-wrap">';
		$html .= '<div class="container">';
		$html .= '<ul class="client-list client-list-white">';
		$html .= do_shortcode($content);
		$html .= '</ul>';
		$html .= '</div>';
		$html .= '</div>';
		


echo $html;