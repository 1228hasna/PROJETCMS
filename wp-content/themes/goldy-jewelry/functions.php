<?php
/**
 * goldy jewelry functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goldy jewelry
 */

if ( ! defined( '_GOLDY_Jewelry_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_GOLDY_Jewelry_VERSION', '1.0.0' );
}


function goldy_jewelry_wpdocs_setup_theme() {
   add_theme_support( 'title-tag' );
   add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'goldy_jewelry_wpdocs_setup_theme' );


/* enqueue script for parent theme stylesheeet */        
function goldy_jewelry_childtheme_parent_styles() {

   // enqueue style
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'goldy-jewelry' ) );
}
add_action( 'wp_enqueue_scripts', 'goldy_jewelry_childtheme_parent_styles');

require get_stylesheet_directory() . '/inc/init-variable.php';
require get_stylesheet_directory() . '/inc/init-hook.php';
