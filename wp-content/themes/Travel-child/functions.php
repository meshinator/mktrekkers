<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// END ENQUEUE PARENT ACTION
add_action( 'acf/init', function() {
	if ( function_exists( 'acf_add_options_page' ) ) {
		acf_add_options_page([
			'page_title' => __( 'Theme Settings', 'wptemplate' ),
			'menu_title' => __( 'Theme Settings', 'wptemplate' ),
			'menu_slug' => 'wptemplate_options',
			'redirect' => false,
			'icon_url' => 'dashicons-welcome-widgets-menus',
			'position' => 25,
		]);
		if ( function_exists( 'acf_add_options_sub_page' ) ) {
			// Pages
			// acf_add_options_sub_page( array(
			//     'title' => __( 'Posts Settings', 'wptemplate' ),
			//     'menu' =>  __( 'Posts Settings', 'wptemplate' ),
			//     'parent' => 'edit.php?post_type=page',
			//     'capability' => 'manage_options'
			// ));
		}
	}
});