<?php

$args = array(
		'iconname'=>'',
		'title'=>'',
		'image'=>'',
		'companyname'=>'',
		'clientname'=>'',
		'button_text'=>'Via Twitter',
		'button_url'=>'',
		'button_target'=>'',
		
);

extract(shortcode_atts($args, $atts));
if(is_numeric($image)) {
            $solonick_image = wp_get_attachment_url( $image );
        }else {
            $solonick_image = $image;
        }
$html = '';
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

    $html .= '<div class="slick-item">';
    $html .= '<div class="text-carousel-item">';
	if(is_numeric($image)) {
    $html .= '<div class="popup-avatar"><img src="'.$solonick_image.'" alt="'.do_shortcode($clientname).'"></div>';
	}
    $html .= '<div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>';
    $html .= '<div class="review-owner fl-wrap">'.do_shortcode($clientname).'</div>';
    $html .= '<p>'.$content.'</p>';
	if($button_url != ""){
    $html .= '<a href="'.$button_url.'" target="'.$link_target_opt.'" class="testim-link">'.$button_text.'</a>';
	}
    $html .= '</div>';
    $html .= '</div>';
  
    


echo $html;