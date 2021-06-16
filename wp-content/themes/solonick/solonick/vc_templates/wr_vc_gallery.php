<?php

$args = array(
		'column_size'=>'gallery-item-one',
		'image'=>'',
		'popup_video'=>'',
		
);

extract(shortcode_atts($args, $atts));

$ids        = $atts['image'];
$ids        = explode(',', $ids);

$html = '';
foreach ($ids as $id) {
$image = wp_get_attachment_image_src($id, '');
$image_alt = get_the_title( $id, '' );
$image_cap = wp_get_attachment_caption( $id, '' );
$html .= '<div class="gallery-item  '.esc_attr($column_size).'">';
$html .= '<div class="grid-item-holder">';
$html .= '<img  src="'.esc_url($image[0]).'"    alt="'.esc_attr($image_alt).'">';
if($popup_video != ""){
$html .= '<a href="'.esc_url($popup_video).'" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-play"></i></a>';
} 
else {
$html .= '<a href="'.esc_url($image[0]).'" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-search"></i></a>';
}
$html .= '</div>';
$html .= '<div class="pr-bg"></div>';
$html .= '</div>';
}


 
echo $html;