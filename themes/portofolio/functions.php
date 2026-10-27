<?php
/**
 * Theme setup and front-end assets.
 */
function portofolio_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'portofolio_theme_setup' );

function portofolio_enqueue_styles() {
	wp_enqueue_style(
		'portofolio-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'portofolio_enqueue_styles' );