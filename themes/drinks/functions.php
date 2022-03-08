<?php
/**
 * Love for Drinks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Love_for_Drinks
 */

if ( ! defined( 'DRINKS_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'DRINKS_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function drinks_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Love for Drinks, use a find and replace
		* to change 'drinks' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'drinks', get_template_directory() . '/languages' );

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
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-primary' => esc_html__( 'Primary', 'drinks' ),
			'menu-secondary' => esc_html__( 'Secondary', 'drinks' ),
			'menu-social' => esc_html__( 'Social', 'drinks' ),
			'menu-footer' => esc_html__( 'Footer', 'drinks' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'drinks_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function drinks_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'drinks_content_width', 640 );
}
add_action( 'after_setup_theme', 'drinks_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function drinks_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'drinks' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'drinks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'drinks_widgets_init' );

/**
 * Register widget area as Footer for the website
 * 
 * Reference taken from 
 * @link https://www.usablewp.com/wordpress-theme-development-creating-footer/
 */

function drinks_footer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area - Column 1', 'drinks' ),
			'id'            => 'footer-area-column-1',
			'description'   => esc_html__( 'Add widgets here.', 'drinks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area - Column 2', 'drinks' ),
			'id'            => 'footer-area-column-2',
			'description'   => esc_html__( 'Add widgets here.', 'drinks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area - Column 3', 'drinks' ),
			'id'            => 'footer-area-column-3',
			'description'   => esc_html__( 'Add widgets here.', 'drinks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Area - Column 4', 'drinks' ),
			'id'            => 'footer-area-column-4',
			'description'   => esc_html__( 'Add widgets here.', 'drinks' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'drinks_footer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

// function drinks_footer_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Footer Area - Column 1', 'drinks' ),
// 			'id'            => 'footer-area-column-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'drinks' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Footer Area - Column 2', 'drinks' ),
// 			'id'            => 'footer-area-column-2',
// 			'description'   => esc_html__( 'Add widgets here.', 'drinks' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Footer Area - Column 3', 'drinks' ),
// 			'id'            => 'footer-area-column-3',
// 			'description'   => esc_html__( 'Add widgets here.', 'drinks' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'drinks_footer_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function drinks_scripts() {
	wp_enqueue_style( 
		'drinks-style', 
		get_stylesheet_uri(), 
		array(), 
		DRINKS_VERSION 
	);

	wp_enqueue_style( 
		'foundation-style', 
		get_template_directory_uri() . '/assets/css/vendor/foundation.min.css', 
		array(), 
		'6.7.4' 
	);

	wp_enqueue_script(
		'what-input-script',
		get_template_directory_uri() . '/assets/css/vendor/what-input.js',
		array( 'jquery' ),
		'5.2.10',
		true
	);

	wp_enqueue_style( 
		'woocommerce-style', 
		get_template_directory_uri() . '/assets/css/woocommerce.css', 
	);

	wp_enqueue_script(
		'foundation-style',
		get_template_directory_uri() . '/assets/css/vendor/foundation.min.js',
		array( 'jquery', 'what-input-script' ),
		'6.7.4',
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'drinks_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block editor additions.
 */
require get_template_directory() . '/inc/block-editor.php';

/**
 * Woocommerce additions.
 */
require get_template_directory() . '/inc/woocommerce.php';
