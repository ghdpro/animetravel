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

function animetravel_register_taxonomy() {
    register_taxonomy(
        'season',
        'post',
        array(
            'labels' => array (
                'name'              => 'Season',
                'singular_name'     => 'season',
                'search_items'      => 'Search Season',
                'all_items'         => 'All seasons',
                'view_item'         => 'View Season',
                'parent_item'       => 'Parent Season',
                'parent_item_colon' => 'Parent Season:',
                'edit_item'         => 'Edit Season',
                'update_item'       => 'Update Season',
                'add_new_item'      => 'Add New season',
                'new_item_name'     => 'New Season Name',
                'not_found'         => 'No seasons found',
                'back_to_items'     =>  'Back to Seasons',
                'menu_name'         =>  'Seasons',
            ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'season' ),
            'show_in_rest'          => true,
        )
    );
    register_taxonomy(
        'location',
        'post',
        array(
           'labels' => array (
                'name'              => 'Location',
                'singular_name'     => 'Location',
                'search_items'      => 'Search Location',
                'all_items'         => 'All Locations',
                'view_item'         => 'View Location',
                'parent_item'       => 'Parent Location',
                'parent_item_colon' => 'Parent Location:',
                'edit_item'         => 'Edit Location',
                'update_item'       => 'Update Location',
                'add_new_item'      => 'Add New Location',
                'new_item_name'     => 'New Location Name',
                'not_found'         => 'No Locations found',
                'back_to_items'     =>  'Back to Locations',
                'menu_name'         =>  'Locations',
            ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'location' ),
            'show_in_rest'          => true,
        )
    );
}
add_action(  'init', 'animetravel_register_taxonomy' );
