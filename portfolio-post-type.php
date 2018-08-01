<?php

// Register Custom Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => _x( 'Portfolios', 'Post Type General Name', 'male_rejuvi' ),
		'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'male_rejuvi' ),
		'menu_name'             => __( 'Portfolio Types', 'male_rejuvi' ),
		'name_admin_bar'        => __( 'Portfolio Type', 'male_rejuvi' ),
		'archives'              => __( 'Portfolio Archives', 'male_rejuvi' ),
		'attributes'            => __( 'Portfolio Attributes', 'male_rejuvi' ),
		'parent_item_colon'     => __( 'Portfolio Item:', 'male_rejuvi' ),
		'all_items'             => __( 'All Portfolio', 'male_rejuvi' ),
		'add_new_item'          => __( 'Add New Portfolio', 'male_rejuvi' ),
		'add_new'               => __( 'Add New', 'male_rejuvi' ),
		'new_item'              => __( 'New Portfolio', 'male_rejuvi' ),
		'edit_item'             => __( 'Edit Portfolio', 'male_rejuvi' ),
		'update_item'           => __( 'Update Portfolio', 'male_rejuvi' ),
		'view_item'             => __( 'View Portfolio', 'male_rejuvi' ),
		'view_items'            => __( 'View Portfolio', 'male_rejuvi' ),
		'search_items'          => __( 'Search Portfolio', 'male_rejuvi' ),
		'not_found'             => __( 'Not found', 'male_rejuvi' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'male_rejuvi' ),
		'featured_image'        => __( 'Featured Image', 'male_rejuvi' ),
		'set_featured_image'    => __( 'Set featured image', 'male_rejuvi' ),
		'remove_featured_image' => __( 'Remove featured image', 'male_rejuvi' ),
		'use_featured_image'    => __( 'Use as featured image', 'male_rejuvi' ),
		'insert_into_item'      => __( 'Insert into Portfolio', 'male_rejuvi' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'male_rejuvi' ),
		'items_list'            => __( 'Portfolio list', 'male_rejuvi' ),
		'items_list_navigation' => __( 'Portfolio list navigation', 'male_rejuvi' ),
		'filter_items_list'     => __( 'Filter Portfolio list', 'male_rejuvi' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'male_rejuvi' ),
		'description'           => __( 'This is a Portfolio Area', 'male_rejuvi' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );