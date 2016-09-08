<?php
/**
 * Plugin Name: Movie Reviews
 * Plugin URI: https://github.com/galyonj/clinicians-post-type
 * Description: Declares a plugin that will create a custom post type for Covenant Therapy Centers clinicians
 * Version: 1.0
 * Author: John Galyon
 * Author URI: https://github.com/galyonj
 * License: GPLv2
 */

function clinicians_post_type() {
	$labels = array(
		'menu_admin_bar' => 'Post Type',
		'menu_name' => 'Post Types',
		'name' => 'Clinicians',
		'singular_name' => 'Clinician',
	);
	$args = array(
		'can_export'          => true,
		'capability_type'     => 'post',
		'description'         => 'Create, edit, or delete Covenant Therapy Centers clinician biographies',
		'exclude_from_search' => true,
		'has_archive'         => true,
		'hierarchical'        => false,
		'label'               => 'clinician',
		'labels'              => $labels,
		'menu_icon'           => 'dashicons-welcome-write-blog',
		'menu_position'       => 5,
		'public'              => true,
		'publicly_queryable'  => true,
		'show_in_admin_bar'   => true,
		'show_in_menu'        => false,
		'show_in_nav_menus'   => false,
		'show_ui'             => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'          => array( 'category' )
	);
	register_post_type( 'clinician_bios', $args );
}
add_action( 'init','clinicians_post_type', 0 );
?>