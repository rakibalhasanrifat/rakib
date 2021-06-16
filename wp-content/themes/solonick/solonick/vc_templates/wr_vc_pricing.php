<?php

$args = array(
    	'class'=>'',
    	'title'=>'',
    	'price'=>'',
    	'period'=>'',
    	'button_text'=>'Buy',
    	'button_link'=>'',
    	'link_target'=>'',
    	'active'=>'',
    	'sign'=>'$',
    	'footertext'=>'',
);

		$html = "";
		

extract(shortcode_atts($args, $atts));
		$link_target_opt ='';
		if($link_target == "_blank"){
		$link_target_opt .='_blank';
		}
		else if($link_target == "_parent"){
		$link_target_opt .='_parent';
		}
		else if($link_target == "_top"){
		$link_target_opt .='_top';
		}
		else {
		$link_target_opt .='_self';
		}
if($active == "st2"){
$html .= '<div class="price-item best-price">';
$html .= '<div class="price-head op2">';
$html .= '<h3>'.$title.'</h3>';
$html .= '</div>';
$html .= '<div class="price-content fl-wrap">';
$html .= '<div class="price-num fl-wrap">';
$html .= '<span class="curen">'.$sign.'</span>';
$html .= '<span class="price-num-item">'.$price.'</span>';
$html .= '<div class="price-num-desc">'.$period.'</div>';
$html .= '</div>';
$html .= '<div class="price-desc fl-wrap">';
$html .= '<ul>';
$html .= do_shortcode($content);
$html .= '</ul>';
if($button_link != ""){
$html .= '<a href="'.$button_link.'" target="'.$link_target_opt.'" class="price-link">'.$button_text.'</a>';
}
if($footertext != ""){
$html .= '<div class="recomm-price">';
$html .= '<i class="fa fa-check"></i><span class="clearfix"></span>';
$html .= ''.$footertext.'';
$html .= '</div>';
}
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
}
else {
$html .= '<div class="price-item">';
$html .= '<div class="price-head op1">';
$html .= '<h3>'.$title.'</h3>';
$html .= '</div>';
$html .= '<div class="price-content fl-wrap">';
$html .= '<div class="price-num fl-wrap">';
$html .= '<span class="curen">'.$sign.'</span>';
$html .= '<span class="price-num-item">'.$price.'</span>';
$html .= '<div class="price-num-desc">'.$period.'</div>';
$html .= '</div>';
$html .= '<div class="price-desc fl-wrap">';
$html .= '<ul>';
$html .= do_shortcode($content);
$html .= '</ul>';
if($button_link != ""){
$html .= '<a href="'.$button_link.'" target="'.$link_target_opt.'" class="price-link">'.$button_text.'</a>';
}
if($footertext != ""){
$html .= '<div class="recomm-price">';
$html .= '<i class="fa fa-check"></i><span class="clearfix"></span>';
$html .= ''.$footertext.'';
$html .= '</div>';
}
$html .= '</div>';
$html .= '</div>';
$html .= '</div>';
}

echo $html;