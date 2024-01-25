<?php
// Theme Functions
function eybrow_after_setup_theme() {

    /*
    * Make theme available for translation.
    * Translations can be filed in the /languages/ directory.
    * If you're building a theme based on eybrow, use a find and replace
    * to change 'eybrow' to the name of your theme in all the template files.
    */
	load_theme_textdomain( 'eybrow', get_template_directory() . '/languages' );

    /*
    * Let WordPress manage the document title.
    * By adding theme support, we declare that this theme does not use a
    * hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    add_theme_support( "wp-block-styles" );
    add_theme_support( "responsive-embeds" );
    add_theme_support( "custom-header");
    add_theme_support( "custom-background");
    add_theme_support( "align-wide" );
    add_theme_support( "register_block_style" );
    add_theme_support( "register_block_pattern" );
    add_editor_style();
    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
    add_theme_support( 'post-thumbnails', array('post', 'page', 'services'));

    // This theme uses wp_nav_menu() in one location.
    register_nav_menu( 'Header_Menu', __('Header Menu', 'eybrow'));
    register_nav_menu( 'Footer_Menu', __('Footer Menu', 'eybrow'));

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

    /**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
    add_theme_support( 'custom-logo' );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

    // Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
    
    }
add_action( 'after_setup_theme', 'eybrow_after_setup_theme' );

//Post Excerpt
function eybrow_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'eybrow_custom_excerpt_length', 999 );

function eybrow_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'eybrow_excerpt_more' );


// CSS JS Enqueue
function eybrow_theme_style(){

    // CSS Enqueue
    wp_enqueue_style( 'theme_style', get_stylesheet_uri() );
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '5.3.2', 'all' );
    wp_enqueue_style('swiper', get_template_directory_uri().'/css/swiper-bundle.min.css', array(), '11.0.5', 'all' );
    wp_enqueue_style('Font-Awesome', get_template_directory_uri().'/css/all.min.css', array(), '6.4.0', 'all' );
    wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('magnific', get_template_directory_uri().'/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'Google Font', 'https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&amp;family=Hanken+Grotesk:wght@400;500;600;700&amp;display=swap' );

    // JS Enqueue
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '5.3.2', 'true' );
    wp_enqueue_script('validator', get_template_directory_uri().'/js/validator.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('swiper', get_template_directory_uri().'/js/swiper-bundle.min.js', array(), '11.0.5', 'true' );
    wp_enqueue_script('waypoints', get_template_directory_uri().'/js/jquery.waypoints.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('counterup', get_template_directory_uri().'/js/jquery.counterup.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('magnific', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('SmoothScroll', get_template_directory_uri().'/js/SmoothScroll.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('gsap', get_template_directory_uri().'/js/gsap.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('magiccursor', get_template_directory_uri().'/js/magiccursor.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('splitType', get_template_directory_uri().'/js/splitType.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('ScrollTrigger', get_template_directory_uri().'/js/ScrollTrigger.min.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.js', array(), '1.0.0', 'true' );
    wp_enqueue_script('function', get_template_directory_uri().'/js/function.js', array(), '1.0.0', 'true' );
}
add_action('wp_enqueue_scripts', 'eybrow_theme_style');
