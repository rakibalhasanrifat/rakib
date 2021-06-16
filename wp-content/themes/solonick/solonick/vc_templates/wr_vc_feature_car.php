<?php

$args = array(
		
		'title'=>'',
		'iconclass'=>'',
		'image'=>'',
		'number'=>'',
		
);

extract(shortcode_atts($args, $atts));
		if(is_numeric($image)) {
            $solonick_image = wp_get_attachment_url( $image );
        }else {
            $solonick_image = $image;
        }

					$html = '';


					$html .= '<div class="serv-carousel-item">';
					$html .= '<div class="serv-wrap fl-wrap">';
					if($iconclass != ""){
					$html .= '<div class="time-line-icon">
                              <i class="'.$iconclass.'"></i>
                              </div>';
					}
					if($title != ""){
					$html .= '<h4>'.$title.'</h4>';
					}
					$html .= '<div class="process-details">';
					if(is_numeric($image)) {
					$html .= '<div class="serv-img">
                              <img src="'.$solonick_image.'" alt=""> 
                              <a href="'.$solonick_image.'" class="serv-zoom   image-popup"><i class="fal fa-search"></i></a>
                              </div>';
							  }
					$html .= do_shortcode($content);
					$html .= '</div>';
					if($number != ""){
					$html .= '<span class="process-numder">'.$number.'.</span>';
					}
					$html .= '</div>';
					$html .= '</div>';
  
    


echo $html;