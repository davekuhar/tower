<?php

// Replace main styleheet with a copy of the Genesis stylesheet
remove_action('genesis_meta', 'genesis_enqueue_main_stylesheet', 5);
add_action('genesis_meta', 'xmit_genesis_enqueue_main_stylesheet', 10);
function xmit_genesis_enqueue_main_stylesheet() {
	wp_enqueue_style( 'genesis-stylesheet', CHILD_URL . '/css/genesis.css', array(), PARENT_THEME_VERSION );
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