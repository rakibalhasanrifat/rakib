<?php
$output = $el_class = '';
extract(shortcode_atts(array(
	'el_class' => '',
	'row_type' => 'row',
	'use_as_box' => '',
	'type' => 'full_width',
	'anchor' => '',
	'text_align2' => '',
	'in_content_menu'=>'',
	'content_menu_title' => '',
	'content_menu_icon' => '',
	'video' => '',
	'video_overlay' => '',
	'video_overlay_image' => '',
	'quoverlay' => '',
	'quconlayout' => '',
	'qutitle' => '',
	'qusubtitle' => '',
	'qubackstyle' => '',
	'video_webm' => '',
	'video_mp4' => '',
	'video_ogv' => '',
	'video_image' => '',
	'background_color' => '',
	'section_height' => '',
    'parallax_speed' => '1',
	'background_image' => '',
	'border_color' => '',
	'padding_top' => '',
	'padding_bottom' => '',
	'side_padding' => '',
	'text_align' => 'left',
	'more_button_label' =>'More Facts',
	'less_button_label'=>'Less Facts',
	'button_position'=>'center',
	'color'=>'',
	'hover_color'=>'',
	'content_background_color' => '',
	'css_animation'=>'',
	'transition_delay'=>'',
	'halfshadow'=>'',
	'shadow_wr_color'=>'',
	'scrollid'=>'',
	'enablerow'=>'',
	'solonick_title'=>'',
	'background_icon'=>'',
	'opt_title_sec'=>'',
	'opt_line_sec'=>'',
	'opt_parallax_block_sec'=>'',
	'scroll_id'=>'',
	'solonick_small_title'=>'',
	'solonick_big_title'=>'',
	'solonick_dectiption'=>'',
	'ti_background_image'=>'',
	'solonick_horizonral_title'=>'',
	'opt_effect_sec'=>'',
	'sec_background_image'=>'',
	'solonick_sec_title'=>'',
	'solonick_sec_big_title'=>'',
	'solonick_sec_dectiption'=>'',
	'enablecontainer'=>'',

), $atts));

wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
wp_enqueue_style('js_composer_custom_css');

// enable container

$css_class_enablerowstart =  "";
$css_class_enablerowend =  "";
if ($enablerow == "st2"){
	$css_class_enablerowstart =  "";
	$css_class_enablerowend =  "";
}
else {
$css_class_enablerowstart =  "<div class='row'>";
	$css_class_enablerowend =  "</div>";
}

$css_class_enablecontainerstart =  "";
$css_class_enablecontainerend =  "";
if ($enablecontainer == "st2"){
	$css_class_enablecontainerstart =  "";
	$css_class_enablecontainerend =  "";
}
else {
$css_class_enablecontainerstart =  "<div class='container'>";
	$css_class_enablecontainerend =  "</div>";
}

// back image title
$_image ="";
if($ti_background_image != '' || $ti_background_image != ' ') { 
	$_image = wp_get_attachment_image_src( $ti_background_image, 'full');
}

// sec 3 back image
$_sec_image ="";
if($sec_background_image != '' || $sec_background_image != ' ') { 
	$_sec_image = wp_get_attachment_image_src( $sec_background_image, 'full');
}

//section one effect
$solonick_class_sec_line =  "";
if ($opt_line_sec == "st2"){
	$solonick_class_sec_line =  "<div class='sec-lines'></div>";
}

//section two effect
$solonick_class_sec_effect =  "";
if ($opt_effect_sec == "st2"){
	$solonick_class_sec_effect =  '<div class="half-bg-dec single-half-bg-dec" data-ran="12"></div>
                        <div class="sec-lines"></div>';
}

$solonick_class_sec_block =  "";
$solonick_dot ="'";
if ($opt_parallax_block_sec == "st2"){
	$solonick_class_sec_block =  '<div class="bg-parallax-module" data-position-top="90"  data-position-left="25" data-scrollax="properties: { translateY: '.$solonick_dot.'-250px'.$solonick_dot.' }"></div>
                        <div class="bg-parallax-module" data-position-top="70"  data-position-left="70" data-scrollax="properties: { translateY: '.$solonick_dot.'150px'.$solonick_dot.' }"></div>';
}

//section title for value: sec1

$solonick_class_sec_title =  "";
$solonick_class_sec_title_big_main =  "";
$solonick_class_sec_title_big =  "";
$solonick_class_sec_title_img =  "";
$solonick_dot ="'";
if ($opt_title_sec == "st2"){
	if($solonick_title != ''){
	$solonick_class_sec_title =  '<div class="clear"></div><div class="section-subtitle"  data-scrollax="properties: { translateY: '.$solonick_dot.'-250px'.$solonick_dot.' }" >'.do_shortcode($solonick_title).'  </div><div class="clear"></div>';
	}
}
else if ($opt_title_sec == "st3"){

if($solonick_title != ''){
	$solonick_class_sec_title =  '<div class="section-subtitle right-pos"  data-scrollax="properties: { translateY: '.$solonick_dot.'-250px'.$solonick_dot.' }" >'.do_shortcode($solonick_title).'  </div>';
	}
	
}
else if ($opt_title_sec == "st4"){
$solonick_class_sec_title ="";
}

else {
//transparen title main
if($solonick_title != ''){
$solonick_class_sec_title_big_main =  '<div class="section-subtitle"  data-scrollax="properties: { translateY: '.$solonick_dot.'-250px'.$solonick_dot.' }" >'.do_shortcode($solonick_title).'</div>';
}
//main title
$solonick_class_sec_title_big =  '<div class="container"><div class="section-title rtl-sec-title fl-wrap">
                                <h3>'.do_shortcode($solonick_small_title).'</h3>
                                <h2>'.do_shortcode($solonick_big_title).'</h2>
                                <p>
                                    '.$solonick_dectiption.'  
                                </p>
                            </div></div>';

}

//scrolll ID
$solonick_scroll_id = "";
if($scroll_id != ""){
	$solonick_scroll_id = 'id="'.$scroll_id.'"';
}




if($row_type == 'sec2'){
    $output .='<div class="clear"></div>';
	if ($opt_effect_sec == "st2"){
    $output .='<section class="dark-bg sinsec-dec sinsec-dec2" data-scrollax-parent="true" '.$solonick_scroll_id.'>';
	}
	else if ($opt_effect_sec == "st3"){
	$output .='<section class="dark-bg2 small-padding order-wrap" data-scrollax-parent="true" '.$solonick_scroll_id.'>';
	}
	else {
	$output .='<section class="dark-bg" data-scrollax-parent="true" '.$solonick_scroll_id.'>';
	}
	$output .=''.$css_class_enablecontainerstart.' '.$css_class_enablerowstart.'';
   
}
else if($row_type == 'sec3'){
$output .='<div class="clear"></div>';
$output .='<section class="parallax-section dark-bg sec-half parallax-sec-half-right" data-scrollax-parent="true"  '.$solonick_scroll_id.'>';
$output .='<div class="bg par-elem"  data-bg="'. $_sec_image[0] .'" data-scrollax="properties: { translateY: '.$solonick_dot.'30%'.$solonick_dot.' }"></div>
                        <div class="overlay"></div>';
$output .=''.$css_class_enablecontainerstart.' '.$css_class_enablerowstart.'';
$output .='<div class="section-title">
                                <h2>'.do_shortcode($solonick_sec_big_title).'</h2>
                                <p> '.$solonick_sec_dectiption.'  </p>
                                <div class="horizonral-subtitle"><span>'.do_shortcode($solonick_sec_title).'</span></div>
                            </div>';
$output .='<div class="clear"></div>';
}

else {
	if ($opt_title_sec == "st3"){
	$output .='<section class="parallax-section dark-bg sec-half parallax-sec-half-left" data-scrollax-parent="true"  '.$solonick_scroll_id.'>';
	$output .='<div class="bg par-elem"';
	$output .=' data-bg="';
	$output .= ''. $_image[0] .'';
	$output .='"';
	
	$output .=' data-scrollax="properties: { translateY: '.$solonick_dot.'30%'.$solonick_dot.' }"></div>
                        <div class="overlay"></div>';
	$output .='<div class="container">
                            <div class="section-title">
                                <h2>'.do_shortcode($solonick_big_title).'</h2>
                                <p> '.$solonick_dectiption.'  </p>
                                <div class="horizonral-subtitle"><span>'.$solonick_horizonral_title.'</span></div>
                            </div>
                        </div>';
	$output .='</section>';
	$output .='<div class="clear"></div>';
	$output .='<section data-scrollax-parent="true">';
	}
	else {
	$output .='<div class="clear"></div>';
	$output .='<section data-scrollax-parent="true" '.$solonick_scroll_id.'>';
	}
	$output .=''.$solonick_class_sec_title.'';
	$output .=''.$solonick_class_sec_title_big_main.'';
	$output .='<div class="clear"></div>';
	$output .=''.$solonick_class_sec_title_big.'';
	$output .='<div class="clear"></div>';
	$output .=''.$css_class_enablecontainerstart.'';
	$output .='<div class="clear"></div>';
	$output .=''.$css_class_enablerowstart.'';
	$output .='<div class="clear"></div>';
	

}

if($row_type != 'content_menu'){
	$output .= wpb_js_remove_wpautop($content);
}

if($row_type == 'sec2'){
	$output .= ''.$css_class_enablerowend.' '.$css_class_enablecontainerend.' '.$solonick_class_sec_effect.'</section>'.$this->endBlockComment('row');
}
else if($row_type == 'sec3'){
	$output .= ''.$css_class_enablerowend.' '.$css_class_enablecontainerend.' </section>'.$this->endBlockComment('row');
}

else {
$output .= ''.$css_class_enablerowend.' '.$css_class_enablecontainerend.' '.$solonick_class_sec_block.' '.$solonick_class_sec_line.'</section>'.$this->endBlockComment('row');
}
echo $output;