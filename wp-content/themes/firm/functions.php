<?php
/*
* Main function file for firm business theme
*/

/*Add Customize Options*/
include_once('functions/fbs-theme-options.php');
include_once('functions/fbs-required-plugin.php');

/* Register Menu*/
function fbs_register_my_menu() {
  register_nav_menus(
  	array(
  		'main-menu' => __( 'Main Menu' ),
  		'footer-menu' => __( 'Footer Menu' ),
  		'secondary-menu' => __( 'Secondary Menu' ),
  		'social-menu' => __( 'Social Menu' )
  		)
  );
}
add_action( 'init', 'fbs_register_my_menu' );

/*Custom Theme logo*/

function fbs_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'fbs_custom_logo_setup' );

/*Register style sheet*/

add_action( 'wp_enqueue_scripts', 'fbs_register_styles' );

function fbs_register_styles() {
	wp_enqueue_style( 'style-css', get_template_directory_uri().'/style.css',array(), null, 'all'  );
	wp_enqueue_style( 'unsementic-grid', get_template_directory_uri().'/css/unsementic-grid.css',array(), null, 'all'  );
	wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css',array(), null, 'all'  );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css',array(), null, 'all'  );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), rand(), true );
	wp_enqueue_script( 'jquery.circliful.min', get_template_directory_uri() . '/js/jquery.circliful.min.js', array( 'jquery' ), rand(), true );
	wp_enqueue_script( 'isotope.min', get_template_directory_uri() . '/js/isotope.min.js', array( 'jquery' ), rand(), true );
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), rand(), true );
	
}


/**
 * Register our sidebars and widgetized areas.
 *
 */
function fbs_widgets_init() {

	register_sidebar( array(
			'name'          => 'Right sidebar',
			'id'            => 'right_sidebar',
			'before_widget' => '<div class="primary_sidebar"><div class="widget">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="rounded">',
			'description' => __( 'Sidebar Widgets.', 'text_domain' ),
			'after_title'   => '</h3>',
		));

	register_sidebar(array(
			'name'          => 'Footer sidebar',
			'id'            => 'footer_sidebar',
			'before_widget' => '<div class="grid-33 tablet-grid-33 mobile-grid-100"><div class="widget">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="rounded">',
			'description' => __( 'Footer area widgets.', 'text_domain' ),
			'after_title'   => '</h3>',
		));

}
add_action( 'widgets_init', 'fbs_widgets_init' );

/*Add Thumbnail Support*/

add_theme_support( 'post-thumbnails' );


/*Custom Post Type Portfolio*/

if ( ! function_exists('fbs_portfolio_post_type') ) {

// Register Custom Post Type
function fbs_portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'fbs_portfolio' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'fbs_portfolio' ),
		'menu_name'             => __( 'Portfolio', 'fbs_portfolio' ),
		'name_admin_bar'        => __( 'Portfolio', 'fbs_portfolio' ),
		'archives'              => __( 'Category', 'fbs_portfolio' ),
		'attributes'            => __( 'Portfolio Attributes', 'fbs_portfolio' ),
		'parent_item_colon'     => __( 'Parent Portfolio:', 'fbs_portfolio' ),
		'all_items'             => __( 'All Portfolio', 'fbs_portfolio' ),
		'add_new_item'          => __( 'Add New Portfolio', 'fbs_portfolio' ),
		'add_new'               => __( 'Add New', 'fbs_portfolio' ),
		'new_item'              => __( 'New Portfolio', 'fbs_portfolio' ),
		'edit_item'             => __( 'Edit Portfolio', 'fbs_portfolio' ),
		'update_item'           => __( 'Update Portfolio', 'fbs_portfolio' ),
		'view_item'             => __( 'View Portfolio', 'fbs_portfolio' ),
		'view_items'            => __( 'View Portfolio', 'fbs_portfolio' ),
		'search_items'          => __( 'Search Portfolio', 'fbs_portfolio' ),
		'not_found'             => __( 'Not found', 'fbs_portfolio' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'fbs_portfolio' ),
		'featured_image'        => __( 'Featured Image', 'fbs_portfolio' ),
		'set_featured_image'    => __( 'Set featured image', 'fbs_portfolio' ),
		'remove_featured_image' => __( 'Remove featured image', 'fbs_portfolio' ),
		'use_featured_image'    => __( 'Use as featured image', 'fbs_portfolio' ),
		'insert_into_item'      => __( 'Insert into item', 'fbs_portfolio' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'fbs_portfolio' ),
		'items_list'            => __( 'Portfolio list', 'fbs_portfolio' ),
		'items_list_navigation' => __( 'Portfolio list navigation', 'fbs_portfolio' ),
		'filter_items_list'     => __( 'Filter items list', 'fbs_portfolio' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'fbs_portfolio' ),
		'description'           => __( 'Portfolio', 'fbs_portfolio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'portfolio-cat' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);
	register_post_type( 'fbs_portfolio', $args );

}
add_action( 'init', 'fbs_portfolio_post_type', 0 );

}

// Register Custom Taxonomy
function fbs_portfolio_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Portfolio Categories', 'Taxonomy General Name', 'portfolio_cat' ),
		'singular_name'              => _x( 'Portfolio Category', 'Taxonomy Singular Name', 'portfolio_cat' ),
		'menu_name'                  => __( 'Portfolio Category', 'portfolio_cat' ),
		'all_items'                  => __( 'All Category', 'portfolio_cat' ),
		'parent_item'                => __( 'Parent Item', 'portfolio_cat' ),
		'parent_item_colon'          => __( 'Parent Item:', 'portfolio_cat' ),
		'new_item_name'              => __( 'New Item Name', 'portfolio_cat' ),
		'add_new_item'               => __( 'Add New Item', 'portfolio_cat' ),
		'edit_item'                  => __( 'Edit Item', 'portfolio_cat' ),
		'update_item'                => __( 'Update Item', 'portfolio_cat' ),
		'view_item'                  => __( 'View Item', 'portfolio_cat' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'portfolio_cat' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'portfolio_cat' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'portfolio_cat' ),
		'popular_items'              => __( 'Popular Items', 'portfolio_cat' ),
		'search_items'               => __( 'Search Items', 'portfolio_cat' ),
		'not_found'                  => __( 'Not Found', 'portfolio_cat' ),
		'no_terms'                   => __( 'No items', 'portfolio_cat' ),
		'items_list'                 => __( 'Items list', 'portfolio_cat' ),
		'items_list_navigation'      => __( 'Items list navigation', 'portfolio_cat' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'fbs_portfolio_cat', array( 'fbs_portfolio' ), $args );

}
add_action( 'init', 'fbs_portfolio_taxonomy', 0 );


?>