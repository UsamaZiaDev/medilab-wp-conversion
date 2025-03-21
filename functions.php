<?php
/**
 * medilab-wp-conversion functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package medilab-wp-conversion
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

add_action('admin_notices', function() {
    echo '<div class="notice notice-info"><p>';
    echo '⭐ Check out the Usama Zia: 
			<strong> <a href="https://usamazia.dev" target="_blank">Portfolio</a> </strong> | 
			<strong> <a href="https://github.com/UsamaZiaDev" target="_blank">GitHub</a> </strong>
			';
    echo '</p></div>';
});

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function uzml_medilab_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on medilab-wp-conversion, use a find and replace
		* to change 'uzml-medilab' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'uzml-medilab', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'uzml-medilab' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'uzml_medilab_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
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
add_action( 'after_setup_theme', 'uzml_medilab_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function uzml_medilab_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'uzml_medilab_content_width', 640 );
}
add_action( 'after_setup_theme', 'uzml_medilab_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function uzml_medilab_widgets_init() {

	$sidebars = array(
		"footer-left-sidebar" => esc_html__("Footer Left Sidebar", "uzml-medilab"),
		"footer-menu-1"		  => esc_html__("Footer Menu 1", "uzml-medilab"),
		"footer-menu-2"		  => esc_html__("Footer Menu 2", "uzml-medilab"),
		"footer-menu-3"		  => esc_html__("Footer Menu 3", "uzml-medilab"),
		"footer-menu-4"		  => esc_html__("Footer Menu 4", "uzml-medilab"),
	);

	foreach( $sidebars as $id => $name ){
		register_sidebar(
			array(
				'name'          => $name,
				'id'            => $id,
				'description'   => esc_html__( 'Add widgets here.', 'uzml-medilab' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}

}
add_action( 'widgets_init', 'uzml_medilab_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function uzml_medilab_scripts() {

	// ✅ Enqueue Theme Stylesheet
	$styles = array(
		'uzml-fonts' => 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap',
		'uzml-bootstrap' => '/assets/vendor/bootstrap/css/bootstrap.min.css',
		'uzml-bootstrap-icons' => '/assets/vendor/bootstrap-icons/bootstrap-icons.css',
		'uzml-aos-css' => '/assets/vendor/aos/aos.css',
		'uzml-fontawesome-free' => '/assets/vendor/fontawesome-free/css/all.min.css',
		'uzml-glightbox' => '/assets/vendor/glightbox/css/glightbox.min.css',
 		'uzml-swiper-bundle' => '/assets/vendor/swiper/swiper-bundle.min.css',
		'uzml-main-style-css' => '/assets/css/main.css',
	);

	foreach( $styles as $id => $path ){
		wp_enqueue_style( $id , get_template_directory_uri() . $path , array(), _S_VERSION );
	}
	
	wp_enqueue_style( 'uzml-medilab-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	// ✅ Enqueue Theme scripts
	$scripts = array(
		'uzml-bootstrap-bundle' => '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
		'uzml-aos' => '/assets/vendor/aos/aos.js',
		'uzml-glightbox' => '/assets/vendor/glightbox/js/glightbox.min.js',
		'uzml-purecounter_vanilla' => '/assets/vendor/purecounter/purecounter_vanilla.js',
		'uzml-swiper-bundle' => '/assets/vendor/swiper/swiper-bundle.min.js',
		'uzml-main-js' => '/assets/js/main.js',
	);

	foreach( $scripts as $id => $path ){
		wp_enqueue_script( $id , get_template_directory_uri() . $path , array(), _S_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'uzml_medilab_scripts' );

/**
 * TGM Plugin Activation.
 */
require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/tgm/install-plugins.php';

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


