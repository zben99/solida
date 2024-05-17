<?php
/**
 * @author  Tentaz
 * @since   1.0
 * @version 1.0 
 */


if ( ! function_exists( 'solida_setup' ) ) :
/**
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */ 

function solida_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on solida, use a find and replace
	 * to change 'solida' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'solida', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );	
	
	function solida_change_excerpt( $text )
	{
		$pos = strrpos( $text, '[');
		if ($pos === false)
		{
			return $text;
		}
		
		return rtrim (substr($text, 0, $pos) ) . '...';
	}
	add_filter('get_the_excerpt', 'solida_change_excerpt');


	// Limit Excerpt Length by number of Words
	function solida_custom_excerpt( $limit ) {
		$tenexcerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($tenexcerpt)>=$limit) {
		array_pop($tenexcerpt);
		$tenexcerpt = implode(" ",$tenexcerpt).'...';
		} else {
		$tenexcerpt = implode(" ",$tenexcerpt);
		}
		$tenexcerpt = preg_replace('`[[^]]*]`','',$tenexcerpt);
		return $tenexcerpt;
		}
		function content($limit) {
		$content = explode(' ', get_the_content(), $limit);
		if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
		} else {
		$content = implode(" ",$content);
		}
		$content = preg_replace('/[.+]/','', $content);
		$content = apply_filters('the_content', $content);
		$content = str_replace(']]>', ']]&gt;', $content);
		return $content;
	}

	/*
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary Menu', 'solida' )
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'solida_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	//add support posts format
	add_theme_support( 'post-formats', array( 
		'aside', 
		'gallery',
		'audio',
		'video',
		'image',
		'quote',
		'link',
	) );

add_theme_support( 'align-wide' );	
}
endif;
add_action( 'after_setup_theme', 'solida_setup' );

/**
*Custom Image Size
*/

add_image_size( 'solida_portfolio-slider', 520, 640, true );
add_image_size( 'solida_portfolio-grid', 500, 400, true );
add_image_size( 'solida_footer-post', 300, 280, true );


/**
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function solida_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'solida_content_width', 640 );
}
add_action( 'after_setup_theme', 'solida_content_width', 0 );

require_once get_template_directory() . '/inc/custom-header.php';
require_once get_template_directory() . '/inc/theme-tags.php';
require_once get_template_directory() . '/inc/theme-scripts.php';
require_once get_template_directory() . '/inc/theme-functions.php';
require_once get_template_directory() . '/inc/theme-sidebar.php';
require_once get_template_directory() . '/inc/customizer.php';

if (class_exists( 'ReduxFramework')){
	require_once get_template_directory() . '/framework/custom.php';
	require_once get_template_directory() . '/libs/theme-option/config.php';
}

function solida_file_types_to_uploads($file_types){
	$new_filetypes        = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types           = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_filter('upload_mimes', 'solida_file_types_to_uploads');

// TGM Plugin Activation
if (is_admin()) {
	require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
	require_once get_template_directory() . '/framework/tgm-config.php';	
}

//----------------------------------------------------------------------
	// Remove Redux Framework NewsFlash
//----------------------------------------------------------------------
if ( ! class_exists( 'reduxNewsflash' ) ):
    class reduxNewsflash {
        public function __construct( $parent, $params ) {}
    }
endif;

function solida_remove_demo_mode_link() { // Be sure to rename this function to something more unique
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
    }
    if ( class_exists('ReduxFrameworkPlugin') ) {
        remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
    }
}
add_action('init', 'solida_remove_demo_mode_link');


/**
 * Registers an editor stylesheet for the theme.
 */
function solida_theme_add_editor_styles() {
    add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'admin_init', 'solida_theme_add_editor_styles' );


function solida_remove_revolution_slider_meta_boxes() {	
	
	remove_meta_box( 'mymetabox_revslider_0', 'teams', 'normal' );
	remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
	remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
	remove_meta_box( 'mymetabox_revslider_0', 'rsclient', 'normal' );
	remove_meta_box( 'mymetabox_revslider_0', 'gallery', 'normal' );
}

add_action( 'do_meta_boxes', 'solida_remove_revolution_slider_meta_boxes' );	


function solida_menu_add_description_to_menu($item_output, $item, $depth, $args) {

   if (strlen($item->description) > 0 ) {
      // append description after link
      $item_output .= sprintf('<span class="description">%s</span>', esc_html($item->description));   
     
   }   
   return $item_output;
}
add_filter('walker_nav_menu_start_el', 'solida_menu_add_description_to_menu', 10, 4);


add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});

//------------------------------------------------------------------------
	//Organize Comments form fields
//-----------------------------------------------------------------------
function solida_wpb_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}

add_filter( 'comment_form_fields', 'solida_wpb_move_comment_field_to_bottom' );	