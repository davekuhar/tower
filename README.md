# tower

![preview](https://raw.github.com/transmitstudio/tower/master/screenshot.png)
A starter child theme for the Genesis Framework.

- [Live demo](http://tower.holeintheskymedia.net/)

## Introduction
I should probably write an introduction.

## Usage
This is about as basic as it gets. This will create a bare bones Genesis child theme with the default `style.css` ignored in favor of `/css/genesis.css` which is a duplicate of the stylesheet from the Genesis parent theme version. I prefer this method so that when there is an update to Genesis I can compare the new stylesheet to mine and determine whether I want to incorporate the updates into my stylesheet.

### style.css:
```css
/*
	Theme Name: Tower
	Description: A starter child theme for the Genesis Framework.
	Author: Joe Mendel
	Author URI: http://holeintheskymedia.com/
	Version: 1.0.0
 
	Template: genesis
	Template Version: 2.0.1
 
	License: GPL-2.0+
	License URI: http://www.opensource.org/licenses/gpl-license.php
*/

/* All customs styles for this theme are in /css */
```
### genesis.css
I make just a few changes in this file which is a copy of `style.css` from the Genesis parent. I remove the TOC and theme specific info from the first few lines. I leave the StudioPress author info intact because, well, they're the author. Then, unless you plan on using the Lato font family from [Google Fonts](http://www.google.com/fonts), I comment that line out.
`/* @import url(//fonts.googleapis.com/css?family=Lato:300,700); */`

### functions.php:
```php
<?php

//* Initialize Genesis
include_once( get_template_directory() . '/lib/init.php' );

//* Define Genesis Child theme constants
	
	// Child Theme Name, used in footer.
	define( 'CHILD_THEME_NAME', 'Tower' );
	
	// Child Theme URL, used in footer.
	define( 'CHILD_THEME_URL', 'http://tower.holeintheskymedia.net/' );
	
	// Child Theme Version.
	define( 'CHILD_THEME_VERSION', '1.0.0' );

//* Genesis functions
include_once( CHILD_DIR . '/lib/genesis.php' );
```

### /lib/genesis.php:
```php
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
```
