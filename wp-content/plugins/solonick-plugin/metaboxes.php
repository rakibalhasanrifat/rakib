<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'rnr_';

global $meta_boxes;

$meta_boxes = array();

global $smof_data;


/* ----------------------------------------------------- */
// Page Sections Metaboxes
/* ----------------------------------------------------- */


/* ----------------------------------------------------- */
// Revolution Slider
/* ----------------------------------------------------- */

$revolutionslider = array();
$revolutionslider[0] = 'No Slider';

if(class_exists('RevSlider')){
    $slider = new RevSlider();
	$arrSliders = $slider->getArrSliders();
	foreach($arrSliders as $revSlider) { 
		$revolutionslider[$revSlider->getAlias()] = $revSlider->getTitle();
	}
}

/* Page Section Background Settings */

$grid_array = array('2 Columns','3 Columns','4 Columns');

$pagebg_type_array = array(
	'image' => 'Image',
	'gradient' => 'Gradient',
	'color' => 'Color'
);






/* ----------------------------------------------------- */
/* page Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'page_type',
	'title' => 'Default Page Function',
	// Show this meta box for posts matched below conditions
    'hide'   => array(
    // List of page templates (used for page only). Array. Optional.
    'template'    => array( 'one-page.php', 'portfolio.php', 'music.php', 'service.php', 'blog.php', 'coming-soon.php'),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		// SELECT BOX
		array(
			'name'     => __( 'Select', 'solonick' ),
			'id'   => $prefix . 'wr-pagetype',
			'desc'  => __( '', 'solonick' ),
			'type'     => 'image_select',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => __( get_template_directory_uri().'/includes/metaboxes/img/wr-page-default.png', 'solonick' ),
				'st2' => __( get_template_directory_uri().'/includes/metaboxes/img/page-firenze.png', 'solonick' ),
				'st3' => __( get_template_directory_uri().'/includes/metaboxes/img/wr-page-left.png', 'solonick' ),
				'st4' => __( get_template_directory_uri().'/includes/metaboxes/img/wr-page-right.png', 'solonick' ),
				
				
				
				
			),
			'desc'		=> '',
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		
	)
);


/* ----------------------------------------------------- */
/* page Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'blog_page_type',
	'title' => 'Blog Page Template Function',
	// Show this meta box for posts matched below conditions
        'show'   => array(
    // List of page templates (used for page only). Array. Optional.
    'template'    => array( 'blog.php'),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Blog Layout', 'dogmawp' ),
			'id'   => $prefix . 'wrblog-pagetype',
			'desc'  => __( 'Working only Blog Page Template', 'dogmawp' ),
			'type'     => 'image_select',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				
				'st1' => esc_attr__( get_template_directory_uri().'/includes/metaboxes/img/wr-page-right.png', 'dogmawp' ),
				'st2' => esc_attr__( get_template_directory_uri().'/includes/metaboxes/img/wr-page-left.png', 'dogmawp' ),
				
				
			),
			'desc'  => esc_attr__( '', 'dogmawp' ),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st3',
			'placeholder' => __( 'Select an Option', 'dogmawp' ),
		),
		
		array(
				'name'       => esc_attr__( 'Number Of Post Show', 'blps' ),
				'id'         => $prefix . 'blog-post-show',
				'desc'		=> '',
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => __( '', 'blps' ),
				'suffix'     => __( ' Posts', 'blps' ),
				'js_options' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
			),	

			array(
			'name'		=> 'Include Category',
			'id'		=> $prefix . 'blog-post-cat',
			'desc'		=> 'Enter category name ex: web design, web development (Optional).',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

			
	)
);


/* ----------------------------------------------------- */
/* page Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'page_header_type',
	'title' => 'Page Header',
	// Show this meta box for posts matched below conditions
        'hide'   => array(
    // List of page templates (used for page only). Array. Optional.
    'template'    => array( 'portfolio.php', 'one-page.php', 'service.php', 'coming-soon.php'),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_temp_page_header_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'so_temp_page_header_hor_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'so_temp_page_header_short_title',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		
		
		
		
	)
);



/* ----------------------------------------------------- */
/* portfolio Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'scroll_page_intro_opt',
	'title' => 'Scrolling Page Template Options.',
	// Show this meta box for posts matched below conditions
    'show'   => array(
    // List of page templates (used for page only). Array. Optional.
    'template'    => array( 'one-page.php'),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
	// SELECT BOX
		array(
			'name'     => esc_attr__( 'Intro Style', 'solonick' ),
			'id'   => $prefix . 'wr_intro_sc_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st0' => esc_attr__( 'Select an Option', 'solonick' ),
				'st1' => esc_attr__( 'Half Slider', 'solonick' ),
				'st2' => esc_attr__( 'Half Image', 'solonick' ),
				'st3' => esc_attr__( 'Impulse image', 'solonick' ),
				'st4' => esc_attr__( 'Fullscreen Image', 'solonick' ),
				'st5' => esc_attr__( 'Fullscreen Slider', 'solonick' ),
				'st6' => esc_attr__( 'Slideshow', 'solonick' ),
				'st7' => esc_attr__( 'Fullscreen Carousel', 'solonick' ),
				'st8' => esc_attr__( 'Mp4 Video', 'solonick' ),
				'st9' => esc_attr__( 'Vimeo Video', 'solonick' ),
				'st10' => esc_attr__( 'Youtube Video', 'solonick' ),
				'st11' => esc_attr__( 'Revolution Slider', 'solonick' ),
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st0',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		
		
	
		
	)
);

/* ----------------------------------------------------- */
/* page Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_rev_slider',
	'title' => 'Revolution Slider Option',
	'show'   => array(
    // by metabox select
    'input_value'   => array(
                '#rnr_wr_intro_sc_opt'              => 'st11',
            ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'		=> 'Revolution Slider Shortcode',
			'id'		=> $prefix . 'be_rev_short',
			'clone'		=> false,
			'type' => 'text',
			'desc'		=> '',
		),
		
	)
);

/* ----------------------------------------------------- */
/* intro Slider
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_carousel_nastik',
	'title' => 'Intro Style Fullscreen Carousel Options.',
	'show'   => array(
    // by metabox select
    'input_value'   => array(
    '#rnr_wr_intro_sc_opt'              => 'st7',
     ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
	
		// carousel type
		array(
		'name'     => esc_attr__( 'Carousel Type', 'theside' ),
		'id'   => $prefix . 'ns_home_intro_car_new_opt',
		'desc'  => esc_attr__( '', 'theside' ),
		'type'     => 'select_advanced',
		// Array of 'value' => 'Label' pairs for select box
		'options'  => array(
			'st0' => esc_attr__( 'Select an Option', 'theside' ),
			'st1' => esc_attr__( 'Portfolio Post', 'theside' ),
			'st2' => esc_attr__( 'Custom Carousel', 'theside' ),
		),
		// Select multiple values, optional. Default is false.
		'multiple'    => false,
		'std'         => 'st0',
		'placeholder' => esc_attr__( 'Select an Option', 'theside' ),
		),
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Slider Autoplay', 'popuga' ),
			'id'   => $prefix . 'so_carousel_autoplay',
			'desc'  => esc_attr__( '', 'popuga' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'false' => esc_attr__( 'Disable', 'popuga' ),
				'true' => esc_attr__( 'Enable', 'popuga' ),
			
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'false',
			'placeholder' => esc_attr__( 'Select an Option', 'popuga' ),
		),
		
		array(
			'name'		=> 'Slider Autoplay Speed',
			'id'		=> $prefix . 'so_carousel_autoplay_speed',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Default: 4000',
			'hidden' => array( 'rnr_so_carousel_autoplay', '!=', 'true' )
		),
	
		array(
			'name'		=> 'Slider Speed',
			'id'		=> $prefix . 'so_carousel_speed',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Default: 4000',
		),
		
		
		
	)
);
/* ----------------------------------------------------- */
/* Intro Fullscreen Carousel
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_full_car_opt',
	'title' => 'Portfolio Carousel Options.',
	// Show this meta box for posts matched below conditions
    'show'   => array(
    // by metabox select
    'input_value'   => array(
                '#rnr_ns_home_intro_car_new_opt' => 'st1',
     ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
					array(
						'name'		=> 'Include Portfolio Category',
						'id'		=> $prefix . 'so_intro_car_po',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Enter category name ex: web design, web development (Optional).',
					),
					
					array(
					'name'       => esc_attr__( 'Number Of Post Show', 'blps' ),
					'id'         => $prefix . 'so_intro_car_po_co',
					'desc'		=> '',
					'type'       => 'slider',
					// Text labels displayed before and after value
					'prefix'     => __( '', 'blps' ),
					'suffix'     => __( ' Posts', 'blps' ),
					'js_options' => array(
						'min'  => 1,
						'max'  => 100,
						'step' => 1,
					),
				),
		
		
		
	)
);

/* ----------------------------------------------------- */
/* Intro Fullscreen Carousel
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_full_car_content2_opt',
	'title' => 'Custom Carousel Options',
	// Show this meta box for posts matched below conditions
    'show'   => array(
    // by metabox select
    'input_value'   => array(
                '#rnr_ns_home_intro_car_new_opt' => 'st2',
            ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
					
					
					array(
				'id'		=> $prefix . 'md_po_car_cus_gallery',
				'name'        => 'Carousel Item',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Carousel Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
					'name'		=> 'Carousel Image',
					'id'		=> $prefix . 'md_po_car_cus_gallery_img',
					'clone'		=> false,
					'type'		=> 'image_advanced',
					'max_file_uploads' => '1',
					'desc'		=> '',
					),
					
					
					array(
						'name'		=> 'Title',
						'id'		=> $prefix . 'md_car_cus_gallery_intro_title_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> '',
					),
					
					array(
						'name'		=> 'Sub Title',
						'id'		=> $prefix . 'md_car_cus_gallery_intro_sub_title_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
					
					
					array(
						'name'		=> 'Custom URL',
						'id'		=> $prefix . 'md_car_cus_intro_buttonurl_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
					
					array(
						'name'		=> 'Button Text',
						'id'		=> $prefix . 'md_car_cus_intro_buttontext_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
				
				),
			),
			
	)
);

/* ----------------------------------------------------- */
/* intro half and full slider
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_half_slider_opt',
	'title' => 'Half Slider Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt' => 'st1',
            ),
	
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Slider Autoplay', 'popuga' ),
			'id'   => $prefix . 'so_half_slider_autoplay',
			'desc'  => esc_attr__( '', 'popuga' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'false' => esc_attr__( 'Disable', 'popuga' ),
				'true' => esc_attr__( 'Enable', 'popuga' ),
			
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'false',
			'placeholder' => esc_attr__( 'Select an Option', 'popuga' ),
		),
		
		array(
			'name'		=> 'Slider Autoplay Speed',
			'id'		=> $prefix . 'so_half_slider_autoplay_speed',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Default: 4000',
			'hidden' => array( 'rnr_so_half_slider_autoplay', '!=', 'true' )
		),
	
		array(
			'name'		=> 'Slider Speed',
			'id'		=> $prefix . 'so_half_slider_speed',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Default: 4000',
		),
		
		array(
				'id'		=> $prefix . 'md_po_gallery',
				'name'        => 'Slider Item',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
					'name'		=> 'Slide Image',
					'id'		=> $prefix . 'md_po_gallery_img',
					'clone'		=> false,
					'type'		=> 'image_advanced',
					'max_file_uploads' => '1',
					'desc'		=> '',
					),
					
					
					array(
						'name'		=> 'Title',
						'id'		=> $prefix . 'md_gallery_intro_title_opt',
						'clone'		=> false,
						'type'		=> 'textarea',
						'std'		=> '',
						'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
					
					array(
						'name'		=> 'Sub Title',
						'id'		=> $prefix . 'md_gallery_intro_sub_title_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
					
					array(
						'name'		=> 'Button Text',
						'id'		=> $prefix . 'md_intro_buttontxt_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
					
					array(
						'name'		=> 'Button URL',
						'id'		=> $prefix . 'md_intro_buttonurl_opt',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
				
				),
			),
			
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_top_dis', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis', '!=', 'st2' )
						
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis', '!=', 'st2' )
					),
		
	
		
	)
);


/* ----------------------------------------------------- */
/* intro full slider
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_full_slider_opt',
	'title' => 'Fullscreen Slider Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt' => 'st5',
            ),
	
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Slider Autoplay', 'popuga' ),
			'id'   => $prefix . 'so_full_slider_autoplay',
			'desc'  => esc_attr__( '', 'popuga' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'false' => esc_attr__( 'Disable', 'popuga' ),
				'true' => esc_attr__( 'Enable', 'popuga' ),
			
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'false',
			'placeholder' => esc_attr__( 'Select an Option', 'popuga' ),
		),
		
		array(
			'name'		=> 'Slider Autoplay Speed',
			'id'		=> $prefix . 'so_full_slider_autoplay_speed',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Default: 4000',
			'hidden' => array( 'rnr_so_full_slider_autoplay', '!=', 'true' )
		),
	
		array(
			'name'		=> 'Slider Speed',
			'id'		=> $prefix . 'so_full_slider_speed',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Default: 1000',
		),
		
		array(
				'id'		=> $prefix . 'md_po_gallery_full_slider',
				'name'        => 'Slider Item',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
					'name'		=> 'Slide Image',
					'id'		=> $prefix . 'md_po_gallery_img_full_slider',
					'clone'		=> false,
					'type'		=> 'image_advanced',
					'max_file_uploads' => '1',
					'desc'		=> '',
					),
					
					
					array(
						'name'		=> 'Title',
						'id'		=> $prefix . 'md_gallery_intro_title_opt_full_slider',
						'clone'		=> false,
						'type'		=> 'textarea',
						'std'		=> '',
						'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
					
					array(
						'name'		=> 'Sub Title',
						'id'		=> $prefix . 'md_gallery_intro_sub_title_opt_full_slider',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
					
					array(
						'name'		=> 'Button Text',
						'id'		=> $prefix . 'md_intro_buttontxt_opt_full_slider',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
					
					array(
						'name'		=> 'Button URL',
						'id'		=> $prefix . 'md_intro_buttonurl_opt_full_slider',
						'clone'		=> false,
						'type'		=> 'tex',
						'std'		=> '',
						'desc'		=> 'Optional.',
					),
				
				),
			),
			
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis_full_slider',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info_full_slider',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro_full_slider',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_top_dis_full_slider', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro_full_slider',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis_full_slider', '!=', 'st2' )
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url_full_slider',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis_full_slider', '!=', 'st2' )
					),
		
	
		
	)
);



/* ----------------------------------------------------- */
/* intro image
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_half_solonick',
	'title' => 'Half Image Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt'              => 'st2',
            ),
	
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'		=> 'Background Image',
			'id'		=> $prefix . 'bl_player_back_solonick',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> 'Background Image',
		),
		
		
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl_home_vd_title',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl_home_vd_subtitle',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		array(
			'name'		=> 'External URL',
			'id'		=> $prefix . 'bl_home_vd_url',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl_home_vd_text',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis1',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info1',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro1',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_top_dis1', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro1',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis1', '!=', 'st2' )
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url1',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis1', '!=', 'st2' )
					),
		
		
			// SELECT BOX
		array(
			'name'     => esc_attr__( 'Right Side Text Slider', 'solonick' ),
			'id'   => $prefix . 'wr_intro_right_dis',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_right_intro_slide_item',
				'name'        => 'Right Side Text Slider',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Right Side Text Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_slide_right',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Web Design <br> For marking text e.x:  &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_right_dis', '!=', 'st2' )
			),
		
		
		
	)
);


/* ----------------------------------------------------- */
/* Intro Impulse
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_impulse_solonick',
	'title' => 'Impulse Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt' => 'st3',
            ),
	
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'		=> 'Background Image',
			'id'		=> $prefix . 'bl_player_back_solonick_impulse',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> 'Background Image.',
		),
		
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl_home_vd_title_impulse',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl_home_vd_subtitle_impulse',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		array(
			'name'		=> 'External URL',
			'id'		=> $prefix . 'bl_home_vd_url_impulse',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl_home_vd_text_impulse',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis1_impulse',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info1_impulse',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro1_impulse',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_top_dis1_impulse', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro1_impulse',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis1_impulse', '!=', 'st2' )
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url1_impulse',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis1_impulse', '!=', 'st2' )
					),
		
		
			// SELECT BOX
		array(
			'name'     => esc_attr__( 'Right Side Text Slider', 'solonick' ),
			'id'   => $prefix . 'wr_intro_right_dis_impulse',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_right_intro_slide_item_impulse',
				'name'        => 'Right Side Text Slider',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Right Side Text Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_slide_right_impulse',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Web Design <br> For marking text e.x:  &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_right_dis_impulse', '!=', 'st2' )
			),
		
		
		
	)
);


/* ----------------------------------------------------- */
/* intro full image
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_full_image_solonick',
	'title' => 'Fullscreen Image Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt' => 'st4',
            ),
	
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'		=> 'Background Image',
			'id'		=> $prefix . 'bl_player_back_solonick_full_image',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> 'Background Image',
		),
		
		
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl_home_vd_title_full_image',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl_home_vd_subtitle_full_image',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		array(
			'name'		=> 'External URL',
			'id'		=> $prefix . 'bl_home_vd_url_full_image',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl_home_vd_text_full_image',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis1_full_image',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info1_full_image',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro1_full_image',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_top_dis1_full_image', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro1_full_image',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis1_full_image', '!=', 'st2' )
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url1_full_image',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis1_full_image', '!=', 'st2' )
					),
		
		
			// SELECT BOX
		array(
			'name'     => esc_attr__( 'Right Side Text Slider', 'solonick' ),
			'id'   => $prefix . 'wr_intro_right_dis_full_image',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_right_intro_slide_item_full_image',
				'name'        => 'Right Side Text Slider',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Right Side Text Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_slide_right_full_image',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Web Design <br> For marking text e.x:  &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_right_dis_full_image', '!=', 'st2' )
			),
		
		
		
	)
);



/* ----------------------------------------------------- */
/* Intro Slide Show
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_slideshow_solonick',
	'title' => 'Slideshow Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt'  => 'st6',
            ),
	
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		
		array(
			'name'		=> 'Image Gallery',
			'id'		=> $prefix . 'bl_slideshow_solonick_slideshow',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '100',
			'desc'		=> 'Working intro style Slideshow.',
		),
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl_home_vd_title_slideshow',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl_home_vd_subtitle_slideshow',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		array(
			'name'		=> 'External URL',
			'id'		=> $prefix . 'bl_home_vd_url_slideshow',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl_home_vd_text_slideshow',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis1_slideshow',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info1_slideshow',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro1_slideshow',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
				),
				'hidden' => array( 'rnr_wr_intro_top_dis1_slideshow', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro1_slideshow',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis1_slideshow', '!=', 'st2' )
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url1_slideshow',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis1_slideshow', '!=', 'st2' )
					),
		
		
			// SELECT BOX
		array(
			'name'     => esc_attr__( 'Right Side Text Slider', 'solonick' ),
			'id'   => $prefix . 'wr_intro_right_dis_slideshow',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_right_intro_slide_item_slideshow',
				'name'        => 'Right Side Text Slider',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Right Side Text Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_slide_right_slideshow',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Web Design <br> For marking text e.x:  &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_right_dis_slideshow', '!=', 'st2' )
			),
		
		
		
	)
);


/* ----------------------------------------------------- */
/* Intro MP4
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_mp4_solonick',
	'title' => 'MP4 Video Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt' => 'st8',
            ),
	
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'		=> 'Background Image',
			'id'		=> $prefix . 'bl_player_back_solonick_mp4',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> 'Working only mobile device.',
		),
		
		array(
			'name'		=> 'MP4 Video URL',
			'id'		=> $prefix . 'bl-mp4-home-opt_mp4',
			'clone'		=> false,
			'type' => 'text',
			'desc'		=> 'Working only intro style video MP4.',
		),
		
		
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl_home_vd_title_mp4',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl_home_vd_subtitle_mp4',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		array(
			'name'		=> 'External URL',
			'id'		=> $prefix . 'bl_home_vd_url_mp4',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl_home_vd_text_mp4',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis1_mp4',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info1_mp4',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro1_mp4',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
				),
				'hidden' => array( 'rnr_wr_intro_top_dis1_mp4', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro1_mp4',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis1_mp4', '!=', 'st2' )
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url1_mp4',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis1_mp4', '!=', 'st2' )
					),
		
		
			// SELECT BOX
		array(
			'name'     => esc_attr__( 'Right Side Text Slider', 'solonick' ),
			'id'   => $prefix . 'wr_intro_right_dis_mp4',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_right_intro_slide_item_mp4',
				'name'        => 'Right Side Text Slider',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Right Side Text Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_slide_right_mp4',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Web Design <br> For marking text e.x:  &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
				),
				'hidden' => array( 'rnr_wr_intro_right_dis_mp4', '!=', 'st2' )
			),
		
		
		
	)
);



/* ----------------------------------------------------- */
/* intro vimeo
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_vimeo_solonick',
	'title' => 'Vimeo Video Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt' => 'st9',
            ),
	
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'		=> 'Background Image',
			'id'		=> $prefix . 'bl_player_back_solonick_vimeo',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> 'Working only mobile device.',
		),
		
		
		
		array(
			'name'		=> 'Vimeo Video ID',
			'id'		=> $prefix . 'bl-vimeo-home-opt_vimeo',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Working only intro style Vimeo. <br> ex: 97871257',
		),
		
		
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl_home_vd_title_vimeo',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl_home_vd_subtitle_vimeo',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		array(
			'name'		=> 'External URL',
			'id'		=> $prefix . 'bl_home_vd_url_vimeo',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl_home_vd_text_vimeo',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis1_vimeo',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info1_vimeo',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro1_vimeo',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
				),
				'hidden' => array( 'rnr_wr_intro_top_dis1_vimeo', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro1_vimeo',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis1_vimeo', '!=', 'st2' )
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url1_vimeo',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis1_vimeo', '!=', 'st2' )
					),
		
		
			// SELECT BOX
		array(
			'name'     => esc_attr__( 'Right Side Text Slider', 'solonick' ),
			'id'   => $prefix . 'wr_intro_right_dis_vimeo',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_right_intro_slide_item_vimeo',
				'name'        => 'Right Side Text Slider',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Right Side Text Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_slide_right_vimeo',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Web Design <br> For marking text e.x:  &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
				),
				'hidden' => array( 'rnr_wr_intro_right_dis_vimeo', '!=', 'st2' )
			),
		
		
		
	)
);

/* ----------------------------------------------------- */
/* intro Youtube
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'intro_youtube_solonick',
	'title' => 'Youtub Video Options.',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
                '#rnr_wr_intro_sc_opt'  => 'st10',
            ),
	
	),
	
	
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'		=> 'Background Image',
			'id'		=> $prefix . 'bl_player_back_solonick_youtube',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'max_file_uploads' => '1',
			'desc'		=> 'Working only intro style Half Image/ Fullscreen Image /Impulse image/ All Videos.',
		),
		
		
		array(
			'name'		=> 'Youtube Video ID',
			'id'		=> $prefix . 'bl-youtube-home-opt_youtube',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Working only intro style Youtube. <br> ex: Hg5iNVSp2z8',
		),
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Video Sound', 'solonick' ),
			'id'   => $prefix . 'wr_intro_youtube_video_sound',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'1' => esc_attr__( 'Mute', 'solonick' ),
				'0' => esc_attr__( 'On', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => '1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl_home_vd_title_youtube',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> 'For marking text e.x: Independent &lt;span&gt; Digital  Designer &lt;/span&gt;',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl_home_vd_subtitle_youtube',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		array(
			'name'		=> 'External URL',
			'id'		=> $prefix . 'bl_home_vd_url_youtube',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl_home_vd_text_youtube',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Top Content', 'solonick' ),
			'id'   => $prefix . 'wr_intro_top_dis1_youtube',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_po_top_info1_youtube',
				'name'        => 'Top Content',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Top Content', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_intro1_youtube',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: 40.7143528',
					),
				),
				'hidden' => array( 'rnr_wr_intro_top_dis1_youtube', '!=', 'st2' )
			),
			
			array(
						'name'		=> 'Hover Content',
						'id'		=> $prefix . 'md_top_con_hover_intro1_youtube',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Based In NewYork',
						'hidden' => array( 'rnr_wr_intro_top_dis1_youtube', '!=', 'st2' )
					),
			array(
						'name'		=> 'Hover Content URL',
						'id'		=> $prefix . 'md_top_con_hover_intro_url1_youtube',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'Optional',
						'hidden' => array( 'rnr_wr_intro_top_dis1_youtube', '!=', 'st2' )
					),
		
		
			// SELECT BOX
		array(
			'name'     => esc_attr__( 'Right Side Text Slider', 'solonick' ),
			'id'   => $prefix . 'wr_intro_right_dis_youtube',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
			array(
				'id'		=> $prefix . 'md_right_intro_slide_item_youtube',
				'name'        => 'Right Side Text Slider',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Right Side Text Slider Item', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name'		=> 'Content',
						'id'		=> $prefix . 'md_top_con_slide_right_youtube',
						'clone'		=> false,
						'type'		=> 'text',
						'std'		=> '',
						'desc'		=> 'e.x: Web Design <br> For marking text e.x:  &lt;span&gt; Digital  Designer &lt;/span&gt;',
					),
					
					
				),
				'hidden' => array( 'rnr_wr_intro_right_dis_youtube', '!=', 'st2' )
			),
		
		
		
	)
);

/* ----------------------------------------------------- */
/* portfolio Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'scroll_page_nav_opt',
	'title' => 'Scrolling Page Template Navigation Options.',
	'show'   => array(
    'template'    => array( 'one-page.php' ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Navigation', 'solonick' ),
			'id'   => $prefix . 'wr_nav_sc_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
				'id'		=> $prefix . 'po_pu_scroll_nav',
				'name'        => 'Scrolling Nvaigation',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Scrolling Nvaigation', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Menu Name',
						'id'   => 'po_pu_opt_nav_n',
						'type' => 'text',
						'desc'		=> '',
					),
					
					array(
						'name' => 'Scroll ID',
						'id'   => 'po_pu_opt_nav_i',
						'type' => 'text',
						'desc'		=> 'Use VC Row Scroll ID <br> e.x: #about',
					),
					
				
				),
				'hidden' => array( 'rnr_wr_nav_sc_opt', '!=', 'st2' )
			),
		
	
		
	)
);



/* ----------------------------------------------------- */
/* page Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'portfolio_page_types',
	'title' => 'Portfolio Page Template Function',
	'show'   => array(
    'template'    => array( 'portfolio.php' ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Select Template', 'solonick' ),
			'id'   => $prefix . 'wr_portfolio_pagetype',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st0' => esc_attr__( 'Default', 'solonick' ),
				'st1' => esc_attr__( 'Masonry', 'solonick' ),
				'st2' => esc_attr__( 'Masonry 2', 'solonick' ),
				'st3' => esc_attr__( 'Boxed', 'solonick' ),
				'st4' => esc_attr__( 'Boxed 2', 'solonick' ),
				'st5' => esc_attr__( 'Parallax', 'solonick' ),
				'st6' => esc_attr__( 'Parallax dark', 'solonick' ),
				'st7' => esc_attr__( 'List', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st0',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
		   'name'     => esc_attr__( 'Portfolio Filter', 'mountainwp' ),
		   'id'   => $prefix . 'port-filter',
		   'desc' => '',
		   'type'     => 'radio',
		   // Array of 'value' => 'Label' pairs for select box
		   'options'  => array(
			'yes' => esc_attr__( 'Enable', 'mountainwp' ),
			'no' => esc_attr__( 'Disable', 'mountainwp' ),
		   ),
		   // Select multiple values, optional. Default is false.
		   'std'         => 'yes',

		  ),
		  
		  array(
				'name'       => esc_attr__( 'Number Of Post Show', 'blps' ),
				'id'         => $prefix . 'portfolio-post-show',
				'desc'		=> '',
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => __( '', 'blps' ),
				'suffix'     => __( ' Posts', 'blps' ),
				'js_options' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
			),	

			array(
			'name'		=> 'Include Category',
			'id'		=> $prefix . 'portfolio-post-cat',
			'desc'		=> 'Enter category name ex: web design, web development (Optional).',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'hidden' => array( 'rnr_port-filter', '!=', 'no' )
		),
		
	
		
	)
);


// portfolio page header boxed
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr_portfolio_template_header',
	'title' => 'Portfolio Page Header',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_wr_portfolio_pagetype'              => 'st3',
    ),
	
	),
	'pages' => array( 'Page'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_port_page_header_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'so_port_page_header_hor_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'so_port_page_header_short_title',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Scroll Button Title',
			'id'		=> $prefix . 'so_port_page_header_scroll_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
	
	)
);



// portfolio page header boxed 2
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr_portfolio_template_header_boxed2',
	'title' => 'Portfolio Page Header',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_wr_portfolio_pagetype'              => 'st4',
    ),
	
	),
	'pages' => array( 'Page'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_port_page_header_title_boxed2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'so_port_page_header_hor_title_boxed2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'so_port_page_header_short_title_boxed2',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		
		
	
	)
);


// portfolio page header boxed 2
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr_portfolio_template_header_parallax',
	'title' => 'Portfolio Page Header',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_wr_portfolio_pagetype'              => 'st5',
    ),
	
	),
	'pages' => array( 'Page'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_port_page_header_title_parallax',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'so_port_page_header_hor_title_parallax',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'so_port_page_header_short_title_parallax',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Scroll Button Title',
			'id'		=> $prefix . 'so_port_page_header_scroll_title_parallax',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
	
	)
);




/* ----------------------------------------------------- */
/* Music
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'music_page_types',
	'title' => 'Music Page Template Function',
	'show'   => array(
    'template'    => array( 'music.php' ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		
		array(
		   'name'     => esc_attr__( 'Filter', 'mountainwp' ),
		   'id'   => $prefix . 'music-port-filter',
		   'desc' => '',
		   'type'     => 'radio',
		   // Array of 'value' => 'Label' pairs for select box
		   'options'  => array(
			'yes' => esc_attr__( 'Enable', 'mountainwp' ),
			'no' => esc_attr__( 'Disable', 'mountainwp' ),
		   ),
		   // Select multiple values, optional. Default is false.
		   'std'         => 'yes',

		  ),
		  
		  array(
				'name'       => esc_attr__( 'Number Of Post Show', 'blps' ),
				'id'         => $prefix . 'music-post-show',
				'desc'		=> '',
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => __( '', 'blps' ),
				'suffix'     => __( ' Posts', 'blps' ),
				'js_options' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
			),	

			array(
			'name'		=> 'Include Category',
			'id'		=> $prefix . 'music-post-cat',
			'desc'		=> 'Enter category name ex: web design, web development (Optional).',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'hidden' => array( 'rnr_music-port-filter', '!=', 'no' )
		),
		
		
	)
);


/* ----------------------------------------------------- */
/* music post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'music_page_header_type',
	'title' => 'Page Header',
	// Show this meta box for posts matched below conditions
    'pages' => array( 'music', 'team', 'product' ),
	'context' => 'normal',	

	'fields' => array(
	
		array(
		'name'		=> 'Background Image',
		'id'		=> $prefix . 'so_music_page_header_back',
		'clone'		=> false,
		'type'		=> 'image_advanced',
		'max_file_uploads' => '1',
		'desc'		=> '',
		),
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_music_page_header_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio &lt;span&gt; Project title&lt;/span&gt;',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'so_music_page_header_hor_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'so_music_page_header_short_title',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		
		
	)
);





/* ----------------------------------------------------- */
/* Music
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'music_post_types',
	'title' => 'Music Page Template Options',
	'pages' => array( 'music' ),
	'context' => 'normal',	

	'fields' => array(
		
			

		array(
			'name'		=> 'Purchase URL',
			'id'		=> $prefix . 'music_pur_opt',
			'desc'		=> '',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Purchase Button Text',
			'id'		=> $prefix . 'music_pur_but_opt',
			'desc'		=> 'e.x: Buy',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Track Count',
			'id'		=> $prefix . 'music_track_opt',
			'desc'		=> 'e.x: Tracks : 7',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Preview MP3 URL',
			'id'		=> $prefix . 'music_mp3_opt',
			'desc'		=> 'e.x: http://solonick.kwst.net/site/audio/1.mp3',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		
	)
);



// portfolio post Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-musicmeta-opt',
	'title' => 'Music Extra Options',
	'pages' => array( 'music'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Music Information', 'solonick' ),
			'id'   => $prefix . 'wr_music_info_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
				'id'		=> $prefix . 'music_info_main_list',
				'name'        => 'Music Information',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Music Information', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Data Title',
						'id'		=> $prefix . 'music_info_main_list1',
						'type' => 'text',
						'desc'		=> 'e.x: Category',
					),
					
					array(
						'name' => 'Data Content',
						'id'		=> $prefix . 'music_info_main_list2',
						'type' => 'text',
						'desc'		=> 'e.x: Branding <br> HTML tag allwoed.',
					),
					
					
					
				),
			),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Music Player', 'solonick' ),
			'id'   => $prefix . 'wr_music_list_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
						'name' => 'Album Title ',
						'id'   => $prefix . 'wr_album_title',
						'type' => 'text',
						'desc'		=> '',
					),
		
		array(
				'id'   => $prefix . 'wr_music_list_tab_opt',
				'name'        => 'Add Track',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Add Track', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Track Title',
						'id'   => $prefix . 'wr_music_list_track_ti',
						'type' => 'text',
						'desc'		=> '',
					),
					
					array(
						'name' => 'Track URL',
						'id'   => $prefix . 'wr_music_list_track_url',
						'type' => 'text',
						'desc'		=> 'E.x: http://solonick.kwst.net/site/audio/1.mp3',
					),
					
					array(
						'name' => 'Icon Class',
						'id'   => $prefix . 'wr_music_list_icon',
						'type' => 'text',
						'desc'		=> 'E.x: ',
					),
					
					// SELECT BOX
					array(
						'name'     => esc_attr__( 'Playing', 'solonick' ),
						'id'   => $prefix . 'wr_music_list_track_play',
						'desc'  => esc_attr__( 'Select Yes For 1st track item. ', 'solonick' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
						'options'  => array(
							'st1' => esc_attr__( 'No', 'solonick' ),
							'playing' => esc_attr__( 'Yes', 'solonick' ),
							
							
						),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => 'st1',
						'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
					),
					
					
					
				),
			),
		//available 
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Store Point', 'solonick' ),
			'id'   => $prefix . 'wr_music_store_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
						'name' => 'Section Title ',
						'id'   => $prefix . 'wr_stoe_sec_title',
						'type' => 'text',
						'desc'		=> 'Available on',
					),
		
		array(
				'id'   => $prefix . 'wr_store_list_tab_opt',
				'name'        => 'Add Store',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Add Track', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Store Name',
						'id'   => $prefix . 'wr_store_name_ti',
						'type' => 'text',
						'desc'		=> '',
					),
					
					array(
						'name' => 'Store URL',
						'id'   => $prefix . 'wr_store_url',
						'type' => 'text',
						'desc'		=> '',
					),
					
					
					
					
					
				),
			),
		
		

		
	)
);




// Blog Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-posttmeta-opt',
	'title' => 'Post Extra Options',
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(

		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl-post-sub-opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		

		
	)
);

// Blog Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-blogmeta-video',
	'title' => 'Post Format Video Option',
	'show'   => array(
    'post_format' => array( 'Video' ),
	),
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(

		array(
			'name'		=> 'Vimeo/ Youtube Video Link:',
			'id'		=> $prefix . 'bl-video',
			'desc'		=> 'Set Vimeo / Youtube Video Embed Link',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

		
	)
);


// Blog Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-blogmeta-gallery',
	'title' => 'Post Format Gallery Option',
	'show'   => array(
    'post_format' => array( 'Gallery' ),
	),
	'pages' => array( 'post'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(

		array(
			'name'		=> 'Upload Images',
			'id'		=> $prefix . 'wr_galleryimg_blog',
			'clone'		=> false,
			'type'		=> 'image_advanced',
			'desc'		=> '',
		),

		
	)
);



/* ----------------------------------------------------- */
/* portfoloio options 
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'portfolio_width',
	'title' => 'Portfolio Post Width & Popup Options <br> <small>Not working on portfolio page template list & parallax style.</small>',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		
		array(
			'name'     => __( 'Post Box Width', 'solonick' ),
			'id'   => $prefix . 'post-box-width',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'default-galley' => esc_attr__( 'Default', 'solonick' ),
				'gallery-item-second' => esc_attr__( 'Large', 'solonick' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'default-galley',

		),	
		
		
		array(
			'name'     => __( 'Popup Option', 'solonick' ),
			'id'   => $prefix . 'post-popup-option',
			'type'     => 'radio',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Image', 'solonick' ),
				'st2' => esc_attr__( 'video', 'solonick' ),
			),
			// Select multiple values, optional. Default is false.
			'std'         => 'st1',

		),	
		
		array(
			'name'		=> 'Popup Video',
			'id'		=> $prefix . 'post_popup_video',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'e.x: https://vimeo.com/6698875',
			'hidden' => array( 'rnr_post-popup-option', '!=', 'st2' )
		),
		
		
	)
);



/* ----------------------------------------------------- */
/* portfolio Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'portfolio_temp_parallax',
	'title' => 'Portfolio Page Template Parallax Style Options <br> <small>working only portfolio page template parallax style.</small> ',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Image Position', 'solonick' ),
			'id'   => $prefix . 'wr_tmp_par_image',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Left', 'solonick' ),
				'st2' => esc_attr__( 'Right', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'tmp_par_list_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: There are many variations of passages of Lorem Ipsum.',
		),
		
		array(
		'name'		=> 'Image 1',
		'id'		=> $prefix . 'tmp_st_img1',
		'clone'		=> false,
		'type'		=> 'image_advanced',
		'max_file_uploads' => '1',
		'desc'		=> '',
		),
		
		array(
			'name'		=> 'Data position left',
			'id'		=> $prefix . 'tmp_data_position_left1',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: 65',
		),
		
		array(
			'name'		=> 'Data position Top',
			'id'		=> $prefix . 'tmp_data_position_top1',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: -5',
		),
		
		array(
			'name'		=> 'Data translatey',
			'id'		=> $prefix . 'tmp_translatey1',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: -150px',
		),
		
		
		array(
		'name'		=> 'Image 2',
		'id'		=> $prefix . 'tmp_st_img2',
		'clone'		=> false,
		'type'		=> 'image_advanced',
		'max_file_uploads' => '1',
		'desc'		=> '',
		),
		
		array(
			'name'		=> 'Data position left',
			'id'		=> $prefix . 'tmp_data_position_left2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: 65',
		),
		
		array(
			'name'		=> 'Data position Top',
			'id'		=> $prefix . 'tmp_data_position_top2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: -5',
		),
		
		array(
			'name'		=> 'Data translatey',
			'id'		=> $prefix . 'tmp_translatey2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: -150px',
		),
		
		array(
			'name'		=> 'MP4 Video URL',
			'id'		=> $prefix . 'tmp_st_video',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'e.x:http://solonick.kwst.net/site/video/1.mp4',
		),
		
		array(
			'name'		=> 'Data position left',
			'id'		=> $prefix . 'tmp_data_position_left3',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: 65',
		),
		
		array(
			'name'		=> 'Data position Top',
			'id'		=> $prefix . 'tmp_data_position_top3',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: -5',
		),
		
		array(
			'name'		=> 'Data translatey',
			'id'		=> $prefix . 'tmp_translatey3',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: -150px',
		),
	
		
	)
);



/* ----------------------------------------------------- */
/* portfolio Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'portfolio_type',
	'title' => 'Portfolio Format',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Details Page Style', 'solonick' ),
			'id'   => $prefix . 'wr_port_dt_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st0' => esc_attr__( 'Select an Option', 'solonick' ),
				'st1' => esc_attr__( 'Carousel', 'solonick' ),
				'st2' => esc_attr__( 'Carousel 2', 'solonick' ),
				'st3' => esc_attr__( 'Gallery', 'solonick' ),
				'st4' => esc_attr__( 'Gallery 2', 'solonick' ),
				'st5' => esc_attr__( 'Slider', 'solonick' ),
				'st6' => esc_attr__( 'Showcase', 'solonick' ),
				'st7' => esc_attr__( 'Fullscreen  Slider', 'solonick' ),
				'st8' => esc_attr__( 'Youtube Video', 'solonick' ),
				'st9' => esc_attr__( 'Vimeo Video', 'solonick' ),
				'st10' => esc_attr__( 'Mp4 Video', 'solonick' ),
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st0',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
	
	)
);

/* ----------------------------------------------------- */
/* port post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'port_details_page_header_type',
	'title' => 'Deatils Page Header',
	// Show this meta box for posts matched below conditions
	'show'   => array(
	'input_value'   => array(
    '#rnr_wr_port_dt_opt'              => 'st3',
    ),
	),
    'pages' => array( 'portfolio'),
	'context' => 'normal',	

	'fields' => array(
	
		array(
		'name'		=> 'Background Image',
		'id'		=> $prefix . 'so_po_page_header_back',
		'clone'		=> false,
		'type'		=> 'image_advanced',
		'max_file_uploads' => '1',
		'desc'		=> '',
		),
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_po_page_header_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'bl-port-horizonral-title-opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'bl-port-short-opt',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		
	
		
	)
);

/* ----------------------------------------------------- */
/* music post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'port_details_page_header_type2',
	'title' => 'Deatils Page Header',
	// Show this meta box for posts matched below conditions
	'show'   => array(
	'input_value'   => array(
    '#rnr_wr_port_dt_opt'              => 'st4',
    ),
	),
    'pages' => array( 'portfolio'),
	'context' => 'normal',	

	'fields' => array(
	
		array(
		'name'		=> 'Background Image',
		'id'		=> $prefix . 'so_po_page_header_back2',
		'clone'		=> false,
		'type'		=> 'image_advanced',
		'max_file_uploads' => '1',
		'desc'		=> '',
		),
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_po_page_header_title2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio[br][span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'bl-port-horizonral-title-opt2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'bl-port-short-opt2',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		
	
		
	)
);

/* ----------------------------------------------------- */
/* music post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'port_details_page_header_type3',
	'title' => 'Deatils Page Header',
	// Show this meta box for posts matched below conditions
	'show'   => array(
	'input_value'   => array(
    '#rnr_wr_port_dt_opt'              => 'st5',
    ),
	),
    'pages' => array( 'portfolio'),
	'context' => 'normal',	

	'fields' => array(
	
		array(
		'name'		=> 'Background Image',
		'id'		=> $prefix . 'so_po_page_header_back3',
		'clone'		=> false,
		'type'		=> 'image_advanced',
		'max_file_uploads' => '1',
		'desc'		=> '',
		),
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_po_page_header_title3',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'bl-port-horizonral-title-opt3',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'bl-port-short-opt3',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		
		
	)
);


/* ----------------------------------------------------- */
/* music post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'port_details_page_header_type4',
	'title' => 'Deatils Page Header',
	// Show this meta box for posts matched below conditions
	'show'   => array(
	'input_value'   => array(
    '#rnr_wr_port_dt_opt'              => 'st6',
    ),
	),
    'pages' => array( 'portfolio'),
	'context' => 'normal',	

	'fields' => array(
	
		array(
		'name'		=> 'Background Image',
		'id'		=> $prefix . 'so_po_page_header_back4',
		'clone'		=> false,
		'type'		=> 'image_advanced',
		'max_file_uploads' => '1',
		'desc'		=> '',
		),
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'so_po_page_header_title4',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Horizonral Title',
			'id'		=> $prefix . 'bl-port-horizonral-title-opt4',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Short Description',
			'id'		=> $prefix . 'bl-port-short-opt4',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> ''
		),
		
		
		
	)
);



// port yt Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-portmeta-video-youtube',
	'title' => 'Portfolio Format Youtube Video Option',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_wr_port_dt_opt'              => 'st8',
    ),
	
	),
	'pages' => array( 'portfolio'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
	
		array(
			'name'		=> 'Youtube Video ID',
			'id'		=> $prefix . 'bl-port-video-yt-id',
			'desc'		=> 'Effected on intro section. <br> e.x: Hg5iNVSp2z8',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Video Sound', 'solonick' ),
			'id'   => $prefix . 'so_intro_vid_yt_sound',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'1' => esc_attr__( 'Mute', 'solonick' ),
				'0' => esc_attr__( 'On', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => '1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl-port-video-tit-yt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl-port-video-subtit-yt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),

		array(
			'name'		=> 'Vimeo/ Youtube Video Link:',
			'id'		=> $prefix . 'bl-port-video-yt',
			'desc'		=> 'Use Vimeo / Youtube Video Embed Link',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

		
	)
);


// port vm Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-portmeta-video-vimeo',
	'title' => 'Portfolio Format Vimeo Video Option',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_wr_port_dt_opt'              => 'st9',
    ),
	
	),
	'pages' => array( 'portfolio'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
	
		array(
			'name'		=> 'Vimeo Video ID',
			'id'		=> $prefix . 'bl-port-video-vm-id',
			'desc'		=> 'Effected on intro section. <br> e.x: 97871257',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl-port-video-tit-vm',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl-port-video-subtit-vm',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		

		array(
			'name'		=> 'Vimeo/ Youtube Video Link:',
			'id'		=> $prefix . 'bl-port-video-vm',
			'desc'		=> 'Use Vimeo / Youtube Video Embed Link',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

		
	)
);


// port vm Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-portmeta-video-mp4',
	'title' => 'Portfolio Format MP4 Video Option',
	'show'   => array(
    // by metabox select
	'input_value'   => array(
    '#rnr_wr_port_dt_opt'              => 'st10',
    ),
	
	),
	'pages' => array( 'portfolio'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
	
		array(
			'name'		=> 'MP4 video url',
			'id'		=> $prefix . 'bl-port-video-mp-id',
			'desc'		=> 'Effected on intro section.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl-port-video-tit-mp4',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [br] [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl-port-video-subtit-mp4',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		

		array(
			'name'		=> 'Vimeo/ Youtube Video Link:',
			'id'		=> $prefix . 'bl-port-video-mp',
			'desc'		=> 'Use Vimeo / Youtube Video Embed Link',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),

		
	)
);


// portfolio post Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-portmeta-right-opt',
	'title' => 'Portfolio Right Side Content',
	'pages' => array( 'portfolio'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Portfolio Right Side Content', 'solonick' ),
			'id'   => $prefix . 'wr_port_right_info_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'sol_info_right_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
			'hidden' => array( 'rnr_wr_port_right_info_opt', '!=', 'st2' )
		),
		
		array(
			'name'		=> 'Content',
			'id'		=> $prefix . 'sol_info_right_content',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> '',
			'hidden' => array( 'rnr_wr_port_right_info_opt', '!=', 'st2' )
		),
		
		

		
	)
);


// portfolio post Post Metaboxes
/* ----------------------------------------------------- */


$meta_boxes[] = array(
	'id' => 'rnr-portmeta-opt',
	'title' => 'Portfolio Extra Options',
	'pages' => array( 'portfolio'),
	'context' => 'normal',

	// List of meta fields
	'fields' => array(
		
		array(
			'name'		=> 'Title',
			'id'		=> $prefix . 'bl-port-tit-opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Optional. <br> e.x: Portfolio [span] Project title[/span]',
		),
		
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'bl-port-subt-tit-opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Working Only Portfolio Format Fullscreen  Slider.',
		),
		
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Project Information', 'solonick' ),
			'id'   => $prefix . 'wr_port_info_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
				'id'		=> $prefix . 'po_pu_pro_in_opt',
				'name'        => 'Project Information',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Project Information', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Data Title',
						'id'   => 'car_opt_in_tit',
						'type' => 'text',
						'desc'		=> 'e.x: Category',
					),
					
					array(
						'name' => 'Data Content',
						'id'   => 'car_opt_in_con',
						'type' => 'text',
						'desc'		=> 'e.x: Branding',
					),
					
					
					
				),
				'hidden' => array( 'rnr_wr_port_info_opt', '!=', 'st2' )
			),
			
		array(
			'name'		=> 'Client Review Title',
			'id'		=> $prefix . 'sol_clinet_rev_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Client Logo/ Image',
			'id'		=> $prefix . 'sol_clinet_rev_logo',
			'clone'		=> false,
			'max_file_uploads' => '1',
			'type'		=> 'image_advanced',
			'desc'		=> 'Upload Image',
		),	
		
		array(
			'name'		=> 'Client Review Content',
			'id'		=> $prefix . 'sol_clinet_rev_con',
			'clone'		=> false,
			'type'		=> 'textarea',
			'std'		=> '',
			'desc'		=> '',
		),
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Project Accordion', 'solonick' ),
			'id'   => $prefix . 'wr_port_accor_opt',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
				'id'		=> $prefix . 'so_acc_tab_opt',
				'name'        => 'Project Accordion',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Project Accordion', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Accordion Title',
						'id'   => $prefix . 'so_acc_title_opt',
						'type' => 'text',
						'desc'		=> '',
					),
					
					array(
						'name' => 'Accordion Content',
						'id'   => $prefix . 'so_acc_con_opt',
						'type' => 'textarea',
						'desc'		=> '',
					),
					
					// SELECT BOX
					array(
						'name'     => esc_attr__( 'Active', 'solonick' ),
						'id'   => $prefix . 'so_acc_accon_opt',
						'desc'  => esc_attr__( 'Select Yes For 1st Accordion Item ', 'solonick' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
						'options'  => array(
							'st1' => esc_attr__( 'No', 'solonick' ),
							'st2' => esc_attr__( 'Yes', 'solonick' ),
							
							
						),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => 'st1',
						'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
					),
					
					
					
				),
				'hidden' => array( 'rnr_wr_port_accor_opt', '!=', 'st2' )
			),
		
		array(
			'name'		=> 'Button URL',
			'id'		=> $prefix . 'bl-port-button-opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl-port-button_text-opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		
		array(
			'name'		=> 'Call To Action Title',
			'id'		=> $prefix . 'bl_call_to_title2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Call To Action Button URL',
			'id'		=> $prefix . 'bl_call_to_button2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Call To Action Button Text',
			'id'		=> $prefix . 'bl_call_to_text2',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		

		
	)
);


/* portfolio Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'pt_slider_link_popu',
	'title' => 'Image Gallery',
	'pages' => array( 'portfolio' ),
	'context' => 'normal',	

	'fields' => array(
	
			// SELECT BOX
			array(
			'name'     => esc_attr__( 'Gallery Section', 'popuga' ),
			'id'   => $prefix . 'md_youtube_gallery_enable',
			'desc'  => esc_attr__( '', 'popuga' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
			'st1' => esc_attr__( 'Disable', 'popuga' ),
			'st2' => esc_attr__( 'Enable', 'popuga' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option.', 'popuga' ),
			'hidden' => array( 'rnr_wr_port_dt_opt', '!=', 'st8' )
			),
			
			// SELECT BOX
			array(
			'name'     => esc_attr__( 'Gallery Section', 'popuga' ),
			'id'   => $prefix . 'md_vimeo_gallery_enable',
			'desc'  => esc_attr__( '', 'popuga' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
			'st1' => esc_attr__( 'Disable', 'popuga' ),
			'st2' => esc_attr__( 'Enable', 'popuga' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option.', 'popuga' ),
			'hidden' => array( 'rnr_wr_port_dt_opt', '!=', 'st9' )
			),
			
			// SELECT BOX
			array(
			'name'     => esc_attr__( 'Gallery Section', 'popuga' ),
			'id'   => $prefix . 'md_mp4_gallery_enable',
			'desc'  => esc_attr__( '', 'popuga' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
			'st1' => esc_attr__( 'Disable', 'popuga' ),
			'st2' => esc_attr__( 'Enable', 'popuga' ),
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option.', 'popuga' ),
			'hidden' => array( 'rnr_wr_port_dt_opt', '!=', 'st10' )
			),
	
		array(
				'id'		=> $prefix . 'so_drt_po_gallery',
				'name'        => 'Galley',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Galley', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
				
				
					// SELECT BOX
					array(
						'name'     => esc_attr__( 'Image Size', 'popuga' ),
						'id'   => $prefix . 'md_pot_gallery_column',
						'desc'  => esc_attr__( '', 'popuga' ),
						'type'     => 'select_advanced',
						// Array of 'value' => 'Label' pairs for select box
						'options'  => array(
							'gallery-item-one' => esc_attr__( 'Default', 'popuga' ),
							'gallery-item-second' => esc_attr__( 'Double', 'popuga' ),
							
							
						),
						// Select multiple values, optional. Default is false.
						'multiple'    => false,
						'std'         => 'gallery-item-one',
						'placeholder' => esc_attr__( 'Select an Option.', 'popuga' ),
					),
				
					array(
					'name'		=> 'Upload Image',
					'id'		=> $prefix . 'portfolio-image-popu',
					'clone'		=> false,
					'type'		=> 'image_advanced',
					'max_file_uploads' => '1000',
					'desc'		=> 'Upload only 1 image if you added a popup video URL.',
					),
					
					array(
					'name'		=> 'Popup Video URL',
					'id'		=> $prefix . 'so_port_gallery_video_opt',
					'clone'		=> false,
					'type'		=> 'text',
					'std'		=> '',
					'desc'		=> 'Youtube/ Vimeo Video URL. <br> Not working on Portfolio details style Slider.',
					),
					
				
				),
			),
		
		
		
	)
);




/* ----------------------------------------------------- */
/* Team Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'team_extra_opt',
	'title' => 'Team Member Options',
	'pages' => array( 'team' ),
	'context' => 'normal',	

	'fields' => array(
	
		array(
			'name'		=> 'Designation',
			'id'		=> $prefix . 'popu_des_team',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		
		array(
		'name'		=> 'Right Side Image',
		'id'		=> $prefix . 'so_team_right_side_img',
		'clone'		=> false,
		'type'		=> 'image_advanced',
		'max_file_uploads' => '1',
		'desc'		=> '',
		),
		
		
		
	
		
	)
);


/* ----------------------------------------------------- */
/* Team Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'team_skill_opt',
	'title' => 'Team Member Skills Options',
	'pages' => array( 'team' ),
	'context' => 'normal',	

	'fields' => array(
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Skill Option', 'solonick' ),
			'id'   => $prefix . 'wr_team_sk_en',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
				'id'		=> $prefix . 'po_pu_team_sk_gr',
				'name'        => 'Skills Options',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Skills Options', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Data Title',
						'id'   => 'po_pu_se_i',
						'type' => 'text',
						'desc'		=> 'Photoshop',
					),
					
					array(
						'name' => 'Data Number',
						'id'   => 'po_pu_se_u',
						'type' => 'text',
						'desc'		=> 'e.x:95',
					),
					
					
					
				),
			),
			
			
		
	
		
	)
);


/* ----------------------------------------------------- */
/* Team Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'team_soicial_opt',
	'title' => 'Team Member Social Options',
	'pages' => array( 'team' ),
	'context' => 'normal',	

	'fields' => array(
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Social Option', 'solonick' ),
			'id'   => $prefix . 'wr_team_so_en',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
				'id'		=> $prefix . 'po_pu_team_so_gr',
				'name'        => 'Social Options',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Social Options', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Social Icon',
						'id'   => 'po_pu_so_i',
						'type' => 'text',
						'desc'		=> 'Use <a href="http://fontawesome.io/cheatsheet/" target="_blank">Fontawesome</a> Icon Class',
					),
					
					array(
						'name' => 'Social Profile URL',
						'id'   => 'po_pu_so_u',
						'type' => 'text',
						'desc'		=> 'e.x:https://www.facebook.com/solonick/',
					),
					
					
					
				),
			),
		
	
		
	)
);


/* ----------------------------------------------------- */
/* Timeline Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'timeline_extra_opt',
	'title' => 'Timeline Options',
	'pages' => array( 'timeline' ),
	'context' => 'normal',	

	'fields' => array(
	
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Timeline Type', 'solonick' ),
			'id'   => $prefix . 'wr_timeline_type',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Work', 'solonick' ),
				'st2' => esc_attr__( 'Education', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Featured Image Position', 'solonick' ),
			'id'   => $prefix . 'wr_image_timeline_type',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Left', 'solonick' ),
				'st2' => esc_attr__( 'Right', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Featured Image parallax Position', 'solonick' ),
			'id'   => $prefix . 'wr_image_parallax_timeline_type',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( '-170', 'solonick' ),
				'st2' => esc_attr__( '270', 'solonick' ),
				'st3' => esc_attr__( '100', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
	
		array(
			'name'		=> 'Sub Title',
			'id'		=> $prefix . 'popu_sub_timeline',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'popu_timeline_bt_text',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		array(
			'name'		=> 'Button URL',
			'id'		=> $prefix . 'popu_timeline_bt_url',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
	
	)
);

/* ----------------------------------------------------- */
/* service
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'service_page_types',
	'title' => 'Service Page Template Function',
	'show'   => array(
    'template'    => array( 'service.php' ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	
	

	'fields' => array(
		
		
		
		  
		  array(
				'name'       => esc_attr__( 'Number Of Post Show', 'blps' ),
				'id'         => $prefix . 'service-post-show',
				'desc'		=> '',
				'type'       => 'slider',
				// Text labels displayed before and after value
				'prefix'     => __( '', 'blps' ),
				'suffix'     => __( ' Posts', 'blps' ),
				'js_options' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
			),	

			array(
			'name'		=> 'Include Category',
			'id'		=> $prefix . 'service-post-cat',
			'desc'		=> 'Enter category name ex: web design, web development (Optional).<br>Working only if filter option  disable.',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> ''
		),
		
		
	)
);


/* ----------------------------------------------------- */
/* Service Post Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'service_extra_opt',
	'title' => 'Service Options',
	'pages' => array( 'service' ),
	'context' => 'normal',	

	'fields' => array(
	
		array(
			'name'		=> 'Icon',
			'id'		=> $prefix . 'popu_service_tab_i',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Use <a href="https://fontawesome.com/icons?d=listing" target="_blank">Fontawesome</a> Icon Class',
		),
		
		
		// SELECT BOX
		array(
			'name'     => esc_attr__( 'Extra Information', 'solonick' ),
			'id'   => $prefix . 'wr_service_so_en',
			'desc'  => esc_attr__( '', 'solonick' ),
			'type'     => 'select_advanced',
			// Array of 'value' => 'Label' pairs for select box
			'options'  => array(
				'st1' => esc_attr__( 'Disable', 'solonick' ),
				'st2' => esc_attr__( 'Enable', 'solonick' ),
				
				
			),
			// Select multiple values, optional. Default is false.
			'multiple'    => false,
			'std'         => 'st1',
			'placeholder' => esc_attr__( 'Select an Option', 'solonick' ),
		),
		
		array(
				'id'		=> $prefix . 'so_ser_data_tab',
				'name'        => 'Extra Information',
				'type'        => 'group',
				'clone'       => true,
				'sort_clone'  => true,
				'collapsible' => true,
				'group_title' => 'Extra Information', // ID of the subfield
				'save_state' => true,
				'fields' => array(
				
					
					array(
						'name' => 'Data Title',
						'id'   => $prefix . 'so_ser_data_title',
						'type' => 'text',
						'desc'		=> 'e.x: Concept',
					),
					
					array(
						'name' => 'Data URL',
						'id'   => $prefix . 'so_ser_data_url',
						'type' => 'text',
						'desc'		=> '',
					),
					
					
				),
			),
			
			array(
			'name'		=> 'Price',
			'id'		=> $prefix . 'popu_service_tab_p',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'e.x: 1190 $-2250 $ ',
		),
	
	)
);




/* ----------------------------------------------------- */
/* page Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'page_call_to_action_opt',
	'title' => 'Call To Action Options',
	'hide'   => array(
    'template'    => array( 'one-page.php', 'coming-soon.php' ),
	),
	'pages' => array( 'page', 'music', 'team', 'post', 'product' ),
	'context' => 'normal',	

	'fields' => array(
		
		
		array(
			'name'		=> 'Call To Action Title',
			'id'		=> $prefix . 'bl_call_to_title',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button URL',
			'id'		=> $prefix . 'bl_call_to_button',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Button Text',
			'id'		=> $prefix . 'bl_call_to_text',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
	
		
	)
);


/* ----------------------------------------------------- */
/* coming soon Type Metaboxes
/* ----------------------------------------------------- */
$meta_boxes[] = array(
	'id' => 'coming_soon_opt',
	'title' => 'Coming Soon Page Options',
	'show'   => array(
    'template'    => array( 'coming-soon.php' ),
	),
	'pages' => array( 'page' ),
	'context' => 'normal',	

	'fields' => array(
		
		
		array(
			'name'		=> 'Counter Option',
			'id'		=> $prefix . 'so_co_co_opt',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'e.x: 09/12/2019',
		),
		
		array(
			'name'		=> 'Subscribe Section Title',
			'id'		=> $prefix . 'so_co_sub_ti',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> '',
		),
		
		array(
			'name'		=> 'Form Shortcode',
			'id'		=> $prefix . 'so_co_mail_link',
			'clone'		=> false,
			'type'		=> 'text',
			'std'		=> '',
			'desc'		=> 'Use MailChimp form shortcode. E.X: [mc4wp_form id="264"]
',
		),
	
		
	)
);





/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function designer_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}

// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'designer_register_meta_boxes' );