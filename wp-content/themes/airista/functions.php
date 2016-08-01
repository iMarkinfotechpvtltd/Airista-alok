<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top' => __( 'Top Menu', 'twentysixteen' ),
		'header'  => __( 'Header Menu', 'twentysixteen' ),
		'real_time'  => __( 'Real Time Location System Menu', 'twentysixteen' ),
		'application'  => __( 'Application Menu', 'twentysixteen' ),
		'company'  => __( 'Company Menu', 'twentysixteen' ),
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

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

	// Theme stylesheet.
	wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160412', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );







/**************************************pagenation**************************************/
                                // numbered pagination paste on function file
// Numbered Pagination


















/******************Image size***************/

add_image_size( 'banner-image', 1920, 690, true );

add_image_size( 'mission-image', 376, 315, true );
add_image_size( 'first-education-image', 597, 381, true );
add_image_size( 'education-image', 658, 946, true );
add_image_size( 'manufacturing-image', 705, 726, true );
add_image_size( 'food-image', 426, 390, true );
add_image_size( 'other-image', 659, 946, true );
add_image_size( 'flow-image', 871, 212, true );
add_image_size( 'personal-safety-image', 583, 473, true );
add_image_size( 'hand-hygiene-image', 1440, 533, true );
add_image_size( 'first-temperature-image', 654, 577, true );
add_image_size( 'second-temperature-image', 582, 444, true );
add_image_size( 'first-workflow-process-image', 582, 467, true );
add_image_size( 'second-workflow-process-image', 583, 386, true );
add_image_size( 'slider-image', 1920, 720, true );
add_image_size( 'news-image', 583, 490, true );
add_image_size( 'blog-image', 660, 306, true );
add_image_size( 'career-image', 672, 499, true );
add_image_size( 'case-image', 582, 387, true );
add_image_size( 'wifi-image', 580, 458, true );
add_image_size( 'inner-blog-image', 802, 354, true );
add_image_size( 'rtls-blog-image', 460, 380, true );
add_image_size( 'features-image', 460, 628, true );
add_image_size( 'integrat-image', 646, 619, true );
add_image_size( 'airsta-image', 659, 647, true );
add_image_size( 'homeproduct-image', 499, 440, true );
add_image_size( 'trainingcir-image', 583, 337, true );
add_image_size( 'cal-image', 203, 243, true );
add_image_size( 'technofirst-image', 682, 430, true );
add_image_size( 'technosecond-image', 374, 258, true );
add_image_size( 'hardcate-image', 544, 430, true );
add_image_size( 'healthcheck-image', 553, 987, true );
/************************NEWS & Event post   **********/

add_action( 'init', 'News_init' );
function News_init() {
	$labels = array(
		'name'               => _x( 'News & events', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'News & events', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'News & events', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'News & events', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'News & events', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New News & events', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New News & events', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit News & events', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View News & events', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All News & events', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search News & events', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent News & events:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No News & events found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No News & events found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'News & event_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'News', $args );
}

/************************Industris post   **********/

function my_custom_post_industries() {
$labels = array(
  'name' => 'industries',
  'singular_name' => 'industries',
  'add_new' => 'Add industries',
  'add_new_item' => 'Add New industries',
  'edit_item' => 'Edit industries',
  'new_item' => 'New industries',
  'all_items' => 'All industries',
  'view_item' => 'View industries',
  'search_items' => 'Search industries',
  'not_found' =>  'No industries found',
  'not_found_in_trash' => 'No industries found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'industries'
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true, 
  'show_in_menu' => true, 
  'query_var' => true,
  'capability_type' => 'post',
  'has_archive' => true, 
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
); 

register_post_type( 'industries', $args ); 
}  
add_action( 'init', 'my_custom_post_industries' );

function my_taxonomies_industries() {
$labels = array(
  'name' =>  'industries Categories',
'add_new_item' => 'Add New industries category',
'search_items' => 'Search industries Categories',
'edit_item' => 'Edit industries Category',
  'menu_name' =>  'industries Categories'
);
$args = array(
  'labels' => $labels,
  'hierarchical' => true,
);
register_taxonomy( 'industries_category', 'industries', $args );
}
add_action( 'init', 'my_taxonomies_industries');


/*************************************************************/

/************************Application post   **********/

function my_custom_post_application() {
$labels = array(
  'name' => 'application',
  'singular_name' => 'application',
  'add_new' => 'Add application',
  'add_new_item' => 'Add New application',
  'edit_item' => 'Edit application',
  'new_item' => 'New application',
  'all_items' => 'All application',
  'view_item' => 'View application',
  'search_items' => 'Search application',
  'not_found' =>  'No application found',
  'not_found_in_trash' => 'No application found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'Application'
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true, 
  'show_in_menu' => true, 
  'query_var' => true,
  'capability_type' => 'post',
  'has_archive' => true, 
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
); 

register_post_type( 'application', $args ); 
}  
add_action( 'init', 'my_custom_post_application' );

// function my_taxonomies_application() {
// $labels = array(
  // 'name' =>  'application Categories',
// 'add_new_item' => 'Add New application category',
// 'search_items' => 'Search application Categories',
// 'edit_item' => 'Edit application Category',
  // 'menu_name' =>  'Application Categories'
// );
// $args = array(
  // 'labels' => $labels,
  // 'hierarchical' => true,
// );
// register_taxonomy( 'application_category', 'application', $args );
// }
// add_action( 'init', 'my_taxonomies_application');


/*************************************************************/

/************************Product post   **********/

function my_custom_post_products() {
$labels = array(
  'name' => 'products',
  'singular_name' => 'products',
  'add_new' => 'Add products',
  'add_new_item' => 'Add New products',
  'edit_item' => 'Edit products',
  'new_item' => 'New products',
  'all_items' => 'All products',
  'view_item' => 'View products',
  'search_items' => 'Search products',
  'not_found' =>  'No products found',
  'not_found_in_trash' => 'No products found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'Products'
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true, 
  'show_in_menu' => true, 
  'query_var' => true,
  'capability_type' => 'post',
  'has_archive' => true, 
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
); 

register_post_type( 'products', $args ); 
}  
add_action( 'init', 'my_custom_post_products' );

function my_taxonomies_products() {
$labels = array(
  'name' =>  'products Categories',
'add_new_item' => 'Add New products category',
'search_items' => 'Search products Categories',
'edit_item' => 'Edit products Category',
  'menu_name' =>  'Products Categories'
);
$args = array(
  'labels' => $labels,
  'hierarchical' => true,
);
register_taxonomy( 'products_category', 'products', $args );
}
add_action( 'init', 'my_taxonomies_products');


/*************************************************************/

/************************Services post   **********/

function my_custom_post_service() {
$labels = array(
  'name' => 'service',
  'singular_name' => 'service',
  'add_new' => 'Add service',
  'add_new_item' => 'Add New service',
  'edit_item' => 'Edit service',
  'new_item' => 'New service',
  'all_items' => 'All service',
  'view_item' => 'View service',
  'search_items' => 'Search service',
  'not_found' =>  'No service found',
  'not_found_in_trash' => 'No service found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'Service'
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true, 
  'show_in_menu' => true, 
  'query_var' => true,
  'capability_type' => 'post',
  'has_archive' => true, 
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
); 

register_post_type( 'service', $args ); 
}  
add_action( 'init', 'my_custom_post_service' );

// function my_taxonomies_Service() {
// $labels = array(
  // 'name' =>  'service Categories',
// 'add_new_item' => 'Add New service category',
// 'search_items' => 'Search service Categories',
// 'edit_item' => 'Edit service Category',
  // 'menu_name' =>  'Service Categories'
// );
// $args = array(
  // 'labels' => $labels,
  // 'hierarchical' => true,
// );
// register_taxonomy( 'service_category', 'service', $args );
// }
// add_action( 'init', 'my_taxonomies_service');


/*************************************************************/

/*********************************** Case Studies *******************************/
add_action( 'init', 'case_init' );
function case_init() {
	$labels = array(
		'name'               => _x( 'Case Studies', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Case Studies', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Case Studies', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Case Studies', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Case Studies', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Case Studies', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Case Studies', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Case Studies', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Case Studies', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Case Studies', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Case Studies', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Case Studies:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Case Studies found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Case Studies found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'case' ),
		'case_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'case', $args );
}

/*********************************** Videos ******************************/
add_action( 'init', 'video_init' );
function video_init() {
	$labels = array(
		'name'               => _x( 'Videos', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Videos', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Videos', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Videos', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Videos', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Videos', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Videos', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Videos', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Videos', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Videos', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Videos', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Videos:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Videos found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Videos found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'video' ),
		'video_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'video', $args );
}

/************************Download post   **********/

function my_custom_post_download() {
$labels = array(
  'name' => 'download',
  'singular_name' => 'download',
  'add_new' => 'Add download',
  'add_new_item' => 'Add New download',
  'edit_item' => 'Edit download',
  'new_item' => 'New download',
  'all_items' => 'All download',
  'view_item' => 'View download',
  'search_items' => 'Search download',
  'not_found' =>  'No download found',
  'not_found_in_trash' => 'No download found in Trash', 
  'parent_item_colon' => '',
  'menu_name' => 'Download'
);

$args = array(
  'labels' => $labels,
  'public' => true,
  'publicly_queryable' => true,
  'show_ui' => true, 
  'show_in_menu' => true, 
  'query_var' => true,
  'capability_type' => 'post',
  'has_archive' => true, 
  'hierarchical' => false,
  'menu_position' => null,
  'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
); 

register_post_type( 'download', $args ); 
}  
add_action( 'init', 'my_custom_post_download' );

function my_taxonomies_download() {
$labels = array(
  'name' =>  'download Categories',
'add_new_item' => 'Add New download category',
'search_items' => 'Search download Categories',
'edit_item' => 'Edit download Category',
  'menu_name' =>  'Download Categories'
);
$args = array(
  'labels' => $labels,
  'hierarchical' => true,
);
register_taxonomy( 'download_category', 'download', $args );
}
add_action( 'init', 'my_taxonomies_download');


/*************************************************************/
/*--------------------LOGO --------------*/
function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_bloginfo('template_directory').'/images/logo.png) !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');

function my_login_logo_url() {
   return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
   return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/*--------------------/LOGO --------------*/

/**************get youtube Id ***************************/

function extractUTubeVidId($url){
    /*
    * type1: http://www.youtube.com/watch?v=9Jr6OtgiOIw
    * type2: http://www.youtube.com/watch?v=9Jr6OtgiOIw&feature=related
    * type3: http://youtu.be/9Jr6OtgiOIw
    */
    $vid_id = "";
    $flag = false;
    if(isset($url) && !empty($url)){
        /*case1 and 2*/
        $parts = explode("?", $url);
        if(isset($parts) && !empty($parts) && is_array($parts) && count($parts)>1){
            $params = explode("&", $parts[1]);
            if(isset($params) && !empty($params) && is_array($params)){
                foreach($params as $param){
                    $kv = explode("=", $param);
                    if(isset($kv) && !empty($kv) && is_array($kv) && count($kv)>1){
                        if($kv[0]=='v'){
                            $vid_id = $kv[1];
                            $flag = true;
                            break;
                        }
                    }
                }
            }
        }

        /*case 3*/
        if(!$flag){
            $needle = "youtu.be/";
            $pos = null;
            $pos = strpos($url, $needle);
            if ($pos !== false) {
                $start = $pos + strlen($needle);
                $vid_id = substr($url, $start, 11);
                $flag = true;
            }
        }
    }
    return $vid_id;
}

/****************************end id******************************/

