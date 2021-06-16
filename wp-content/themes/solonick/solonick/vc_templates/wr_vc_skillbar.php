<?php

$args = array(
		
		'title'=>'',
		'data_percent'=>'',
		
);

extract(shortcode_atts($args, $atts));

					$html = '';

					
					$html .= '<div class="clear"></div>';
					$html .= '<div class="custom-skillbar-title"><span>'.$title.'</span></div>
                                            <div class="skill-bar-percent">'.$data_percent.'%</div>
                                            <div class="skillbar-bg" data-percent="'.$data_percent.'%">
                                                <div class="custom-skillbar"></div>
                                            </div>';
  
					


echo $html;