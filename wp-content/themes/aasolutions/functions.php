<?php
/**
 * aasolutions functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aasolutions
 */

require_once('wp-bootstrap-navwalker-v4.php');

if ( ! function_exists( 'aasolutions_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aasolutions_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on aasolutions, use a find and replace
		 * to change 'aasolutions' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aasolutions', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'aasolutions' ),
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
		add_theme_support( 'custom-background', apply_filters( 'aasolutions_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'aasolutions_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aasolutions_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'aasolutions_content_width', 640 );
}
add_action( 'after_setup_theme', 'aasolutions_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aasolutions_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'aasolutions' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'aasolutions' ),
		'before_widget' => '<div class="container">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sub-Footer 1', 'aasolutions' ),
		'id'            => 'subfooter-1',
		'description'   => esc_html__( 'Add widgets here.', 'aasolutions' ),
		'before_widget' => '<div class="p-2 col-sm-12 col-lg col-md sf-elem">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sub-Footer 2', 'aasolutions' ),
		'id'            => 'subfooter-2',
		'description'   => esc_html__( 'Add widgets here.', 'aasolutions' ),
		'before_widget' => '<div class="p-2 col-sm-12 col-lg col-md sf-elem">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sub-Footer 3', 'aasolutions' ),
		'id'            => 'subfooter-3',
		'description'   => esc_html__( 'Add widgets here.', 'aasolutions' ),
		'before_widget' => '<div class="p-2 col-sm-12 col-lg col-md sf-elem">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sub-Footer 4', 'aasolutions' ),
		'id'            => 'subfooter-4',
		'description'   => esc_html__( 'Add widgets here.', 'aasolutions' ),
		'before_widget' => '<div class="p-2 col-sm-12 col-lg col-md sf-elem">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'aasolutions_widgets_init' );

add_action( 'init', 'aas_theme_services' );

function aas_theme_services() {

register_post_type( 'services', array(
  'labels' => array(
    'name' => 'Services',
    'singular_name' => 'services',
   ),
  'description' => 'Services offered that is to be displayed in this website',
  'public' => true,
  'menu_position' => 20,
  'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' )
));
}


/**
 * Enqueue scripts and styles.
 */
function aasolutions_scripts() {

	wp_enqueue_style( 'aasolutions-style', get_stylesheet_uri() );
	wp_enqueue_style( 'aasolutions-bootstrap', get_template_directory_uri() .  '/layouts/bootstrap.min.css' );
	wp_enqueue_script( 'aasolutions-bootstrap-js', get_template_directory_uri() .  '/js/bootstrap.min.js', array('jquery'),'', true );
	wp_enqueue_script( 'aasolutions-popper-js', get_template_directory_uri() . '/js/popper.js', array() );
	wp_enqueue_script( 'aasolutions-custom-js', get_template_directory_uri() . '/js/custom.js', array() );
	wp_enqueue_script( 'aasolutions-navigation', get_template_directory_uri() . '/js/navigation.js', array() );
	wp_enqueue_script( 'aasolutions-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array() );
	wp_enqueue_script( 'aasolutions-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery'), true );
	wp_enqueue_style( 'aasolutions-asscss', get_template_directory_uri() .  '/layouts/aas-css.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'aasolutions_scripts' );

function wpb_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
	SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM
	$wpdb->posts
	WHERE
	post_status = 'publish'
	");
	$output = '';
	if($copyright_dates) {
		$copyright = "© " . $copyright_dates[0]->firstdate . " ";
		if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
			$copyright .= '-' . $copyright_dates[0]->lastdate;
		}
	$output = $copyright;
	}
	return $output;
}

add_filter('admin_init', 'addnew_gen_fields', 1,1);
 

    function addnew_gen_fields() {
    	

    	add_settings_section(  
	        'site_settings_section', // Section ID 
	        'Site Info Settings', // Section Title
	        'siteinfo_section_options_callback', // Callback
	        'general' // What Page?  This makes the section show up on the General Settings Page
    	);
	    register_setting(
	    	'general', 
	    	'cta_link', 
	    	'esc_attr'
	    );
	    register_setting(
	    	'general',
	    	'cta_label',
	    	'esc_attr'
	    );
	    add_settings_field(
	    	'cta_link', 
	    	'<label for="cta_link">'.__('Contact Page URL' , 'cta_link' ).'</label>' , 
	    	'cta_link_fields_html', 
	    	'general',
	    	'site_settings_section',
	    	'esc_attr'
	    );
	    add_settings_field(
	    	'cta_label',
	    	'<label for="cta_label">'.__('Call To Action Text' , 'cta_label').'</label>' ,
	    	'cta_label_html',
	    	'general',
	    	'site_settings_section',
	    	'esc_attr'
	    );
	}

	function siteinfo_section_options_callback() { // Section Callback
    	echo '<p>Necessary information needed for your website which will be displayed or used for the pages and sections </p>';  
	}

	function cta_label_html() {
		$ctaLabel = get_option('cta_label', '');
		echo '<input type="text" id="cta_label" name="cta_label" value="' .$ctaLabel . '" size="64" />';
	}

	function cta_link_fields_html() {
	    $value = get_option( 'cta_link', '' );
	    echo '<input type="text" id="cta_link" name="cta_link" value="' . $value . '" size="64" />';
	}

 

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

