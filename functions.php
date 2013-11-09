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