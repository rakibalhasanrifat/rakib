<?php

$args = array(
		'iconname'=>'',
		'image'=>'',
		'companyname'=>'',
		'clientname'=>'',
		'button_text'=>'View',
		'button_url'=>'#',
		'button_target'=>'',
		
);

extract(shortcode_atts($args, $atts));

$html = '';
$solonick_image = '';
$solonick_alt = '';
$link_target_opt ='';
		if($button_target == "_blank"){
		$link_target_opt .='_blank';
		}
		else if($button_target == "_parent"){
		$link_target_opt .='_parent';
		}
		else if($button_target == "_top"){
		$link_target_opt .='_top';
		}
		else {
		$link_target_opt .='_self';
		}

if (is_numeric($image)) {
    $solonick_image = wp_get_attachment_url($image);
    $solonick_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
}


$html .= '<li><a href="'.$button_url.'" target="'.$link_target_opt.'"><img src="'.$solonick_image.'" alt=""></a></li>';
$html .= '<!-- end client-item -->';

 
echo $html;