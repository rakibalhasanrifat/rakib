<?php
/*
Plugin Name: Solonick Plugin
Plugin URI: http://webredox.net
Description: Declares a plugin that will create Page Settins, VC addons & Custom Post Type
Version: 3.0
Author: webRedox
Author URI: http://webredox.net
License: GPLv2
*/
define('SOLONICK_PLUGIN_PATH',		plugin_dir_path(__FILE__));
include SOLONICK_PLUGIN_PATH .'metaboxes.php';
include SOLONICK_PLUGIN_PATH .'meta-box-show-hide.php';
include SOLONICK_PLUGIN_PATH .'meta-box-group.php';
include (SOLONICK_PLUGIN_PATH .'meta-box-conditional-logic.php');
function solonick_register_metabox_list() {
require SOLONICK_PLUGIN_PATH .'/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'http://solonick.webredox.net/pluginupdate/details.json',
	__FILE__, //Full path to the main plugin file or functions.php.
	'solonick-plugin'
);
}
add_action('init', 'solonick_register_metabox_list');

global $solonick_options;


if( ! function_exists( 'portfolio_post_types' ) ) {
    function portfolio_post_types() {

        register_post_type(
            'portfolio',
            array(
                'labels' => array(
                    'name'          => __( 'Portfolios', 'portfolio' ),
                    'singular_name' => __( 'Portfolio', 'portfolio' ),
                    'add_new'       => __( 'Add New', 'portfolio' ),
                    'add_new_item'  => __( 'Add New Portfolio', 'portfolio' ),
                    'edit'          => __( 'Edit', 'portfolio' ),
                    'edit_item'     => __( 'Edit Portfolio', 'portfolio' ),
                    'new_item'      => __( 'New Portfolio', 'portfolio' ),
                    'view'          => __( 'View Portfolio', 'portfolio' ),
                    'view_item'     => __( 'View Portfolio', 'portfolio' ),
                    'search_items'  => __( 'Search Portfolio', 'portfolio' ),
                    'not_found'     => __( 'No Portfolio item found', 'portfolio' ),
                    'not_found_in_trash' => __( 'No portfolio item found in Trash', 'portfolio' ),
                    'parent'        => __( 'Parent Portfolio', 'portfolio' ),
                ),
                
                'description'       => __( 'Create a Portfolio.', 'portfolio' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
				'capability_type' => 'post',
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-portfolio',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Portfolio Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
        
        

    }
}

add_action( 'init', 'portfolio_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');


if( ! function_exists( 'music_post_types' ) ) {
    function music_post_types() {

        register_post_type(
            'music',
            array(
                'labels' => array(
                    'name'          => __( 'Music', 'music' ),
                    'singular_name' => __( 'Music', 'music' ),
                    'add_new'       => __( 'Add New', 'music' ),
                    'add_new_item'  => __( 'Add New Music', 'music' ),
                    'edit'          => __( 'Edit', 'music' ),
                    'edit_item'     => __( 'Edit Music', 'music' ),
                    'new_item'      => __( 'New Music', 'music' ),
                    'view'          => __( 'View Music', 'music' ),
                    'view_item'     => __( 'View Music', 'music' ),
                    'search_items'  => __( 'Search Music', 'music' ),
                    'not_found'     => __( 'No Music item found', 'music' ),
                    'not_found_in_trash' => __( 'No music item found in Trash', 'music' ),
                    'parent'        => __( 'Parent Music', 'portfolio' ),
                ),
                
                'description'       => __( 'Create a Music.', 'music' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
				'capability_type' => 'post',
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-format-audio',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('music_category', 'music', array('hierarchical' => true, 'label' => 'Music Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
        
        

    }
}

add_action( 'init', 'music_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');



if( ! function_exists( 'team_post_types' ) ) {
    function team_post_types() {

        register_post_type(
            'team',
            array(
                'labels' => array(
                    'name'          => __( 'Team', 'slider' ),
                    'singular_name' => __( 'Team', 'slider' ),
                    'add_new'       => __( 'Add New', 'slider' ),
                    'add_new_item'  => __( 'Add New Member', 'slider' ),
                    'edit'          => __( 'Edit', 'slider' ),
                    'edit_item'     => __( 'Edit Member', 'slider' ),
                    'new_item'      => __( 'New Member', 'slider' ),
                    'view'          => __( 'View Member', 'slider' ),
                    'view_item'     => __( 'View Member', 'slider' ),
                    'search_items'  => __( 'Search Member', 'slider' ),
                    'not_found'     => __( 'No member item found', 'slider' ),
                    'not_found_in_trash' => __( 'No member item found in Trash', 'slider' ),
                    'parent'        => __( 'Parent Member', 'slider' ),
                ),
                
                'description'       => __( 'Create a Member.', 'slider' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
				'capability_type' => 'post',
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-groups',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('team_category', 'team', array('hierarchical' => true, 'label' => 'Team Categories', 'singular_name' => 'Category', "rewrite" => true, "thumbnail" => true, "query_var" => true));
        
        

    }
}

add_action( 'init', 'team_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');



if( ! function_exists( 'timeline_post_types' ) ) {
    function timeline_post_types() {

        register_post_type(
            'timeline',
            array(
                'labels' => array(
                    'name'          => __( 'Timeline', 'slider' ),
                    'singular_name' => __( 'Timeline', 'slider' ),
                    'add_new'       => __( 'Add New', 'slider' ),
                    'add_new_item'  => __( 'Add New Timeline', 'slider' ),
                    'edit'          => __( 'Edit', 'slider' ),
                    'edit_item'     => __( 'Edit Timeline', 'slider' ),
                    'new_item'      => __( 'New Timeline', 'slider' ),
                    'view'          => __( 'View Timeline', 'slider' ),
                    'view_item'     => __( 'View Timeline', 'slider' ),
                    'search_items'  => __( 'Search Timeline', 'slider' ),
                    'not_found'     => __( 'No timeline item found', 'slider' ),
                    'not_found_in_trash' => __( 'No timeline item found in Trash', 'slider' ),
                    'parent'        => __( 'Parent Timeline', 'slider' ),
                ),
                
                'description'       => __( 'Create a Timeline.', 'slider' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
				'capability_type' => 'post',
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-backup',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('timeline_category', 'timeline', array('hierarchical' => true, 'label' => 'Timeline Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
        
        

    }
}

add_action( 'init', 'timeline_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');



if( ! function_exists( 'service_post_types' ) ) {
    function service_post_types() {

        register_post_type(
            'service',
            array(
                'labels' => array(
                    'name'          => __( 'Service', 'slider' ),
                    'singular_name' => __( 'Service', 'slider' ),
                    'add_new'       => __( 'Add New', 'slider' ),
                    'add_new_item'  => __( 'Add New Service', 'slider' ),
                    'edit'          => __( 'Edit', 'slider' ),
                    'edit_item'     => __( 'Edit Service', 'slider' ),
                    'new_item'      => __( 'New Service', 'slider' ),
                    'view'          => __( 'View Service', 'slider' ),
                    'view_item'     => __( 'View Service', 'slider' ),
                    'search_items'  => __( 'Search Service', 'slider' ),
                    'not_found'     => __( 'No service item found', 'slider' ),
                    'not_found_in_trash' => __( 'No service item found in Trash', 'slider' ),
                    'parent'        => __( 'Parent Service', 'slider' ),
                ),
                
                'description'       => __( 'Create a Service.', 'slider' ),
                'public'            => true,
                'show_ui'           => true,
                'show_in_menu'          => true,
                'publicly_queryable'    => true,
				'capability_type' => 'post',
                'exclude_from_search'   => true,
                'menu_position'         => 6,
                'hierarchical'      => false,
                'query_var'         => true,
				'menu_icon' => 'dashicons-megaphone',
                'supports'  => array (
                    'title', //Text input field to create a post title.
                    'editor',
                    'thumbnail',
                    
                )
            )
        );
register_taxonomy('service_category', 'service', array('hierarchical' => true, 'label' => 'Service Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
        
        

    }
}

add_action( 'init', 'service_post_types' ); // register post type

register_taxonomy_for_object_type('category', 'custom-type');

add_filter('widget_title', 'do_shortcode');
add_shortcode('span', 'wpse_shortcode_span');
function wpse_shortcode_span( $attr, $content ){ return '<span>'. $content . '</span>'; }
add_shortcode('br', 'wpse_shortcode_br');
function wpse_shortcode_br( $attr ){ return '<br>'; }

function solonick_social_media_icons( $solonick_contactmethods ) {
    // Add social media
    $solonick_contactmethods['socialtitle'] = 'Social Section Title';
    $solonick_contactmethods['twitter'] = 'Twitter';
    $solonick_contactmethods['facebook'] = 'Facebook';
    $solonick_contactmethods['instagram'] = 'Instagram';
    $solonick_contactmethods['tumblr'] = 'Tumblr';
    $solonick_contactmethods['pinterest'] = 'Pinterest';
    $solonick_contactmethods['youtube'] = 'Youtube';

    return $solonick_contactmethods;
}
add_filter('user_contactmethods','solonick_social_media_icons',10,1);

/* ==========================================
   Add featured image column to admin panel post list page
========================================== */
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);

function add_img_column($columns) {
	$columns['img'] = 'Thumbnail';
	return $columns;
}

function manage_img_column($column_name, $post_id) {
	if( $column_name == 'img' ) {
		echo get_the_post_thumbnail( $post_id, array( 80, 60) ); return true; // 80, 60 is for image size.
	}
}

// Change columns order
add_filter('manage_posts_columns', 'column_order');
function column_order($columns) {
  $n_columns = array();
  $move = 'img'; // what to move
  $before = 'title'; // move before this
  foreach($columns as $key => $value) {
    if ($key==$before){
      $n_columns[$move] = $move;
    }
      $n_columns[$key] = $value;
  }
  return $n_columns;
}

// Set columns width
function set_column_width() { ?>
	<style type="text/css">
		/*	Class ".column-img" is for image column */
		.edit-php .fixed .column-img { 
			width: 100px;
		}
	</style>
<?php }
add_action( 'admin_enqueue_scripts', 'set_column_width' );


/**
*
*
*
 * Allow shortcodes in widgets
 * @since v1.0
 */
add_filter('widget_text', 'do_shortcode');

if( !function_exists('symple_fix_shortcodes') ) {
	function symple_fix_shortcodes($content){   
		$array = array (
			'<p>['		=> '[', 
			']</p>'		=> ']', 
			']<br />'	=> ']'
		);
		$content = strtr($content, $array);
		return $content;
	}
	add_filter('the_content', 'symple_fix_shortcodes');
}





// Title
if(! function_exists('solonick_title_shortcode')){
	function solonick_title_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'image'=>'',
			'title'=>'',
			'subtitle'=>'',
			'number'=>'',
			
			
			), $atts) );
		if(is_numeric($image)) {
            $solonick_image = wp_get_attachment_url( $image );
        }else {
            $solonick_image = $image;
        }
		
		$html='';
		$dot="'";
		
		
		$html .= '<div class="fl-wrap  mar-bottom mar-top">';
		$html .= '<div class="pr-title fl-wrap">';
		$html .= '<h3>'.$title.'</h3>';
		$html .= '<span>'.$subtitle.'</span>';
		$html .= '</div>';
		if($number != ""){
		$html .= '<div class="ci-num"><span>'.$number.'. - </span></div>';
		}
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('solonick_title', 'solonick_title_shortcode');
}


// image
if(! function_exists('solonick_image_shortcode')){
	function solonick_image_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'',
			'image'=>'',
			'fancystyle'=>'',
			
			
			), $atts) );
		if(is_numeric($image)) {
            $solonick_image = wp_get_attachment_url( $image );
        }else {
            $solonick_image = $image;
        }
		
		$html='';
		$dot="'";
		
		
		if($fancystyle == "st2"){
		$html .= '<div class="collage-image fl-wrap">';
		}
		else {
		$html .= '<div class="fl-wrap">';
		}
		if($title != ""){
		$html .= '<div class="collage-image-title" data-scrollax="properties: { translateY: '.$dot.'150px'.$dot.' }">'.$title.'</div>';
		}
		$html .= '<img src="'.$solonick_image.'" class="respimg" alt="'.$title.'">';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('solonick_image', 'solonick_image_shortcode');
}



// feature 1
if(! function_exists('solonick_feature1_shortcode')){
	function solonick_feature1_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'image'=>'',
			'iconclass'=>'',
			'title'=>'',
			
			
			
			), $atts) );
		
		
		$html='';
		$dot="'";
		
		$html .= '<div class="main-about">';
		$html .= '<div class="features-box-container fl-wrap">';
		$html .= '<div class="row features-box">';
		if($iconclass != ""){
		$html .= '<div class="time-line-icon">
                  <i class="'.$iconclass.'"></i>
                  </div>';
		}
		
		
		$html .= '<h3>'.$title.'</h3>';
		$html .= '<p>'.$content.'   </p>';
		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('solonick_feature1', 'solonick_feature1_shortcode');
}


// feature 2
if(! function_exists('solonick_feature2_shortcode')){
	function solonick_feature2_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'image'=>'',
			'iconclass'=>'',
			'title'=>'',
			'number'=>'',
			
			
			
			), $atts) );
		
		
		$html='';
		$dot="'";
		
		$html .= '<div class="process-wrap fl-wrap">';
		$html .= '<ul>';
		$html .= '<li>';
		if($iconclass != ""){
		$html .= '<div class="time-line-icon">
                  <i class="'.$iconclass.'"></i>
                  </div>';
		}
		
		$html .= '<h4>'.$title.'</h4>';
		$html .= '<div class="process-details">';
		$html .= ''.$content.'   ';
		$html .= '</div>';
		if($number != ""){
		$html .= '<span class="process-numder">'.$number.'.</span>';
		}
		$html .= '</li>';
		$html .= '</ul>';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('solonick_feature2', 'solonick_feature2_shortcode');
}


// button
if(! function_exists('solonick_button_shortcode')){
	function solonick_button_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'image'=>'',
			'button_text'=>'My Portfolio',
			'button_url'=>'#',
			'button_target'=>'',
			
			
			), $atts) );
		
		
		$html='';
		$dot="'";
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
		
		
		$html .= '<div class="main-about">';
		$html .= '<a href="'.$button_url.'" class="btn float-btn flat-btn color-btn" target="'.$link_target_opt.'">'.$button_text.'</a>';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('solonick_button', 'solonick_button_shortcode');
}

// number counter
if(! function_exists('solonick_number_counter_shortcode')){
	function solonick_number_counter_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'iconclass'=>'',
			'datanumber'=>'',
			'datatitle'=>'',
			
			
			), $atts) );
		
		
		$html='';
		$dot="'";
		
		$html .= '<div class="fl-wrap facts-holder solonick-facts">';
			
		$html .= '<div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="'.$datanumber.'">0</div>
                                            </div>
                                        </div>
                                        <h6>'.$datatitle.'</h6>
                                    </div>
                                </div>';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('solonick_number_counter', 'solonick_number_counter_shortcode');
}


// Team Member list
if(! function_exists('solonick_team_member_list_shortcode')){
	function solonick_team_member_list_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'postcount'=>'',
			'postoffset'=>'',
			'categoryname'=>'',
			'details'=>'Details',
			
			
			), $atts) );
		
		
		$html='';
		
		
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'team','team_category'=> $categoryname, 'posts_per_page'=> $postcount, 'post_status' => 'publish, future', 'offset' => $postoffset) );
 		while ( $loop->have_posts() ) : $loop->the_post();
		$html .= '<!-- team-box -->';
		$html .= '<div class="team-box">';
		if (has_post_thumbnail( $post->ID ) ):
		$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solonick_team_image' );
		$html .= '<div class="team-photo">';
		$html .= '<div class="overlay"></div>';
		$html .= '<a href="'.get_the_permalink().'">'.$details.'</a>';
		$html .='<img src="';
			$html .= $solonick_image[0];
			$html .='" class="respimg" alt="';
			$html .= get_the_title();
			$html .='">';
		$html .= '</div>';
		endif;
			$html .= '<div class="team-info">';
			$html .= '<h3>';
			$html .= '<a href="'.get_the_permalink().'">';
			$html .= get_the_title();
			$html .= '</a>';
			$html .= '</h3>';
			if (( get_post_meta($post->ID,'rnr_popu_des_team',true))):
			$html .= '<h4>';
			$html .=get_post_meta($post->ID,'rnr_popu_des_team',true);
			$html .='</h4>';
			endif;
			$html .= '<p>';
			$html .= substr(strip_tags($post->post_content), 0, 120);
			$html .= '...</p>';
			if(get_post_meta($post->ID,'rnr_wr_team_so_en',true)=='st2'){
			$html .= '<ul class="team-social">';
			$solonick_car_slide_opt = rwmb_meta( 'rnr_po_pu_team_so_gr' );
			if ( ! empty( $solonick_car_slide_opt ) ) {
			foreach ( $solonick_car_slide_opt as $solonick_car_slide_opts ) {
			$solonick_so_i = isset( $solonick_car_slide_opts['po_pu_so_i'] ) ? $solonick_car_slide_opts['po_pu_so_i'] : '';
			$solonick_so_u = isset( $solonick_car_slide_opts['po_pu_so_u'] ) ? $solonick_car_slide_opts['po_pu_so_u'] : '';
			if ( !empty( $solonick_so_i ) ) {
			if ( !empty( $solonick_so_u ) ) {
			$html .= '<li><a href="'.$solonick_so_u.'" target="_blank"><i class="'.$solonick_so_i.'"></i></a></li>';
			} }
			} }
			$html .= '</ul>';
			}
			else {
			}
			$html .= '</div>';
		$html .= '</div>';
		
		endwhile;
		wp_reset_postdata();
		
		
		
		
				
		return $html;
	}
	add_shortcode('solonick_team_member_list', 'solonick_team_member_list_shortcode');
}


// video
if(! function_exists('solonick_video_shortcode')){
	function solonick_video_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'videotype'=>'',
			'vimeovideo'=>'https://vimeo.com/110234211',
			'image'=>'',
			'popvideo'=>'',
			'subtitle'=>'',
			
			
			), $atts) );
			
			if(is_numeric($image)) {
            $solonick_image = wp_get_attachment_url( $image );
        }else {
            $solonick_image = $image;
        }
		
		
		$html='';
		$dot="'";
		
		$html .= '<div class="video-box fl-wrap">';
		$html .= '<img src="'.$solonick_image.'" class="respimg" alt="">';
		$html .= '<a class="video-box-btn color-bg image-popup" href="'.$vimeovideo.'"><i class="fal fa-play" aria-hidden="true"></i></a>';
		$html .= '</div>';
		
		
				
		return $html;
	}
	add_shortcode('solonick_videos', 'solonick_video_shortcode');
}


// Timeline
if(! function_exists('solonick_timeline_shortcode')){
	function solonick_timeline_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'postcount'=>'',
			'postoffset'=>'',
			'categoryname'=>'',
			'button_text'=>'Download',
			'button_url'=>'',
			'button_target'=>'',
			
			
			), $atts) );
		
		$dot="'";
		$parim="";
		$html='';
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
		
		$html .= '<div class="custom-inner-holder">';
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'timeline','timeline_category'=> $categoryname, 'posts_per_page'=> $postcount, 'post_status' => 'publish, future', 'offset' => $postoffset) );
		$solonick_counter = 01;
 		while ( $loop->have_posts() ) : $loop->the_post();
			$html .= '<div class="custom-inner">';
			$html .= '<div class="row">';
				$html .= '<div class="col-md-4">';
				if(get_post_meta($post->ID,'rnr_wr_timeline_type',true)=='st2'){
				$html .= '<div class="custom-inner-header educ">';
				$html .= '<i class="fa fa-university"></i>';
				}
				else {
				$html .= '<div class="custom-inner-header workres">';
				$html .= '<i class="fa fa-briefcase"></i>';
				}
				$html .= '<h3>';
				$html .= get_the_title();
				$html .= '</h3>';
				if (( get_post_meta($post->ID,'rnr_popu_sub_timeline',true))):
				$html .= '<span>';
				$html .=get_post_meta($post->ID,'rnr_popu_sub_timeline',true);
				$html .= '</span>';
				endif;
				$html .= '</div>';
				$html .= '<div class="ci-num"><span>0'.$solonick_counter.'. -</span></div>';
				$html .= '</div>';
				if (has_post_thumbnail( $post->ID ) ):
				$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
				if(get_post_meta($post->ID,'rnr_wr_image_parallax_timeline_type',true)=='st2'){
				$parim="270";
				}
				else if(get_post_meta($post->ID,'rnr_wr_image_parallax_timeline_type',true)=='st3'){
				$parim="100";
				}
				else {
				$parim="-170";
				}
				
				if(get_post_meta($post->ID,'rnr_wr_image_timeline_type',true)=='st2'){
				
				
				$html .= '<div class="col-md-5">';
				$html .= '<div class="custom-inner-content fl-wrap">';
				$html .= get_the_content();
				if (( get_post_meta($post->ID,'rnr_popu_timeline_bt_text',true))):
				if (( get_post_meta($post->ID,'rnr_popu_timeline_bt_url',true))):
				$html .= '<a href="';
				$html .=get_post_meta($post->ID,'rnr_popu_timeline_bt_url',true);
				$html .= '" class="cus-inner-head-link color-bg">';
				$html .=get_post_meta($post->ID,'rnr_popu_timeline_bt_text',true);
				$html .= '</a>';
				endif;
				endif;
				$html .= '</div>';
				$html .= '</div>';
				$html .= '<div class="col-md-3">';
				$html .= '<img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" data-scrollax="properties: { translateY: '.$dot.''.$parim.'px'.$dot.' }" alt="';
						$html .= get_the_title();
						$html .= '">';
				$html .= '</div>';
				}
				else {
				$html .= '<div class="col-md-4">';
				$html .= '<img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" data-scrollax="properties: { translateY: '.$dot.''.$parim.'px'.$dot.' }" alt="';
						$html .= get_the_title();
						$html .= '">';
				$html .= '</div>';
				$html .= '<div class="col-md-4">';
				$html .= '<div class="custom-inner-content fl-wrap">';
				$html .= get_the_content();
				if (( get_post_meta($post->ID,'rnr_popu_timeline_bt_text',true))):
				if (( get_post_meta($post->ID,'rnr_popu_timeline_bt_url',true))):
				$html .= '<a href="';
				$html .=get_post_meta($post->ID,'rnr_popu_timeline_bt_url',true);
				$html .= '" class="cus-inner-head-link color-bg">';
				$html .=get_post_meta($post->ID,'rnr_popu_timeline_bt_text',true);
				$html .= '</a>';
				endif;
				endif;
				$html .= '</div>';
				$html .= '</div>';
				}
				else :
				$html .= '<div class="col-md-8">';
				$html .= '<div class="custom-inner-content fl-wrap">';
				$html .= get_the_content();
				if (( get_post_meta($post->ID,'rnr_popu_timeline_bt_text',true))):
				if (( get_post_meta($post->ID,'rnr_popu_timeline_bt_url',true))):
				$html .= '<a href="';
				$html .=get_post_meta($post->ID,'rnr_popu_timeline_bt_url',true);
				$html .= '" class="cus-inner-head-link color-bg">';
				$html .=get_post_meta($post->ID,'rnr_popu_timeline_bt_text',true);
				$html .= '</a>';
				endif;
				endif;
				$html .= '</div>';
				$html .= '</div>';
				endif;
			$html .= '</div>';
			$html .= '</div>';
			$solonick_counter++;
			endwhile;
			wp_reset_postdata();
		$html .= '</div>';
		if($button_url != ""){
		$html .= '<a href="'.$button_url.'" class="btn float-btn flat-btn color-btn mar-top" target="'.$link_target_opt.'">'.$button_text.'</a>';
		}
		
		
		
		
				
		return $html;
	}
	add_shortcode('solonick_timeline', 'solonick_timeline_shortcode');
}



// portfolio
if(! function_exists('solonick_portfolio_shortcode')){
	function solonick_portfolio_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'postcount'=>'',
			'postoffset'=>'',
			'categoryname'=>'',
			'button_text'=>'My Portfolio',
			'button_url'=>'',
			'button_target'=>'',
			'subtitle'=>'',
			'title'=>'',
			'sl_post_type'=>'',
			'sl_post_details_type'=>'',
			'slidestoshow'=>'4',
			
			
			), $atts) );
		
		$dot="'";
		$parim="";
		$html='';
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
		
		
		$html .= '<div class="fet_pr-carousel-title">';
		$html .= '<div class="fet_pr-carousel-title-item">';
		if($title != ""){
		$html .= '<h3>'.$title.'</h3>';
		}
		if($subtitle != ""){
		$html .= '<p>'.$subtitle.'</p>';
		}
		if($button_url != ""){
		$html .= '<a href="'.$button_url.'" class="btn float-btn flat-btn color-btn mar-top" target="'.$link_target_opt.'">'.$button_text.'</a>';
		}
		$html .= '</div>';
		$html .= '</div>';
		
		$html .= '<div class="slider-carousel-wrap fl-wrap">';
		$html .= '<div class="fet_pr-carousel cur_carousel-slider-container fl-wrap" data-slide-show="'.$slidestoshow.'">';
		if($sl_post_type == "st2"){
		//blog post
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'post','category_name'=> $categoryname, 'posts_per_page'=> $postcount, 'post_status' => 'publish, future', 'offset' => $postoffset) );
		
 		while ( $loop->have_posts() ) : $loop->the_post();
		$solonick_portfolio_category = wp_get_post_terms($post->ID,'category');
		$solonick_class = ""; 
		$solonick_categories = ""; 
		foreach ($solonick_portfolio_category as $solonick_item) {
		$solonick_class.=esc_attr($solonick_item->slug . ' ');
		$solonick_categories.='<a ';
		$solonick_categories.=' href="'.get_home_url( '/' ).'/category/';
		$solonick_categories.=esc_attr($solonick_item->slug . ' ');
		$solonick_categories.='">';
		$solonick_categories.=esc_attr($solonick_item->name . '  ');
		$solonick_categories.='</a>';
		}
		if (has_post_thumbnail( $post->ID ) ):
		$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		// link
		$link_disable_opt ='';
		if($sl_post_details_type == "st2"){
		$link_disable_opt .='#0';
		}
		else {
		$link_disable_opt .= get_the_permalink();
		}
		$html .= '<div class="slick-item">';
		$html .= '<div class="fet_pr-carousel-box">';
			$html .= '<div class="fet_pr-carousel-box-media fl-wrap">';
			if($sl_post_details_type == "st2"){
			$html .= '<img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '">';
			}
			else {
			$html .= '<a href="'.get_the_permalink().'"><img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '"></a>';
			}
			
			$html .= '<a href="';
			$html .= $solonick_image[0];
			$html .= '" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-search"></i></a>';
			
			$html .= '</div>';
			$html .= '<div class="fet_pr-carousel-box-text fl-wrap">';
			$html .= '<h3>';
			$html .= '<a href="';
			$html .= ''.$link_disable_opt.'';
			$html .= '">';
			$html .= get_the_title();
			$html .= '</a>';
			$html .= '</h3>';
			$html .= '<div class="fet_pr-carousel-cat">'.$solonick_categories.'';
			$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		endif;
		endwhile;
		wp_reset_postdata();
		
		}
		else if($sl_post_type == "st3"){
		
		//music post
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'music','music_category'=> $categoryname, 'posts_per_page'=> $postcount, 'post_status' => 'publish, future', 'offset' => $postoffset) );
		
 		while ( $loop->have_posts() ) : $loop->the_post();
		$solonick_portfolio_category = wp_get_post_terms($post->ID,'music_category');
		$solonick_class = ""; 
		$solonick_categories = ""; 
		foreach ($solonick_portfolio_category as $solonick_item) {
		$solonick_class.=esc_attr($solonick_item->slug . ' ');
		$solonick_categories.='<a ';
		$solonick_categories.=' href="'.get_home_url( '/' ).'/music_category/';
		$solonick_categories.=esc_attr($solonick_item->slug . ' ');
		$solonick_categories.='">';
		$solonick_categories.=esc_attr($solonick_item->name . '  ');
		$solonick_categories.='</a>';
		}
		if (has_post_thumbnail( $post->ID ) ):
		$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		// link
		$link_disable_opt ='';
		if($sl_post_details_type == "st2"){
		$link_disable_opt .='#0';
		}
		else {
		$link_disable_opt .= get_the_permalink();
		}
		$html .= '<div class="slick-item">';
		$html .= '<div class="fet_pr-carousel-box">';
			$html .= '<div class="fet_pr-carousel-box-media fl-wrap">';
			if($sl_post_details_type == "st2"){
			$html .= '<img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '">';
			}
			else {
			$html .= '<a href="'.get_the_permalink().'"><img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '"></a>';
			}
			
			$html .= '<div data-audiopath="';
			$html .= get_post_meta($post->ID,'rnr_music_mp3_opt',true);
			$html .= '" class="fet_pr-carousel-box-media-zoom wr-music-element album-preview"><i class="fal fa-play"></i></div>';
			
			$html .= '</div>';
			$html .= '<div class="fet_pr-carousel-box-text fl-wrap">';
			$html .= '<h3>';
			$html .= '<a href="';
			$html .= ''.$link_disable_opt.'';
			$html .= '">';
			$html .= get_the_title();
			$html .= '</a>';
			$html .= '</h3>';
			$html .= '<div class="fet_pr-carousel-cat">'.$solonick_categories.'';
			$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		endif;
		endwhile;
		wp_reset_postdata();
		
		}
		else if($sl_post_type == "st4"){
			
		//team post
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'team','team_category'=> $categoryname, 'posts_per_page'=> $postcount, 'post_status' => 'publish, future', 'offset' => $postoffset) );
		
 		while ( $loop->have_posts() ) : $loop->the_post();
		$solonick_portfolio_category = wp_get_post_terms($post->ID,'team_category');
		$solonick_class = ""; 
		$solonick_categories = ""; 
		foreach ($solonick_portfolio_category as $solonick_item) {
		$solonick_class.=esc_attr($solonick_item->slug . ' ');
		$solonick_categories.='<a ';
		$solonick_categories.=' href="'.get_home_url( '/' ).'/team_category/';
		$solonick_categories.=esc_attr($solonick_item->slug . ' ');
		$solonick_categories.='">';
		$solonick_categories.=esc_attr($solonick_item->name . '  ');
		$solonick_categories.='</a>';
		}
		if (has_post_thumbnail( $post->ID ) ):
		$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		// link
		$link_disable_opt ='';
		if($sl_post_details_type == "st2"){
		$link_disable_opt .='#0';
		}
		else {
		$link_disable_opt .= get_the_permalink();
		}
		$html .= '<div class="slick-item">';
		$html .= '<div class="fet_pr-carousel-box">';
			$html .= '<div class="fet_pr-carousel-box-media fl-wrap">';
			if($sl_post_details_type == "st2"){
			$html .= '<img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '">';
			}
			else {
			$html .= '<a href="'.get_the_permalink().'"><img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '"></a>';
			}
			
			$html .= '<a href="';
			$html .= $solonick_image[0];
			$html .= '" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-search"></i></a>';
			
			$html .= '</div>';
			$html .= '<div class="fet_pr-carousel-box-text fl-wrap">';
			$html .= '<h3>';
			$html .= '<a href="';
			$html .= ''.$link_disable_opt.'';
			$html .= '">';
			$html .= get_the_title();
			$html .= '</a>';
			$html .= '</h3>';
			$html .= '<div class="fet_pr-carousel-cat">'.$solonick_categories.'';
			$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		endif;
		endwhile;
		wp_reset_postdata();
		}
		else {
		//portfolio post
		global $post;
		$paged=(get_query_var('paged'))?get_query_var('paged'):1;
		$loop = new WP_Query( array( 'post_type' => 'portfolio','portfolio_category'=> $categoryname, 'posts_per_page'=> $postcount, 'post_status' => 'publish, future', 'offset' => $postoffset) );
		
 		while ( $loop->have_posts() ) : $loop->the_post();
		$solonick_portfolio_category = wp_get_post_terms($post->ID,'portfolio_category');
		$solonick_class = ""; 
		$solonick_categories = ""; 
		foreach ($solonick_portfolio_category as $solonick_item) {
		$solonick_class.=esc_attr($solonick_item->slug . ' ');
		$solonick_categories.='<a ';
		$solonick_categories.=' href="'.get_home_url( '/' ).'/portfolio_category/';
		$solonick_categories.=esc_attr($solonick_item->slug . ' ');
		$solonick_categories.='">';
		$solonick_categories.=esc_attr($solonick_item->name . '  ');
		$solonick_categories.='</a>';
		}
		if (has_post_thumbnail( $post->ID ) ):
		$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '' );
		// link
		$link_disable_opt ='';
		if($sl_post_details_type == "st2"){
		$link_disable_opt .='#0';
		}
		else {
		$link_disable_opt .= get_the_permalink();
		}
		$html .= '<div class="slick-item">';
		$html .= '<div class="fet_pr-carousel-box">';
			$html .= '<div class="fet_pr-carousel-box-media fl-wrap">';
			if($sl_post_details_type == "st2"){
			$html .= '<img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '">';
			}
			else {
			$html .= '<a href="'.get_the_permalink().'"><img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '"></a>';
			}
			if(get_post_meta($post->ID,'rnr_post-popup-option',true)=='st2'){
			if (( get_post_meta($post->ID,'rnr_post_popup_video',true))):
			$html .= '<a href="';
			$html .= get_post_meta($post->ID,'rnr_post_popup_video',true);
			$html .= '" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-play"></i></a>';
			endif;
			}
			else {
			$html .= '<a href="';
			$html .= $solonick_image[0];
			$html .= '" class="fet_pr-carousel-box-media-zoom   image-popup"><i class="fal fa-search"></i></a>';
			}
			$html .= '</div>';
			$html .= '<div class="fet_pr-carousel-box-text fl-wrap">';
			$html .= '<h3>';
			$html .= '<a href="';
			$html .= ''.$link_disable_opt.'';
			$html .= '">';
			$html .= get_the_title();
			$html .= '</a>';
			$html .= '</h3>';
			$html .= '<div class="fet_pr-carousel-cat">'.$solonick_categories.'';
			$html .= '</div>';
			$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		endif;
		endwhile;
		wp_reset_postdata();
		}
		$html .= '</div>';
		$html .= '<div class="sp-cont sp-arr sp-cont-prev"><i class="fal fa-long-arrow-left"></i></div>
                            <div class="sp-cont sp-arr sp-cont-next"><i class="fal fa-long-arrow-right"></i></div>';
		$html .= '</div>';
		$html .= '<div class="fet_pr-carousel-counter sol-car-po-slider"></div>';
		if($sl_post_type == "st3"){
		$html .= '<audio id="preview-sound" src="/"></audio>';
		}
		
		
		
		
				
		return $html;
	}
	add_shortcode('solonick_portfolio', 'solonick_portfolio_shortcode');
}


// Service
if(! function_exists('solonick_service_shortcode')){
	function solonick_service_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'postcount'=>'',
			'postoffset'=>'',
			'categoryname'=>'',
			
			), $atts) );
		
		
		$html='';
		
		
		$html .= '<div class="fl-wrap serv-wrap">';
		$html .= '<div class="row">';
				$html .= '<div class="col-md-3">';
				$html .= '<ul class="tabs sl-tabs fix-tab">';
				global $post;
				$paged=(get_query_var('paged'))?get_query_var('paged'):1;
				$loop = new WP_Query( array( 'post_type' => 'service','service_category'=> $categoryname, 'posts_per_page'=> $postcount, 'post_status' => 'publish, future', 'offset' => $postoffset) );
				$counter = 0;
				while ( $loop->have_posts() ) : $loop->the_post();
				$counter++;
				if ($counter  == 1) :
				$html .= '<li class="tab-link current" data-tab="';
				$html .= get_the_ID();
				$html .= '">';
				else :
				$html .= '<li class="tab-link" data-tab="';
				$html .= get_the_ID();
				$html .= '">';
				endif;
				$html .= '<div class="tb-item">';
				if (( get_post_meta($post->ID,'rnr_popu_service_tab_i',true))):
				$html .= '<i class="fa ';
				$html .=get_post_meta($post->ID,'rnr_popu_service_tab_i',true);
				$html .= '"></i>';
				else:
				$html .= '<i class="fa fa-align-left"></i>';
				endif;
				$html .= '<h3>';
				$html .= get_the_title();
				$html .= '</h3>';
				$html .= '</div>';
				$html .= '</li>';
				endwhile;
				wp_reset_postdata();
				$html .= '</ul>';
				$html .= '</div>';
					$html .= '<div class="col-md-9">';
					global $post;
					$paged=(get_query_var('paged'))?get_query_var('paged'):1;
					$loop = new WP_Query( array( 'post_type' => 'service','service_category'=> $categoryname, 'posts_per_page'=> $postcount, 'post_status' => 'publish, future', 'offset' => $postoffset) );
					$counter = 0;
					while ( $loop->have_posts() ) : $loop->the_post();
					$counter++;
					if ($counter  == 1) :
					$html .= '<div id="';
					$html .= get_the_ID();
					$html .= '" class="tab-content current">';
					else :
					$html .= '<div id="';
					$html .= get_the_ID();
					$html .= '" class="tab-content">';
					endif;
					$html .= '<div class="row">';
					if (has_post_thumbnail( $post->ID ) ):
					$solonick_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'solonick_service_image' );
					if(get_post_meta($post->ID,'rnr_wr_service_so_en',true)=='st2'){
						$html .= '<div class="col-md-7">';
					}
					else {
						$html .= '<div class="col-md-12">';
					}
						$html .= '<div class="box-item vis-det fl-wrap">';
						$html .= '<img src="';
						$html .= $solonick_image[0];
						$html .= '" class="respimg" alt="';
						$html .= get_the_title();
						$html .= '">';
						$html .= '<a data-src="';
						$html .= $solonick_image[0];
						$html .= '" class="image-popup"><i class="fa fa-search"></i></a>';
						$html .= '</div>';
						$html .= '</div>';
					endif;
					if(get_post_meta($post->ID,'rnr_wr_service_so_en',true)=='st2'){
					if (has_post_thumbnail( $post->ID ) ):
						$html .= '<div class="col-md-5">';
					else:
						$html .= '<div class="col-md-8">';
					endif;
						$html .= '<ul class="dec-list">';
						$solonick_car_slide_opt = rwmb_meta( 'rnr_po_pu_service_so_gr' );
						if ( ! empty( $solonick_car_slide_opt ) ) {
						foreach ( $solonick_car_slide_opt as $solonick_car_slide_opts ) {
						$solonick_se_t = isset( $solonick_car_slide_opts['po_pu_se_t'] ) ? $solonick_car_slide_opts['po_pu_se_t'] : '';
						if ( !empty( $solonick_se_t ) ) {
						$html .= '<li> '.$solonick_se_t.'</li>';
						}
						} }
						$html .= '</ul>';
						if (( get_post_meta($post->ID,'rnr_popu_service_tab_p',true))):
						$html .= '<span class="price">';
						$html .=get_post_meta($post->ID,'rnr_popu_service_tab_p',true);
						$html .= '</span>';
						endif;
						$html .= '</div>';
					}
					else {
					}
					$html .= '</div>';
					$html .= get_the_content();
					
					$html .= '</div>';
					endwhile;
					wp_reset_postdata();
					$html .= '</div>';
		$html .= '</div>';
		$html .= '<div class="limit-box fl-wrap"></div>';
		$html .= '</div>';
		
		
		
		
				
		return $html;
	}
	add_shortcode('solonick_service', 'solonick_service_shortcode');
}



// Call To Action
if(! function_exists('solonick_call_to_action1_shortcode')){
	function solonick_call_to_action1_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'Need more info ? Visit my services page :  ',
			'button_text'=>'My Services',
			'button_url'=>'',
			'button_target'=>'',
			
			
			), $atts) );
		
		
		$html='';
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
		
		$html .= '<div class="fl-wrap mar-top">';
		$html .= '<div class="srv-link-text">';
		$html .= '<h4>'.$title.'</h4>';
		if($button_url != ""){
		$html .= '<a href="'.$button_url.'" class="btn float-btn flat-btn color-btn" target="'.$link_target_opt.'">'.$button_text.'</a>';
		}
		$html .= '</div>';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('solonick_call_to_action1', 'solonick_call_to_action1_shortcode');
}


// Call To Action 2
if(! function_exists('solonick_call_to_action2_shortcode')){
	function solonick_call_to_action2_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'title'=>'Ready To order Your Project ?',
			'button_text'=>'Get In Touch',
			'button_url'=>'#',
			'button_target'=>'',
			
			
			), $atts) );
		
		
		$html='';
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
		
		
		$html .= '<div class="row call-to-2">';
		$html .= '<div class="col-md-8">
                                    <h3>'.$title.'</h3>
                                </div>';
		
		$html .= '<div class="col-md-4"><a href="'.$button_url.'" target="'.$link_target_opt.'" class="btn flat-btn color-btn">'.$button_text.'</a> </div>';
		$html .= '</div>';
		
		
				
		return $html;
	}
	add_shortcode('solonick_call_to_action2', 'solonick_call_to_action2_shortcode');
}






// Contact Info
if(! function_exists('solonick_contact_info_shortcode')){
	function solonick_contact_info_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'title'=>'',
			'iconclass'=>'',
			'datanumber'=>'',
			'datatitle'=>'',
			
			
			), $atts) );
		
		
		$html='';
		$dot="'";
		
		$html .= '<div class="mar-top mar-bottom">';
		$html .= '<div class="features-box-container single-serv fl-wrap">';
		$html .= '<div class="features-box">';
		if($iconclass != ""){
		$html .= '<div class="time-line-icon">
                   <i class="'.$iconclass.'"></i>
                   </div>';
		}
		if($title != ""){
		$html .= '<h3>'.$title.'</h3>';
		}
		$html .= do_shortcode($content);
		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
		
				
		return $html;
	}
	add_shortcode('solonick_contact_info', 'solonick_contact_info_shortcode');
}


// google map
if(! function_exists('solonick_map_shortcode')){
	function solonick_map_shortcode($atts, $content = null){
		extract(shortcode_atts( array(
			'class'=>'',
			'id'=>'',
			'image'=>'',
			'title'=>'',
			'subtitle'=>'',
			'latitude'=>'',
			'longitude'=>'',
			'address'=>'',
			'map_url'=>'',
			
			
			), $atts) );
		if(is_numeric($image)) {
            $solonick_image = wp_get_attachment_url( $image );
        }else {
            $solonick_image = $image;
        }
		
		$html='';
		$dot="'";
		if(is_numeric($image)) {
		$map_marker =''.$solonick_image.'';
		}
		else {
		$map_marker =''.SOLONICK_THEME_URL.'/includes/images/marker.png';
		}
		$map_url_opt="";
		if($map_url == "st2"){
		$map_url_opt="//{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png";
		}
		else if($map_url == "st3"){
		$map_url_opt="//{s}.tiles.wmflabs.org/bw-mapnik/{z}/{x}/{y}.png";
		}
		else {
		$map_url_opt="//{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}.png";	
		}

		$html .= '<div class="fw-map-container fl-wrap mar-bottom">
                                <div class="map-container">
                                    <div id="singleMap" data-map-back="'.$map_url_opt.'" data-latlog="['.$latitude.']" data-popuptext="'.$address.'" data-popupicon="'.$map_marker.'"></div>
                                </div>
                            </div>';
		
				
		return $html;
	}
	add_shortcode('solonick_map', 'solonick_map_shortcode');
}





?>