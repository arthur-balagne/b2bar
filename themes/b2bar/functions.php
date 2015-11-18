<?php
/**
 * b2bar functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package b2bar
 */

if ( ! function_exists( 'b2bar_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function b2bar_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on b2bar, use a find and replace
	 * to change 'b2bar' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'b2bar', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'b2bar' ),
		'secondary' => esc_html__( 'Secondary Menu', 'b2bar' ),
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
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'b2bar_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // b2bar_setup
add_action( 'after_setup_theme', 'b2bar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function b2bar_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'b2bar_content_width', 640 );
}
add_action( 'after_setup_theme', 'b2bar_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function b2bar_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'b2bar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'b2bar_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function b2bar_scripts() {

    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri(). '/bootstrap/css/bootstrap.css' );

    wp_enqueue_style( 'b2bar-style', get_stylesheet_uri() );

    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri(). '/bootstrap/js/bootstrap.js' );

	wp_enqueue_script( 'b2bar-navigation', get_template_directory_uri() . '/js/app.js', array(), '20120202', true );

	wp_enqueue_script( 'b2bar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'b2bar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    // register the script
    /*
    wp_register_script( 'my-script', get_template_directory_uri() . '/js/app.js' );

    is_page('') {
        wp_enqueue_script('');

    }
    */
}
add_action( 'wp_enqueue_scripts', 'b2bar_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function prog_shortcode( $atts, $content = null ) {

    extract( shortcode_atts(
            array(
                'date' => '',
                'hour' => '',
                'name' => '',
                'type' => '',
            ), $atts )
    );
    echo '<div class="programation col-md-12">';
    echo     '<div class="left col-md-4">';
    echo     '<div class="date">' . $date .'</div>';
    echo         '<div class="hour">' . $hour .'</div>';
    echo     '</div>';

    echo     '<div class="right col-md-8">';
    echo        '<div class="name">' . $name .'</div>';
    echo        '<div class="type">' . $type .'</div>';
    echo     '</div>';
    echo '</div>';

}
add_shortcode( 'prog', 'prog_shortcode' );

function month_shortcode( $atts ) {

    extract( shortcode_atts(
            array(
                'month' => '',
            ), $atts )
    );
    echo "<h2>Mois de " . $month . "</h2>";

}
add_shortcode( 'mois', 'month_shortcode' );