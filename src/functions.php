<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/bb3d3bd63e.js' );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );

/* Add Featured Image Support To Your WordPress Theme */
function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );

if(function_exists('add_image_size')){
	add_image_size( 'featured', 400, 250, true );
	add_image_size( 'post-thumb', 125, 75, true );
}

/* This function allows you use odd and even classes */

function oddeven_post_class ( $classes ) {
	global $current_class;
	$classes[] = $current_class;
	$current_class = ($current_class == 'odd') ? 'even' : 'odd';
	return $classes;
}
	 add_filter ( 'post_class' , 'oddeven_post_class' );
	 global $current_class;
	 $current_class = 'odd';

/* Add Excerpts to Custom Post Types */
add_post_type_support( 'page', 'excerpt' );

// custom excerpt length
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');