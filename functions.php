<?php
/* ==========================================================================
 *  Theme settings
 * ========================================================================== */
if ( ! function_exists( 'cgsfashion_setup' ) ) :
	function cgsfashion_setup() {
		if ( ! isset( $content_width ) ) {
			$content_width = 725;
		}

		load_theme_textdomain( 'cgs-fashion-trend', get_template_directory() . '/languages' );

		add_theme_support( 'woocommerce' );
		add_theme_support( 'bbpress' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'img_348_201', 348, 201, true );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		add_theme_support( 'custom-background', apply_filters( 'basic_custom_background_args', array( 'default-color' => 'ffffff' ) ) );
		add_theme_support( 'custom-header', array(
			'width'       => 1080,
			'height'      => 190,
			'flex-height' => true,
			'flex-width' => true,
		) );

		register_nav_menus( array(
			'top'    => __( 'Main Menu', 'cgs-fashion-trend' )
		) );


		// logo
		$args = array();
		$lpos = esc_html(get_theme_mod( 'display_logo_and_title' ));
		if ( false === $lpos || 'image' == $lpos ) {
			$args['header-text'] = array( 'blog-name' );
		}
		add_theme_support( 'custom-logo', $args );
	}
endif;
add_action( 'after_setup_theme', 'cgsfashion_setup' );

/* ==========================================================================
 *  Load scripts and styles
 * ========================================================================== */
if ( ! function_exists( 'cgsfashion_enqueue_style_and_script' ) ) :
	function cgsfashion_enqueue_style_and_script() {

		global $post, $wp_query;

		// STYLES
		wp_enqueue_style( 'cgsfashion-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Playfair+Display:400,700,900|Poppins:400,500,600,700', array(), true );
		wp_enqueue_style( 'cgsfashion-bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css', array(), true );
		wp_enqueue_style( 'cgsfashion-style', get_stylesheet_uri(), array(), true );

		// SCRIPTS
		wp_enqueue_script( 'cgsfashion-html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.3', true );
		wp_script_add_data( 'cgsfashion-html5shiv', 'conditional', 'lt IE 9' );
		wp_enqueue_script( 'cgsfashion-bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), true, true );
		wp_enqueue_script( 'cgsfashion-scripts', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), true, true );

		if(is_singular()){
			if(comments_open() && get_option('thread_comments')){
				wp_enqueue_script( 'comment-reply', false, true, true );
			}
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'cgsfashion_enqueue_style_and_script' );
/* =========================================================================== */
add_action( 'widgets_init', 'cgsfashion_widgets_init' );
function cgsfashion_widgets_init() {
	/* translators: %s: search term */
	register_sidebar( array(
		'name' => __('Primary Sidebar', 'cgs-fashion-trend'),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget_box %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="side_title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'admin_init', 'cgsfashion_add_editor_styles' );
function cgsfashion_add_editor_styles() {
	add_editor_style('editor-style.css');
}
/* =========================================================================== */
require_once( get_template_directory() . '/customizer.php' );
