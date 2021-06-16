<?php
/*** Removing shortcodes ***/
vc_remove_element("vc_widget_sidebar");
vc_remove_element("vc_gallery");
vc_remove_element("vc_wp_search");
vc_remove_element("vc_wp_meta");
vc_remove_element("vc_wp_recentcomments");
vc_remove_element("vc_wp_calendar");
vc_remove_element("vc_wp_pages");
vc_remove_element("vc_wp_tagcloud");
vc_remove_element("vc_wp_custommenu");
vc_remove_element("vc_wp_text");
vc_remove_element("vc_wp_posts");
vc_remove_element("vc_wp_links");
vc_remove_element("vc_wp_categories");
vc_remove_element("vc_wp_archives");
vc_remove_element("vc_wp_rss");
vc_remove_element("vc_teaser_grid");
vc_remove_element("vc_button");
vc_remove_element("vc_button2");
vc_remove_element("vc_cta_button");
vc_remove_element("vc_cta_button2");
vc_remove_element("vc_message");
vc_remove_element("vc_tour");
vc_remove_element("vc_progress_bar");
vc_remove_element("vc_pie");
vc_remove_element("vc_posts_slider");
vc_remove_element("vc_toggle");
vc_remove_element("vc_images_carousel");
vc_remove_element("vc_posts_grid");
vc_remove_element("vc_carousel");

/*** Remove unused parameters ***/
if (function_exists('vc_remove_param')) {
	vc_remove_param('vc_single_image', 'css_animation');
	vc_remove_param('vc_column_text', 'css_animation');
	vc_remove_param('vc_row', 'video_bg');
	vc_remove_param('vc_row', 'video_bg_url');
	vc_remove_param('vc_row', 'video_bg_parallax');
	vc_remove_param('vc_row', 'full_height');
	vc_remove_param('vc_row', 'content_placement');
	vc_remove_param('vc_row', 'full_width');
	vc_remove_param('vc_row', 'bg_image');
	vc_remove_param('vc_row', 'bg_color');
	vc_remove_param('vc_row', 'font_color');
	vc_remove_param('vc_row', 'margin_bottom');
	vc_remove_param('vc_row', 'bg_image_repeat');
	vc_remove_param('vc_tabs', 'interval');
	vc_remove_param('vc_separator', 'style');
	vc_remove_param('vc_separator', 'color');
	vc_remove_param('vc_separator', 'accent_color');
	vc_remove_param('vc_separator', 'el_width');
	vc_remove_param('vc_text_separator', 'style');
	vc_remove_param('vc_text_separator', 'color');
	vc_remove_param('vc_text_separator', 'accent_color');
	vc_remove_param('vc_text_separator', 'el_width');
	vc_remove_param('vc_row', 'gap');
    vc_remove_param('vc_row', 'columns_placement');
    vc_remove_param('vc_row', 'equal_height');
    vc_remove_param('vc_row_inner', 'gap');
    vc_remove_param('vc_row_inner', 'content_placement');
    vc_remove_param('vc_row_inner', 'equal_height');
    vc_remove_param('vc_hoverbox', 'use_custom_fonts_primary_title');
    vc_remove_param('vc_hoverbox', 'use_custom_fonts_hover_title');
    vc_remove_param('vc_hoverbox', 'hover_add_button');
	vc_remove_param('vc_row', 'parallax');
    vc_remove_param('vc_row', 'parallax_image');
	vc_remove_param('vc_row', 'parallax_speed_bg');
	vc_remove_param('vc_row', 'parallax_speed_video');
	vc_remove_param('vc_row', 'disable_element');
	vc_remove_param('vc_row', 'el_id');
	vc_remove_param('vc_row', 'el_class');
	//vc_remove_param('vc_row', 'css_animation');
}


/*** Row ***/

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"show_settings_on_create"=>true,
	"heading" => "Row Type",
	"param_name" => "row_type",
	"value" => array(
		
		"Section White" => "sec1",
		"Section Black" => "sec2",
		"Section Image" => "sec3",
		
		
		
	)
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Container",
	"param_name" => "enablecontainer",
	"value" => array(
		"Enable" => "st1",
		"Disable" => "st2",	
			
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1', 'sec2', 'sec3'))
));


vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Row",
	"param_name" => "enablerow",
	"value" => array(
		"Enable" => "st1",
		"Disable" => "st2",	
			
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1', 'sec2', 'sec3'))
));



vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Scroll ID",
	"param_name" => "scroll_id",
	"value" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('sec1', 'sec2', 'sec3'))
));

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Effect",
	"param_name" => "opt_effect_sec",
	"value" => array(
		"Disable" => "st1",
		"Enable" => "st2",
		"Half Block" => "st3",
		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec2'))
));


vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Line",
	"param_name" => "opt_line_sec",
	"value" => array(
		"Disable" => "st1",
		"Enable" => "st2",
		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
));


vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Parallax Block",
	"param_name" => "opt_parallax_block_sec",
	"value" => array(
		"Disable" => "st1",
		"Enable" => "st2",
		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
));
//opt for sec3

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Section Background image",
	"value" => "",
	"param_name" => "sec_background_image",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('sec3'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Transparent Title",
	"value" => "",
	"param_name" => "solonick_sec_title",
	"description" => "e.x: For marking text:  About [span] Us[/span]",
	"dependency" => Array('element' => "row_type", 'value' => array('sec3'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Big Title",
	"value" => "",
	"param_name" => "solonick_sec_big_title",
	"description" => "e.x: For marking text:  About [span] Us[/span] <br> For line break: [br]",
	"dependency" => Array('element' => "row_type", 'value' => array('sec3'))
));

vc_add_param("vc_row", array(
	"type" => "textarea",
	"class" => "",
	"heading" => "Description",
	"value" => "",
	"param_name" => "solonick_sec_dectiption",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('sec3'))
));
//end opt for sec3

vc_add_param("vc_row", array(
	"type" => "dropdown",
	"class" => "",
	"heading" => "Title Style",
	"param_name" => "opt_title_sec",
	"value" => array(
		"Default" => "st1",
		"Transparent" => "st2",
		"Image Style" => "st3",	
		"Hidden" => "st4",	
		
	),
	"dependency" => Array('element' => "row_type", 'value' => array('sec1'))
));

vc_add_param("vc_row", array(
	"type" => "attach_image",
	"class" => "",
	"heading" => "Title Section Background image",
	"value" => "",
	"param_name" => "ti_background_image",
	"description" => "",
	"dependency" => Array('element' => "opt_title_sec", 'value' => array('st3'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Transparent Title",
	"value" => "",
	"param_name" => "solonick_title",
	"description" => "e.x: For marking text:  About [span] Us[/span]",
	"dependency" => Array('element' => "opt_title_sec", 'value' => array('st1', 'st2', 'st3'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Small Title",
	"value" => "",
	"param_name" => "solonick_small_title",
	"description" => "e.x: For marking text:  About [span] Us[/span]",
	"dependency" => Array('element' => "opt_title_sec", 'value' => array('st1'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Horizonral Title",
	"value" => "",
	"param_name" => "solonick_horizonral_title",
	"description" => "",
	"dependency" => Array('element' => "opt_title_sec", 'value' => array('st3'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Big Title",
	"value" => "",
	"param_name" => "solonick_big_title",
	"description" => "e.x: For marking text:  About [span] Us[/span] <br> For line break: [br]",
	"dependency" => Array('element' => "opt_title_sec", 'value' => array('st1', 'st3'))
));

vc_add_param("vc_row", array(
	"type" => "textarea",
	"class" => "",
	"heading" => "Description",
	"value" => "",
	"param_name" => "solonick_dectiption",
	"description" => "",
	"dependency" => Array('element' => "opt_title_sec", 'value' => array('st1', 'st3'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section Title Bold",
	"value" => "",
	"param_name" => "solonick_titlebold",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('qubackcolor'))
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Section Sub Title",
	"value" => "",
	"param_name" => "solonick_subtitle",
	"description" => "",
	"dependency" => Array('element' => "row_type", 'value' => array('qubackcolor'))
));





/***************** Solonick Shortcodes *********************/



// Title
vc_map( array(
		"name" => "Solonick Title",
		"base" => "solonick_title",
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-ui-custom_heading",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Sub Title",
				"param_name" => "subtitle",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Serial Number",
				"param_name" => "number",
				"value" => "",
				"description" => "Optional. ex: 01",
				
			),
			
			
			
			
			
		)
) );


// image
vc_map( array(
		"name" => "Solonick Image",
		"base" => "solonick_image",
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-single-image",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "image",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Fancy Style",
				"param_name" => "fancystyle",
				"value" => array(
					"Disable" => "st1",
					"Enable" => "st2",	
					
				),
				"description" => "",
				
			),
			
				
		)
) );

// image gallery
class WPBakeryShortCode_WR_VC_Gallerys  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Solonick Image Gallery", "solonick",
        "base" => "wr_vc_gallerys",
        "as_parent" => array('only' => 'wr_vc_gallery'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "solonick-icon",
        "show_settings_on_create" => true,
        "params" => array(
		
		array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => ""
			),
			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Gallery extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Gallery Item", "solonick",
        "base" => "wr_vc_gallery",
        "content_element" => true,
		"icon" => "solonick-icon",
        "as_child" => array('only' => 'wr_vc_gallerys'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
				
			
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Column Size",
				"param_name" => "column_size",
				"value" => array(
					"Default" => "gallery-item-one",
					"Large" => "gallery-item-second",
				),
				"description" => "",
			),
		
			array(
				"type" => "attach_images",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Images",
				"param_name" => "image",
				"description" => "Upload only 1 image if you added a popup video URL.",
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Popup Video",
				"param_name" => "popup_video",
				"value" => "",
				"description" => "Use Youtube/ Vimeo video URL.<br> E.X: https://vimeo.com/322246026 <br> Optional. ",
			),
							
            
        )
) );

// wr textblock
class WPBakeryShortCode_WR_VC_Textblock  extends WPBakeryShortCode {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Solonick Text Block", "solonick",
        "base" => "wr_vc_textblock",
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-layer-shape-text",
        
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Small Title",
				"param_name" => "small_title",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Big Title",
				"param_name" => "big_title",
				"value" => "",
				"description" => "e.x: For marking text:  About [span] Us[/span] <br> For line break: [br]",
				
			),
			
			
			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"description" => "",
				
			),
            
        ),
        
) );


// Solonick Feature 1
vc_map( array(
		"name" => "Solonick Feature 1",
		"base" => "solonick_feature1",
		"category" => 'bY Solonick',
		"icon" => "",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "iconclass",
				"description" => "e.x: fal fa-utensils-alt <br> <a href='https://fontawesome.com/cheatsheet/pro/' target='_blank'>Fontawesome Solid Icon Class</a>",
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"description" => "",
				
			),
			
				
		)
) );

// Solonick Feature 2
vc_map( array(
		"name" => "Solonick Feature 2",
		"base" => "solonick_feature2",
		"category" => 'bY Solonick',
		"icon" => "",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "iconclass",
				"description" => "e.x: fal fa-utensils-alt <br> <a href='https://fontawesome.com/cheatsheet/pro/' target='_blank'>Fontawesome Solid Icon Class</a>",
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Serial Number",
				"param_name" => "number",
				"value" => "",
				"description" => "ex: 01",
				
			),
			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"description" => "",
				
			),
			
				
		)
) );



// wr feature car
class WPBakeryShortCode_WR_VC_Feature_cars  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Feature Carousel", "solonick",
        "base" => "wr_vc_feature_cars",
        "as_parent" => array('only' => 'wr_vc_feature_car'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-vc-round-chart",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => "",
				"description" => "Optional.",
				
				
			),
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Feature_car extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Feature Item", "solonick",
        "base" => "wr_vc_feature_car",
        "content_element" => true,
		"icon" => "icon-wpb-vc-round-chart",
        "as_child" => array('only' => 'wr_vc_feature_cars'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "iconclass",
				"description" => "e.x: fal fa-utensils-alt <br> <a href='https://fontawesome.com/cheatsheet/pro/' target='_blank'>Fontawesome Solid Icon Class</a>",
			),
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Image",
				"param_name" => "image",
				"description" => "Image Size: 100px x 100px",
				
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Serial Number",
				"param_name" => "number",
				"value" => "",
				"description" => "ex: 01",
				
			),
			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"description" => "",
				
			),
			
			
							
            
        )
) );




// button
vc_map( array(
		"name" => "Solonick Button",
		"base" => "solonick_button",
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-ui-button",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
			
			
				
		)
) );


// Number Counter
vc_map( array(
		"name" => "Solonick Number Counter",
		"base" => "solonick_number_counter",
		"category" => 'bY Solonick',
		"icon" => "solonick-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "datatitle",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Counter Number",
				"param_name" => "datanumber",
				"value" => "",
				"description" => "",
				
			),
			
			
				
		)
) );




// team member
vc_map( array(
		"name" => "Solonick Team",
		"base" => "solonick_team_member_list",
		"category" => 'bY Solonick',
		"icon" => "solonick-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => "Use this field if you need.",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Count', 'solonick'),
				"param_name" => "postcount",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'solonick'),
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'solonick'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'solonick'),
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Details Text', 'solonick'),
				"param_name" => "details",
				"value" => "",
				"description" => esc_attr__('Translate Option.', 'solonick'),
			),
			
			
				
		)
) );



// video
vc_map( array(
		"name" => "Solonick Video",
		"base" => "solonick_videos",
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-film-youtube",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Background Image",
				"param_name" => "image",
				"description" => "",
				
				
			),
			
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Vimeo Video URL",
				"param_name" => "vimeovideo",
				"value" => "",
				"description" => "e.x: https://vimeo.com/110234211",
				
				
			),
				
		)
) );



// timeline
vc_map( array(
		"name" => "Solonick Timeline",
		"base" => "solonick_timeline",
		"category" => 'bY Solonick',
		"icon" => "solonick-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => "Use this field if you need.",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Count', 'solonick'),
				"param_name" => "postcount",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'solonick'),
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'solonick'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'solonick'),
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
			
			
				
		)
) );



// portfolio
vc_map( array(
		"name" => "Solonick Post Type Carousel",
		"base" => "solonick_portfolio",
		"category" => 'bY Solonick',
		"icon" => "solonick-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Post Type",
				"param_name" => "sl_post_type",
				"value" => array(
					"Portfolio" => "st1",
					"Blog" => "st2",
					"Music" => "st3",	
					"Team" => "st4"	
				),
				"description" => "",
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Slides To Show",
				"param_name" => "slidestoshow",
				"value" => "",
				"description" => "Default: 4",
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Details Page",
				"param_name" => "sl_post_details_type",
				"value" => array(
					"Enable" => "st1",
					"Disable" => "st2",
					
				),
				"description" => "Enable/ Disble post details page.",
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Category Name",
				"param_name" => "categoryname",
				"value" => "",
				"description" => "Use this field if you need.",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Count', 'solonick'),
				"param_name" => "postcount",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'solonick'),
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_attr__('Post Offset', 'solonick'),
				"param_name" => "postoffset",
				"value" => "",
				"description" => esc_attr__('Use this field if you need.', 'solonick'),
			),
			
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "textarea",
				"holder" => "div",
				"class" => "",
				"heading" => "Sub Title",
				"param_name" => "subtitle",
				"value" => "",
				"description" => "Optional",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
			
			
				
		)
) );


// call to
vc_map( array(
		"name" => "Solonick Call To Action 1",
		"base" => "solonick_call_to_action1",
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-call-to-action",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
				
		)
) );


// call to
vc_map( array(
		"name" => "Solonick Call To Action 2",
		"base" => "solonick_call_to_action2",
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-call-to-action",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
				
		)
) );




// wr piechart
class WPBakeryShortCode_WR_VC_Piecharts  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Solonick Piechart", "solonick",
        "base" => "wr_vc_piecharts",
        "as_parent" => array('only' => 'wr_vc_piechart'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-vc-round-chart",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "colorpicker",
				"class" => "",
				"heading" => "Background Color",
				"param_name" => "data_color",
				"value" => "",
				"description" => "Optional",
				
				
			),
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Piechart extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Piechart Item", "solonick",
        "base" => "wr_vc_piechart",
        "content_element" => true,
		"icon" => "icon-wpb-vc-round-chart",
        "as_child" => array('only' => 'wr_vc_piecharts'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Data Percent",
				"param_name" => "data_percent",
				"value" => "",
				"description" => "e.x: 80",
				
			),
			
			
							
            
        )
) );




// wr skillbar
class WPBakeryShortCode_WR_VC_Skillbars  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Solonick Skill Bar", "solonick",
        "base" => "wr_vc_skillbars",
        "as_parent" => array('only' => 'wr_vc_skillbar'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-vc-line-chart",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => ""
			),	
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Skillbar extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Skill Bar Item", "solonick",
        "base" => "wr_vc_skillbar",
        "content_element" => true,
		"icon" => "icon-wpb-vc-line-chart",
        "as_child" => array('only' => 'wr_vc_skillbars'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
				
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Data Percent",
				"param_name" => "data_percent",
				"value" => "",
				"description" => "e.x: 80",
				
			),
			
			
							
            
        )
) );



// wr testimonials
class WPBakeryShortCode_WR_VC_Testimonials  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Testimonial", "solonick",
        "base" => "wr_vc_testimonials",
        "as_parent" => array('only' => 'wr_vc_testimonial'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "solonick-icon",
        "show_settings_on_create" => true,
        "params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => ""
			),

			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Slider Autoplay",
				"param_name" => "autoplay",
				"value" => array(
					"Disable" => "false",
					"Enable" => "true",
					
				),
				"description" => "Optional.",
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Slider Speed",
				"param_name" => "slider_speed",
				"value" => "",
				"description" => "Default: 1400"
			),			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Testimonial extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Testimonial Item", "solonick",
        "base" => "wr_vc_testimonial",
        "content_element" => true,
		"icon" => "solonick-icon",
        "as_child" => array('only' => 'wr_vc_testimonials'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
				
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Client's Image",
				"param_name" => "image",
				"description" => ""
			),
			
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Client Name",
				"param_name" => "clientname",
				"value" => "",
				"description" => "For marking text: Milka Antony  - [span]Happy Client[/span]",
			),
			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Text",
				"param_name" => "content",
				"value" => ""
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
							
            
        )
) );


// client logo
class WPBakeryShortCode_WR_VC_Clients  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Client Logo", "solonick",
        "base" => "wr_vc_clients",
        "as_parent" => array('only' => 'wr_vc_client'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "solonick-icon",
        "show_settings_on_create" => true,
        "params" => array(
		
		array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => ""
			),
			
            
        ),
        "js_view" => 'VcColumnView'
) );

class WPBakeryShortCode_WR_VC_Client extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Client Logo Item", "solonick",
        "base" => "wr_vc_client",
        "content_element" => true,
		"icon" => "solonick-icon",
        "as_child" => array('only' => 'wr_vc_clients'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
				
			
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Uplod Client Logo",
				"param_name" => "image",
				"description" => ""
			),
			
			
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Custom URL",
				"param_name" => "button_url",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "button_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),
							
            
        )
) );

// Pricing Block
class WPBakeryShortCode_WR_VC_Pricingmain  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Price Table", "solonick",
        "base" => "wr_vc_pricingmain",
        "as_parent" => array('only' => 'wr_vc_pricing'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "primax-icon",
        "show_settings_on_create" => true,
        "params" => array(
						
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Class",
				"param_name" => "class",
				"value" => ""
			),   
									
            
        ),
        "js_view" => 'VcColumnView'
) );



// Pricing Block
class WPBakeryShortCode_WR_VC_Pricing  extends WPBakeryShortCodesContainer {}
//Register "container" content element. It will hold all your inner (child) content elements
vc_map( array(
        "name" => "Price Table Item", "solonick",
        "base" => "wr_vc_pricing",
        "as_parent" => array('only' => 'wr_vc_pricing_list'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
		"as_child" => array('only' => 'wr_vc_pricingmain'),
        "content_element" => true,
		"category" => 'bY Solonick',
		"icon" => "primax-icon",
        "show_settings_on_create" => true,
        "params" => array(
						
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => ""
			), 
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Currency Sign",
				"param_name" => "sign",
				"value" => "",
				"description" => "e.x: Per $. Default value : $",
			),			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Amount",
				"param_name" => "price",
				"value" => "",
			),		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Time Period",
				"param_name" => "period",
				"value" => "",
				"description" => "e.x: Per month",
			),		
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Text",
				"param_name" => "button_text",
				"value" => "",
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Button Link URL",
				"param_name" => "button_link",
				"value" => "",
			),			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Link Target",
				"param_name" => "link_target",
				"value" => array(
					"Self" => "_self",
					"Blank" => "_blank",
					"Parent" => "_parent",	
					"Top" => "_top"	
				),
				"description" => "",
			),				
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Recommended",
				"param_name" => "active",
				"value" => array(
					"Disable" => "st1",
					"Enable" => "st2",
				),
				"description" => "",
			),

			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Footer Text",
				"param_name" => "footertext",
				"value" => "",
				"description" => "e.x: Recommended",
				"dependency" => Array('element' => "active", 'value' => array('st2'))
			),
            
        ),
        "js_view" => 'VcColumnView'
) );



class WPBakeryShortCode_WR_VC_Pricing_List extends WPBakeryShortCode {}
vc_map( array(
        "name" => "Pricing List Item", "solonick",
        "base" => "wr_vc_pricing_list",
        "content_element" => true,
		"icon" => "primax-icon",
        "as_child" => array('only' => 'wr_vc_pricing'), // Use only|except attributes to limit parent (separate multiple values with comma)
        "params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Pricing Table List",
				"param_name" => "content",
				"value" => ""
			),						
            
        )
) );


// contact info
vc_map( array(
		"name" => "Solonick Contact Info",
		"base" => "solonick_contact_info",
		"category" => 'bY Solonick',
		"icon" => "solonick-icon",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Icon Class",
				"param_name" => "iconclass",
				"value" => "",
				"description" => "e.x: fal fa-utensils-alt <br> <a href='https://fontawesome.com/cheatsheet/pro/' target='_blank'>Fontawesome Solid Icon Class</a>",
				
			),
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Title",
				"param_name" => "title",
				"value" => "",
				"description" => "",
				
			),
			
			array(
				"type" => "textarea_html",
				"holder" => "div",
				"class" => "",
				"heading" => "Content",
				"param_name" => "content",
				"value" => "",
				"description" => "",
				
			),
			
			
				
		)
) );



// Google Map
vc_map( array(
		"name" => "Solonick Google Map",
		"base" => "solonick_map",
		"category" => 'bY Solonick',
		"icon" => "icon-wpb-map-pin",
		"allowed_container_element" => 'vc_row',
		"params" => array(
			
			
			
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Google Map Location",
				"param_name" => "latitude",
				"value" => "",
				"description" => "E.X: 40.714 , -74.005",
				
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => "Address",
				"param_name" => "address",
				"value" => "",
				"description" => "E.X: 27th Brooklyn New York, NY 10065",
				
			),
			
			array(
				"type" => "attach_image",
				"holder" => "div",
				"class" => "",
				"heading" => "Upload Location Marker",
				"param_name" => "image",
				"description" => "",
				
				
			),
			
			array(
				"type" => "dropdown",
				"holder" => "div",
				"class" => "",
				"heading" => "Map Color Scheme",
				"param_name" => "map_url",
				"value" => array(
					"Dark" => "st1",
					"Light" => "st2",
					"Gary" => "st3",	
				),
				"description" => "",
				//"dependency" => Array('element' => "enablemap", 'value' => array('st1'))
			),
		)
) );



?>