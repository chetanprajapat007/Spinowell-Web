<?php
/**
 * Spine-O-Well functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spine-O-Well
 */

if ( ! defined( 'SPINEOWELL_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SPINEOWELL_VERSION', '1.0.0' );
}

if ( ! function_exists( 'spineowell_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function spineowell_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 */
		load_theme_textdomain( 'spineowell', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'spineowell' ),
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
				'spineowell_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'spineowell_setup' );

/**
 * Enqueue scripts and styles.
 */
function spineowell_scripts() {
	// Google Fonts
	wp_enqueue_style( 'spineowell-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Lato:wght@400;700&display=swap', array(), null );

	// Main Stylesheet
	wp_enqueue_style( 'spineowell-style', get_stylesheet_uri(), array(), SPINEOWELL_VERSION );
	wp_style_add_data( 'spineowell-style', 'rtl', 'replace' );

	// Homepage specific stylesheet
	if ( is_front_page() ) {
		wp_enqueue_style( 'spineowell-home-style', get_template_directory_uri() . '/assets/css/home.css', array('spineowell-style'), SPINEOWELL_VERSION );
	}

	// Product specific stylesheet
	if ( is_post_type_archive( 'product' ) || is_singular( 'product' ) ) {
		wp_enqueue_style( 'spineowell-product-style', get_template_directory_uri() . '/assets/css/product.css', array('spineowell-style'), SPINEOWELL_VERSION );
	}

	// Contact page specific stylesheet
	if ( is_page_template( 'page-contact.php' ) ) {
		wp_enqueue_style( 'spineowell-contact-style', get_template_directory_uri() . '/assets/css/contact.css', array('spineowell-style'), SPINEOWELL_VERSION );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spineowell_scripts' );

/**
 * Register Custom Post Type for Products.
 */
function spineowell_register_product_post_type() {
	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'spineowell' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'spineowell' ),
		'menu_name'             => __( 'Products', 'spineowell' ),
		'name_admin_bar'        => __( 'Product', 'spineowell' ),
		'archives'              => __( 'Product Archives', 'spineowell' ),
		'attributes'            => __( 'Product Attributes', 'spineowell' ),
		'parent_item_colon'     => __( 'Parent Product:', 'spineowell' ),
		'all_items'             => __( 'All Products', 'spineowell' ),
		'add_new_item'          => __( 'Add New Product', 'spineowell' ),
		'add_new'               => __( 'Add New', 'spineowell' ),
		'new_item'              => __( 'New Product', 'spineowell' ),
		'edit_item'             => __( 'Edit Product', 'spineowell' ),
		'update_item'           => __( 'Update Product', 'spineowell' ),
		'view_item'             => __( 'View Product', 'spineowell' ),
		'view_items'            => __( 'View Products', 'spineowell' ),
		'search_items'          => __( 'Search Product', 'spineowell' ),
		'not_found'             => __( 'Not found', 'spineowell' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'spineowell' ),
		'featured_image'        => __( 'Featured Image', 'spineowell' ),
		'set_featured_image'    => __( 'Set featured image', 'spineowell' ),
		'remove_featured_image' => __( 'Remove featured image', 'spineowell' ),
		'use_featured_image'    => __( 'Use as featured image', 'spineowell' ),
		'insert_into_item'      => __( 'Insert into product', 'spineowell' ),
		'uploaded_to_this_item' => __( 'Uploaded to this product', 'spineowell' ),
		'items_list'            => __( 'Products list', 'spineowell' ),
		'items_list_navigation' => __( 'Products list navigation', 'spineowell' ),
		'filter_items_list'     => __( 'Filter products list', 'spineowell' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'spineowell' ),
		'description'           => __( 'Post Type for mattresses and other products.', 'spineowell' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'product_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'product', $args );

	// Register Product Category Taxonomy
	$cat_labels = array(
		'name'              => _x( 'Product Categories', 'taxonomy general name', 'spineowell' ),
		'singular_name'     => _x( 'Product Category', 'taxonomy singular name', 'spineowell' ),
		'search_items'      => __( 'Search Product Categories', 'spineowell' ),
		'all_items'         => __( 'All Product Categories', 'spineowell' ),
		'parent_item'       => __( 'Parent Product Category', 'spineowell' ),
		'parent_item_colon' => __( 'Parent Product Category:', 'spineowell' ),
		'edit_item'         => __( 'Edit Product Category', 'spineowell' ),
		'update_item'       => __( 'Update Product Category', 'spineowell' ),
		'add_new_item'      => __( 'Add New Product Category', 'spineowell' ),
		'new_item_name'     => __( 'New Product Category Name', 'spineowell' ),
		'menu_name'         => __( 'Product Category', 'spineowell' ),
	);
	$cat_args = array(
		'hierarchical'      => true,
		'labels'            => $cat_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'product-category' ),
	);
	register_taxonomy( 'product_category', array( 'product' ), $cat_args );
}
add_action( 'init', 'spineowell_register_product_post_type', 0 );
