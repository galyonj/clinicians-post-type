<?php
/**
 * Plugin Name: Clinician Biographies
 * Plugin URI: https://github.com/galyonj/clinicians-post-type
 * Description: Initializes a custom post type for Covenant Therapy Centers clinicians, as well as a custom taxonomy type to handle arranging them.
 * Version: 1.0
 * Author: John Galyon
 * Author URI: https://github.com/galyonj
 * License: GPLv2
 */

// Create a custom post type to handle the addition of Covenant Therapy Centers clinicians
function clinicians_post_type() {
	$labels = array(
		'add_new'               => 'Add New',
		'add_new_item'          => 'Add New Clinician',
		'all_items'             => 'All Clinicians',
		'edit_item'             => 'Edit Clinician',
		'featured_image'        => 'Featured Image',
		'filter_items_list'     => 'Filter items list',
		'insert_into_item'      => 'Insert into item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'menu_admin_bar'        => 'Post Type',
		'menu_name'             => 'Clinician Bios',
		'name'                  => 'Clinician Bios',
		'new_item'              => 'New Clinician',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'parent_item_colon'     => 'Parent Item:',
		'remove_featured_image' => 'Remove featured image',
		'search_item'           => 'Search Item',
		'set_featured_image'    => 'Set featured image',
		'singular_name'         => 'Clinician',
		'update_item'           => 'Update Item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'use_featured_image'    => 'Use as featured image',
		'view_item'             => 'View Item'
	);
	$args = array(
		'can_export'          => true,
		'capability_type'     => 'post',
		'description'         => 'Create, edit, or delete Covenant Therapy Centers clinician biographies',
		'exclude_from_search' => true,
		'has_archive'         => false,
		'hierarchical'        => false,
		'label'               => 'clinician',
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'menu_position'       => 5,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_in_admin_bar'   => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_ui'             => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'          => array( 'category' )
	);
	register_post_type( 'clinician_bios', $args );
}
add_action( 'init','clinicians_post_type', 0 );


?>