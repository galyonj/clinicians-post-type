<?php
/**
 * Plugin Name: Clinician Biographies
 * Plugin URI: https://github.com/galyonj/clinicians-post-type
 * Description: Initializes a custom post type for Covenant Therapy Centers clinicians and creates a custom taxonomy type to handle arranging them.
 * Version: 1.1
 * Author: John Galyon
 * Author URI: https://github.com/galyonj
 * License: GPLv2
 */

// TODO: Are we best served by using an activation hook to dynamically create the page on which these things will live?

// Register Custom Post Type
function clinicians_post_type() {

	$labels = array(
		'name'                  => _x( 'Clinicians', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Clinician', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Clinician Bios', 'text_domain' ),
		'name_admin_bar'        => __( 'Clinician', 'text_domain' ),
		'archives'              => __( 'Clinician Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Clinicians', 'text_domain' ),
		'add_new_item'          => __( 'Add New Clinician', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Clinician', 'text_domain' ),
		'edit_item'             => __( 'Edit Clinician', 'text_domain' ),
		'update_item'           => __( 'Update Clinician', 'text_domain' ),
		'view_item'             => __( 'View Clinician', 'text_domain' ),
		'search_items'          => __( 'Search Clinician', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Clinician', 'text_domain' ),
		'description'           => __( 'Add, edit, or delete Covenant Therapy Centers clinician listings.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'clinician_location' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'clinician_bios', $args );

}
add_action( 'init', 'clinicians_post_type', 0 );


// Register Custom Taxonomy
function clinicians_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Locations', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Location', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Locations', 'text_domain' ),
		'all_items'                  => __( 'All Locations', 'text_domain' ),
		'parent_item'                => __( 'Parent Location', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Location', 'text_domain' ),
		'add_new_item'               => __( 'Add New Location', 'text_domain' ),
		'edit_item'                  => __( 'Edit Location', 'text_domain' ),
		'update_item'                => __( 'Update Location', 'text_domain' ),
		'view_item'                  => __( 'View Location', 'text_domain' ),
		'separate_items_with_commas' => __( 'separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => null,
		'popular_items'              => __( 'Popular Locations', 'text_domain' ),
		'search_items'               => __( 'Search Locations', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'description'                => 'Covenant Therapy Centers locations',
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'clinician_location', array( 'clinician_bios' ), $args );

}
add_action( 'init', 'clinicians_custom_taxonomy', 0 );
?>