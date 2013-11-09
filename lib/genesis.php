<?php

// Replace default style sheet
add_filter( 'stylesheet_uri', 'xmit_replace_default_style_sheet', 10, 2 );
function xmit_replace_default_style_sheet() {
	return CHILD_URL . '/css/genesis.css';
}

// Add custom styles
add_action( 'wp_enqueue_scripts', 'xmit_custom_styles' );
function xmit_custom_styles() {
	wp_enqueue_style( 'custom-stylesheet', CHILD_URL . '/css/custom.css', array(), CHILD_THEME_VERSION );
}

// Add HTML5 markup structure
add_theme_support( 'html5' );

// Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );