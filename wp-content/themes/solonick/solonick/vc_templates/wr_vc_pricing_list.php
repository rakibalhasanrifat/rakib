<?php

$args = array(
		'class'=>'',
		'title'=>'',
		'active'=>'',
);

extract(shortcode_atts($args, $atts));

$html = '';

	$html .= '<li>'.$content.'</li>';		

echo $html;