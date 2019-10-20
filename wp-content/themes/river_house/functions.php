<?php 

if ( ! function_exists( 'twentynineteen_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup() {

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
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'header' => __( 'Header Menu', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' )
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

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
}
add_action( 'after_setup_theme', 'twentynineteen_setup' );

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts() {

	wp_enqueue_style( 'twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_style( 'twentynineteen-style1', get_template_directory_uri() . '/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style( 'twentynineteen-style2', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css', array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style( 'twentynineteen-style3', get_template_directory_uri() . '/css/style.css', array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style( 'twentynineteen-style4', get_template_directory_uri() . '/css/responsive.css', array(), wp_get_theme()->get( 'Version' ));

	wp_enqueue_script( 'twentynineteen-js1',"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js",array(),wp_get_theme()->get( 'Version' ),true);
	wp_enqueue_script( 'twentynineteen-js2', get_template_directory_uri() . '/js/bootstrap.min.js',array(),wp_get_theme()->get( 'Version' ),true);
	wp_enqueue_script( 'twentynineteen-js3', get_template_directory_uri() . "/js/all-style.js",array(),wp_get_theme()->get( 'Version' ),true);

	
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_scripts' );

add_filter('use_block_editor_for_post', '__return_false', 10);

/**
 * Include Walker class.
 */
require get_template_directory() . '/walker_nav.php';

// add this to your theme's functions.php

/* * Define a custom option type * this type will repeat some text inputs */

function repeat_text_option_type( $option_name, $option, $values ){

    $counter = 0;

    $output = '<div class="of-repeat-loop">';

    if( is_array( $values ) ) foreach ( (array)$values as $value ){

        $output .= '<div class="of-repeat-group">';
        $output .= '<input class="of-input" name="' . esc_attr( $option_name . '[' . $option['id'] . ']['.$counter.']' ) . '" type="text" value="' . esc_attr( $value ) . '" />';
        $output .= '<button class="dodelete button icon delete">'. __('Remove') .'</button>';

        $output .= '</div><!–.of-repeat-group–>';

        $counter++;
    }

    $output .= '<div class="of-repeat-group to-copy">';
    $output .= '<input class="of-input" data-rel="' . esc_attr( $option_name . '[' . $option['id'] . ']' ) . '" type="text" value="' . esc_attr( $option['std'] ) . '" />';
    $output .= '<button class="dodelete button icon delete">'. __('Remove') .'</button>';
    $output .= '</div><!–.of-repeat-group–>';

    $output .= '<button class="docopy button icon add">Add</button>';

    $output .= '</div><!–.of-repeat-loop–>';

    return $output;


} 
add_filter( 'optionsframework_repeat_text', 'repeat_text_option_type', 10, 3 );