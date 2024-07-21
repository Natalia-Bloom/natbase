<?php 

// •❅────────────✧❅✦❅✧────────────❅•
//	Load CSS
// •················•················•

function load_css() {
	wp_register_style( 'style', get_template_directory_uri() . '/dist/style.css', [], 1, 'all' );
	wp_enqueue_style( 'style' );
}

add_action( 'wp_enqueue_scripts', 'load_css' );

// •❅────────────✧❅✦❅✧────────────❅•
//	Load JavaScript
// •················•················•

function load_javascript() {
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'script', get_template_directory_uri() . '/dist/script.js', [ 'jquery' ], 1, true );
	wp_enqueue_script( 'script' );
}

add_action( 'wp_enqueue_scripts', 'load_javascript' );
