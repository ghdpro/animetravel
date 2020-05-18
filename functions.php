<?php

/**
 * Setup
 */

if ( ! function_exists( 'animetravel_setup' ) ) :
	function animetravel_setup() {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 2560, 1440, array( 'center', 'center')  );
	}
endif;
add_action( 'after_setup_theme', 'animetravel_setup' );
