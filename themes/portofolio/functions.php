<?php
/**
 * Theme setup and front-end assets.
 */
function portofolio_theme_setup() {
    // add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'portofolio_theme_setup' );

function portofolio_enqueue_assets() {
	wp_enqueue_style(
		'portofolio-style',
		get_theme_file_uri( '/dist/main.css' ),
		array(),
		filemtime( get_theme_file_path( '/dist/main.css' ) )
	);

	wp_enqueue_script(
		'portofolio-script',
		get_theme_file_uri( '/dist/main.js' ),
		array(),
		filemtime( get_theme_file_path( '/dist/main.js' ) ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'portofolio_enqueue_assets' );