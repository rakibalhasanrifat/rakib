<?php
define('SOLONICK_THEME_PATH',		get_template_directory());
define('SOLONICK_THEME_URL',		get_template_directory_uri());
require (SOLONICK_THEME_PATH . '/includes/style.php');
// Enqueue JS
require (SOLONICK_THEME_PATH . '/includes/js.php');
require (SOLONICK_THEME_PATH . '/includes/color.php');
require (SOLONICK_THEME_PATH . '/includes/AfterSetupTheme.php');
require (SOLONICK_THEME_PATH . '/includes/functions.php');
require (SOLONICK_THEME_PATH . '/pagination.php');
require (SOLONICK_THEME_PATH . '/admin/solonick-base.php'); 
//Widget
require (SOLONICK_THEME_PATH . '/solonick-widget/solonick-widget.php');

if ( ! isset( $content_width ) ) $content_width = 900;	

$solonick_options = get_option('solonick');

// register nav menu
function solonick_register_menus() {
register_nav_menus( array( 
'top-menu' => esc_html__( 'Primary menu','solonick' ),
)
		);
}

add_action( 'after_setup_theme', 'solonick_setup' );
function solonick_setup() {
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	// Enqueue editor styles.
	add_editor_style( 'style-editor.css' );
	
	// Add custom editor font sizes.
	add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Small', 'solonick' ),
					'shortName' => esc_html__( 'S', 'solonick' ),
					'size'      => 10,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'solonick' ),
					'shortName' => esc_html__( 'M', 'solonick' ),
					'size'      => 11,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'solonick' ),
					'shortName' => esc_html__( 'L', 'solonick' ),
					'size'      => 36,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'solonick' ),
					'shortName' => esc_html__( 'XL', 'solonick' ),
					'size'      => 49,
					'slug'      => 'huge',
				),
			)
		);
	
	add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_html__( 'Lightning Yellow', 'solonick' ),
            'slug' => 'lightning-yellow',
            'color' => '#FAC921',
        ),
        array(
            'name' => esc_html__( 'Black', 'solonick' ),
            'slug' => 'color-black',
            'color' => '#000',
        ),
        
    ) );
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	
	add_action( 'after_setup_theme', 'solonick_lang_setup' );
	function solonick_lang_setup(){
    load_theme_textdomain('solonick', get_template_directory() . '/languages');
    }
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );
	add_theme_support( "title-tag" );
	add_theme_support( 'post-formats', array('image','video','gallery') );
	add_post_type_support( 'portgallery', 'post-formats' );
}
// Word Limit 
	function solonick_string_limit_words($string, $word_limit)
	{
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
	}
// Add post thumbnail functionality
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 559, 220, true ); // Normal post thumbnails
	add_image_size( 'solonick_blog_image', 370, 208, true ); // Blog Thumbnail
	add_image_size( 'solonick_portfolio_image', 758, 520, true ); // Portfolio Thumbnail
	add_image_size( 'solonick_portfolio_image_gallery_car', 604, 400, true ); // Portfolio Thumbnail
	add_image_size( 'solonick_music_post', 600, 600, true ); // music Thumbnail
	add_image_size( 'solonick_music_cover', 349, 395, true ); // music Thumbnail
	add_image_size( 'solonick_team_image', 349, 233, true ); // Team Thumbnail
	add_image_size( 'solonick_team_single_image', 449, 628, true ); // Team Thumbnail
	add_image_size( 'solonick_service_image', 549, 309, true ); // Service Thumbnail
	
	
function solonick_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
 
add_filter( 'comment_form_fields', 'solonick_move_comment_field_to_bottom' );

// How comments are displayed
function solonick_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
if ( 'div' == $args['style'] ) {
      $tag = 'div';
      $add_below = 'comment';
    } else {
      $tag = 'li';
      $add_below = 'div-comment';
    }
?>
    <<?php echo esc_attr($tag); ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?>>
    <?php if ( 'div' != $args['style'] ) : ?>
	
	
	
    <?php endif; ?>
    
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<div class="comment-author">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, '50' ); ?>
    </div>
	<cite class="fn"><?php printf(__('%s','solonick'), get_comment_author_link()) ?></cite>
	<div class="comment-meta">
    <h6><a href="#"><?php comment_date(get_option( 'date_format')); ?></a> / <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></h6>
    </div>
	
	
	
	 <div class="comment-text fl-wrap">
		<?php comment_text() ?>
	</div>
	
	</div>
   
     
	 
     <div class="clearfix"></div>
      <?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.','solonick') ?></em>
    <br />
	
   <?php endif; ?>    
<?php if ( 'div' != $args['style'] ) : ?>
    
    <?php endif; ?>
<?php
        }
// create sidebar & widget area
if(function_exists('register_sidebar')) {
function solonick_theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Blog Sidebar', 'solonick' ),
        'id' => 'sidebar-1',
        'description' => esc_html__( 'This area for Blog widgets.', 'solonick' ),
        'before_widget' => '<div id="%1$s" class="widget widget-wrap fl-wrap single-side-bar %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h4 class="widget-title">', 
		'after_title'   => '</h4>'
    ) );
}
add_action( 'widgets_init', 'solonick_theme_slug_widgets_init' );

function solonick_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Page Sidebar', 'solonick' ),
        'id' => 'sidebar-2',
        'description' => esc_html__( 'This area for Page Sidebar widgets.', 'solonick' ),
        'before_widget' => '<div id="%1$s" class="widget widget-wrap fl-wrap single-side-bar %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h4 class="widget-title">', 
		'after_title'   => '</h4>'
    ) );
}
add_action( 'widgets_init', 'solonick_widgets_init' );
if ($solonick_options['so_wid_foo_opt']=="st2") {

} else {
function solonick_footer_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Footer Sidebar 1', 'solonick' ),
        'id' => 'sidebar-4',
        'description' => esc_html__( 'This area for Footer Sidebar widgets.', 'solonick' ),
        'before_widget' => '<div id="%1$s" class="widget footer-widget footer-box fl-wrap  %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => ' <div class="footer-header fl-wrap">', 
		'after_title'   => '</div>'
    ) );
}
add_action( 'widgets_init', 'solonick_footer_widgets_init' );

function solonick_footer1_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Footer Sidebar 2', 'solonick' ),
        'id' => 'sidebar-5',
        'description' => esc_html__( 'This area for Footer Sidebar widgets.', 'solonick' ),
        'before_widget' => '<div id="%1$s" class="widget footer-widget footer-box fl-wrap  %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => ' <div class="footer-header fl-wrap">', 
		'after_title'   => '</div>'
    ) );
}
add_action( 'widgets_init', 'solonick_footer1_widgets_init' );
}

if (class_exists('WooCommerce')) {
function solonick_woo_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'WOOCOMMERCE Sidebar', 'solonick' ),
        'id' => 'sidebar-3',
        'description' => esc_html__( 'This area for All WOOCOMMERCE Widget.', 'solonick' ),
        'before_widget' => '<div id="%1$s" class="widget widget-wrap fl-wrap single-side-bar %2$s">',
		'after_widget'  => '</div>', 
		'before_title'  => '<h4 class="widget-title">', 
		'after_title'   => '</h4>'
    ) );
}
add_action( 'widgets_init', 'solonick_woo_widgets_init' );
}
}

if(function_exists('vc_set_as_theme')) vc_set_as_theme();
// Initialising Shortcodes
if (class_exists('WPBakeryVisualComposerAbstract')) {
  function requireVcExtend(){
    require_once (SOLONICK_THEME_PATH . '/extendvc/extend-vc.php');
  }

}

/* CHECK WOOCOMMERCE IS ACTIVE
  ================================================== */ 
  if ( ! function_exists( 'solonick_woocommerce_activated' ) ) {
    function solonick_woocommerce_activated() {
      if ( class_exists( 'woocommerce' ) ) {
        return true;
      } else {
        return false;
      }
    }
  }

function woocommerce_pagination() {
		solonick_pagination(); 		
	}
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'solonick_related_products_args', 20 );
  function solonick_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 3 related products
	$args['columns'] = 3; // arranged in 1 columns
	return $args;
}

if (is_admin() && isset($_GET['activated'])){
	wp_redirect(admin_url("themes.php?page=solonick"));
}

function solonick_excerpt_more( $more ) {
    return '..';
}
add_filter('excerpt_more', 'solonick_excerpt_more');

//Remove the unused options.    
add_action( 'after_setup_theme','solonick_remove_unused_options', 100 );
function solonick_remove_unused_options() {    
    remove_theme_support( 'custom-background' );
    remove_theme_support( 'custom-header' );
}