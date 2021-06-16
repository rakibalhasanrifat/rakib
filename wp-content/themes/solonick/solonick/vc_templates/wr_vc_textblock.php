<?php

$args = array(
			'class'=>'',
			'id'=>'',
			'image'=>'',
			'big_title'=>'',
			'small_title'=>'',
);

$html = "";

extract(shortcode_atts($args, $atts));

		
		
		$html='';
		$dot="'";
		
		$html .= '<div class="main-about fl-wrap">';
		if($small_title != ""){
		$html .= '<h5>'.$small_title.'</h5>';
		}
		if($big_title != ""){
		$html .= '<h2>'.do_shortcode($big_title).'</h2>';
		}
		$html .= '<p>'.do_shortcode($content).'</p>';
		
		$html .= '</div>';
		


echo $html;