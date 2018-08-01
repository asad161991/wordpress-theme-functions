<?php
// Register Custom Post Type
function myvideo_post_type() {

	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'male_rejuvi' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'male_rejuvi' ),
		'menu_name'             => __( 'myvideo Types', 'male_rejuvi' ),
		'name_admin_bar'        => __( 'myvideo Type', 'male_rejuvi' ),
		'archives'              => __( 'myvideo Archives', 'male_rejuvi' ),
		'attributes'            => __( 'myvideo Attributes', 'male_rejuvi' ),
		'parent_item_colon'     => __( 'Parent myvideo:', 'male_rejuvi' ),
		'all_items'             => __( 'All myvideo', 'male_rejuvi' ),
		'add_new_item'          => __( 'Add New myvideo', 'male_rejuvi' ),
		'add_new'               => __( 'Add New', 'male_rejuvi' ),
		'new_item'              => __( 'New myvideo', 'male_rejuvi' ),
		'edit_item'             => __( 'Edit myvideo', 'male_rejuvi' ),
		'update_item'           => __( 'Update myvideo', 'male_rejuvi' ),
		'view_item'             => __( 'View myvideo', 'male_rejuvi' ),
		'view_items'            => __( 'View myvideo', 'male_rejuvi' ),
		'search_items'          => __( 'Search myvideo', 'male_rejuvi' ),
		'not_found'             => __( 'Not found', 'male_rejuvi' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'male_rejuvi' ),
		'featured_image'        => __( 'Featured Image', 'male_rejuvi' ),
		'set_featured_image'    => __( 'Set featured image', 'male_rejuvi' ),
		'remove_featured_image' => __( 'Remove featured image', 'male_rejuvi' ),
		'use_featured_image'    => __( 'Use as featured image', 'male_rejuvi' ),
		'insert_into_item'      => __( 'Insert into myvideo', 'male_rejuvi' ),
		'uploaded_to_this_item' => __( 'Uploaded to this myvideo', 'male_rejuvi' ),
		'items_list'            => __( 'myvideo list', 'male_rejuvi' ),
		'items_list_navigation' => __( 'myvideo list navigation', 'male_rejuvi' ),
		'filter_items_list'     => __( 'Filter myvideo list', 'male_rejuvi' ),
	);
	$args = array(
		'label'                 => __( 'Video', 'male_rejuvi' ),
		'description'           => __( 'Videos Upload Here', 'male_rejuvi' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 15,
		'menu_icon'             => 'dashicons-media-audio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'myvideo', $args );

}
add_action( 'init', 'myvideo_post_type', 0 );