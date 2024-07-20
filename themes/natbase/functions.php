<?php

// •❅────────────✧❅✦❅✧────────────❅•
//	Load CSS
// •················•················•
function load_css() {
	wp_register_style( 'style', get_template_directory_uri() . '/resources/css/style.css', [], false, 'all' );
	wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_scripts', 'load_css' );

// •❅────────────✧❅✦❅✧────────────❅•
//	Load JavaScript
// •················•················•
function load_javascript() {
	wp_enqueue_script( 'jquery' );
	wp_register_script_module( 'script', get_template_directory_uri() . '/resources/js/script.js', [ 'jquery' ], false );
	wp_enqueue_script_module( 'script' );
}

add_action( 'wp_enqueue_scripts', 'load_javascript' );

// •❅────────────✧❅✦❅✧────────────❅•
//	Theme Options
// •················•················•
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

// •❅────────────✧❅✦❅✧────────────❅•
//	Menus
// •················•················•
// register_nav_menus( [
// 	'main-menu' => 'Main Menu',
// ] );

// •❅────────────✧❅✦❅✧────────────❅•
// Custom Image Sizes
// •················•················•
// add_image_size( 'large', 1920, 1080, true );

// •❅────────────✧❅✦❅✧────────────❅•
// Register Sidebars
// •················•················•
// function theme_register_sidebars() {
// 	register_sidebar( [
// 		'id' => 'page-sidebar',
// 		'name' => 'Page Sidebar',
// 		'before_title' => '<h4 class="widget__title">',
// 		'after_title' => '</h4>'
// 	] );
// }

// add_action( 'widgets_init', 'theme_register_sidebars' );

// •❅────────────✧❅✦❅✧────────────❅•
// Custom Post Types
// •················•················•

function register_custom_post_type() {
	register_post_type( 'theme-custom-posts', [
		'public' => true,
		'has-archive' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-chart-pie',
		'supports' => [ 'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats' ],
		'rewrite' => [
			'slug' => 'custom-posts',
		],
		'labels' => [
			'name' => 'Custom Posts',
			'singular-name' => 'Custom Post',
			'add_new' => 'Add New Custom Post',
			'add_new_item' => 'Add New Custom Post',
			'edit_item' => 'Edit Custom Post',
			'new_item' => 'New Custom Post',
			'view_item' => 'View Custom Post',
			'view_items' => 'View Custom Posts',
			'search_items' => 'Search Custom Posts',
			'all_items' => 'All Custom Posts',
			'archives' => 'Custom Post Archives',
			'attributes' => 'Custom Post Attributes',
			'item_published' => 'Custom Post published.',
			'item_published_privately' => 'Custom Post published privetly.',
			'item_reverted_to_draft' => 'Custom Post reverted to draft.',
			'item_trashed' => 'Custom Post trashed.',
			'item_scheduled' => 'Custom Post scheduled.',
			'item_updated' => 'Custom Post updated.',
			'item_link' => 'Custom Post Link',
			'featured_image' => 'Featured image',
		],
	] );
}

add_action( 'init', 'register_custom_post_type' );


// •❅────────────✧❅✦❅✧────────────❅•
// Custom Taxonomies
// •················•················•

function register_custom_taxonomy() {
	register_taxonomy( 'theme-custom-taxonomies', [ 'theme-custom-posts' ], [
		'public' => true,
		'has-archive' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'hierarchical' => true,
		'rewrite' => [
			'slug' => 'custom-taxonomies',
		],
		'labels' => [
			'name' => 'Custom Taxonomies',
			'singular-name' => 'Custom Taxonomy',
			'add_new_item' => 'Add New Custom Taxonomy',
			'edit_item' => 'Edit Custom Taxonomy',
			'view_item' => 'View Custom Taxonomy',
			'search_items' => 'Search Custom Taxonomies',
			'all_items' => 'All Custom Taxonomies',
			'update_item' => 'Update Custom Taxonomy',
			'parent_item' => 'Parent Custom Taxonomy',
			'new_item_name' => 'New Custom Taxonomy Name',
			'item_link' => 'Custom Taxonomy Link',
			'add_or_remove_items' => 'Add or remove custom taxonomies.',
			'choose_from_most_used' => 'Choose from the most used custom taxonomies.',
			'not_found' => 'No custom taxonomies found.',
			'no_terms' => 'No custom taxonomies.',
			'filter_by_item' => 'Filter by custom taxonomy.',
			'item_link_description' => 'A link to a custom taxonomy.',
		],
	] );
};

add_action( 'init', 'register_custom_taxonomy' );

