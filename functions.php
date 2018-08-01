<?php
/**
 * malerejuvi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package malerejuvi
 */

require_once dirname(__FILE__) . '/inc/wp-bootstrap-navwalker.php';


if ( ! function_exists( 'medical_health_website_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function medical_health_website_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on malerejuvi, use a find and replace
		 * to change 'medical-health-website' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'medical-health-website', get_template_directory() . '/languages' );

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
		add_image_size( 'sidebar-thumb', 120, 120, true );
		add_image_size( 'banner-image', 920, 250, true );
		add_image_size( 'single-image', 570, 395, array('left','top'));

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'medical-health-website' ),
			'main-menu' => esc_html__( 'Main', 'medical-health-website' ),
			'top-social-menu' => esc_html__( 'Top Social', 'medical-health-website' ),
			'footer-social-menu' => esc_html__( 'Footer Social', 'medical-health-website' ),
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
		add_theme_support( 'custom-background', apply_filters( 'medical_health_website_custom_background_args', array(
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
add_action( 'after_setup_theme', 'medical_health_website_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medical_health_website_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medical_health_website_content_width', 640 );
}
add_action( 'after_setup_theme', 'medical_health_website_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medical_health_website_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'medical-health-website' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'medical-health-website' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'medical-health-website' ),
		'id'            => 'footer-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'medical-health-website' ),
		'before_widget' => '<div class="col-md-4 extra-bd"><div class="footer-box">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'medical_health_website_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function medical_health_website_scripts() {
	wp_enqueue_style( 'medical-health-website-style', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() .'/css/bootstrap.min.css', array(), '3.3.7', 'all' );
	wp_enqueue_style('bootstrap-theme-min', get_template_directory_uri() .'/css/bootstrap-theme.min.css', array(), '3.3.7', 'all' );
	wp_enqueue_style('font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css', array(), '4.7.0', 'all' );
	wp_enqueue_style( 'Open Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800', array(), '1.0', 'all'  );
	wp_enqueue_style('custom-css', get_template_directory_uri() .'/css/custom.css', array(), '1.0', 'all' );
	wp_enqueue_style('responsive', get_template_directory_uri() .'/css/responsive.css', array(), '4.7.0', 'all' );

	wp_enqueue_script( 'medical-health-website-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'medical-health-website-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
}
add_action( 'wp_enqueue_scripts', 'medical_health_website_scripts' );


function medical_health_website_ie_support(){
  ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php
}
add_action('wp_head', 'medical_health_website_ie_support');
add_filter('show_admin_bar', '__return_false');


include( get_template_directory(). '/inc/portfolio-post-type.php' );

include( get_template_directory(). '/inc/myvideo-post-type.php' );



include( get_template_directory(). '/inc/custom-posts.php' );
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

