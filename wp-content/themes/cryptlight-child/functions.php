<?php
/**
 * Setup Cryptlight Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function cryptlight_child_theme_setup() {
	load_child_theme_textdomain( 'cryptlight-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'cryptlight_child_theme_setup' );


add_action( 'wp_enqueue_scripts', 'cryptlight_enqueue_styles' );
function cryptlight_enqueue_styles() {
    $parenthandle = 'cryptlight-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

