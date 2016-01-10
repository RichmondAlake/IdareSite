<?php
/**
 * Accelerate functions related to defining constants, adding files and WordPress core functionality.
 *
 * Defining some constants, loading all the required files and Adding some core functionality.
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menu() To add support for navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @package ThemeGrill
 * @subpackage Accelerate
 * @since Accelerate 1.0
 */

add_action( 'after_setup_theme', 'accelerate_setup' );
/**
 * All setup functionalities.
 *
 * @since 1.0
 */
if( !function_exists( 'accelerate_setup' ) ) :
function accelerate_setup() {

	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	global $content_width;
	if ( ! isset( $content_width ) )
		$content_width = 720;

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'accelerate', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
	add_theme_support( 'post-thumbnails' );

   // Supporting title tag via add_theme_support (since WordPress 4.1)
   add_theme_support( 'title-tag' );

	// Registering navigation menus.
	register_nav_menus( array(
		'primary' 	=> __( 'Primary/Main Menu', 'accelerate' ),
		'footer' 	=> __( 'Footer Menu', 'accelerate' )
	) );

	// Cropping the images to different sizes to be used in the theme
	add_image_size( 'featured-blog-large', 720, 300, true );
	add_image_size( 'featured-blog-small', 230, 230, true );
	add_image_size( 'featured-service', 600, 330, true );
	add_image_size( 'featured-recent-work', 365, 365, true );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'accelerate_custom_background_args', array(
		'default-color' => 'eaeaea'
	) ) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'chat', 'audio', 'status' ) );

	// Adding excerpt option box for pages as well
	add_post_type_support( 'page', 'excerpt' );
}
endif;

/**
 * Define Directory Location Constants
 */
define( 'ACCELERATE_PARENT_DIR', get_template_directory() );
define( 'ACCELERATE_CHILD_DIR', get_stylesheet_directory() );

define( 'ACCELERATE_IMAGES_DIR', ACCELERATE_PARENT_DIR . '/images' );
define( 'ACCELERATE_INCLUDES_DIR', ACCELERATE_PARENT_DIR. '/inc' );
define( 'ACCELERATE_CSS_DIR', ACCELERATE_PARENT_DIR . '/css' );
define( 'ACCELERATE_JS_DIR', ACCELERATE_PARENT_DIR . '/js' );
define( 'ACCELERATE_LANGUAGES_DIR', ACCELERATE_PARENT_DIR . '/languages' );

define( 'ACCELERATE_ADMIN_DIR', ACCELERATE_INCLUDES_DIR . '/admin' );
define( 'ACCELERATE_WIDGETS_DIR', ACCELERATE_INCLUDES_DIR . '/widgets' );

define( 'ACCELERATE_ADMIN_IMAGES_DIR', ACCELERATE_ADMIN_DIR . '/images' );
define( 'ACCELERATE_ADMIN_JS_DIR', ACCELERATE_ADMIN_DIR . '/js' );
define( 'ACCELERATE_ADMIN_CSS_DIR', ACCELERATE_ADMIN_DIR . '/css' );


/**
 * Define URL Location Constants
 */
define( 'ACCELERATE_PARENT_URL', get_template_directory_uri() );
define( 'ACCELERATE_CHILD_URL', get_stylesheet_directory_uri() );

define( 'ACCELERATE_IMAGES_URL', ACCELERATE_PARENT_URL . '/images' );
define( 'ACCELERATE_INCLUDES_URL', ACCELERATE_PARENT_URL. '/inc' );
define( 'ACCELERATE_CSS_URL', ACCELERATE_PARENT_URL . '/css' );
define( 'ACCELERATE_JS_URL', ACCELERATE_PARENT_URL . '/js' );
define( 'ACCELERATE_LANGUAGES_URL', ACCELERATE_PARENT_URL . '/languages' );

define( 'ACCELERATE_ADMIN_URL', ACCELERATE_INCLUDES_URL . '/admin' );
define( 'ACCELERATE_WIDGETS_URL', ACCELERATE_INCLUDES_URL . '/widgets' );

define( 'ACCELERATE_ADMIN_IMAGES_URL', ACCELERATE_ADMIN_URL . '/images' );
define( 'ACCELERATE_ADMIN_JS_URL', ACCELERATE_ADMIN_URL . '/js' );
define( 'ACCELERATE_ADMIN_CSS_URL', ACCELERATE_ADMIN_URL . '/css' );

/** Load functions */
require_once( ACCELERATE_INCLUDES_DIR . '/custom-header.php' );
require_once( ACCELERATE_INCLUDES_DIR . '/functions.php' );
require_once( ACCELERATE_INCLUDES_DIR . '/header-functions.php' );

require_once( ACCELERATE_ADMIN_DIR . '/meta-boxes.php' );

/** Load Widgets and Widgetized Area */
require_once( ACCELERATE_WIDGETS_DIR . '/widgets.php' );

/**
 * Adds support for a theme option.
 */
if ( !function_exists( 'optionsframework_init' ) ) {
	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/admin/options/' );
	require_once( ACCELERATE_ADMIN_DIR . '/options/options-framework.php' );

	// Loads options.php from child or parent theme
	$optionsfile = locate_template( 'options.php' );
	load_template( $optionsfile );
}

?>