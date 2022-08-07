<?php
 // register footer
function ns_register_footer_widget() {

	register_sidebar(
		array(
			'before_widget' => '<footer class="site-footer center-txt left-padding-wrapper">',
			'after_widget'  => '</footer>',			
			'name'        => __( 'Footer-Widget', 'pfacarts' ),
			'id'          => 'footer-widget',
			'description' => __( 'This is the widget area in the bottom footer.', 'pfacarts' ),
		)
	);
}

add_action( 'widgets_init', 'ns_register_footer_widget' );

// function ns_register_social_widget() {

// 	register_sidebar(
// 		array(
// 			'before_widget' => '<div class="social-widget">',
// 			'after_widget'  => '</div>',			
// 			'name'        => __( 'Social-Widget', 'pfacarts' ),
// 			'id'          => 'social-widget',
// 			'description' => __( 'This is the widget area for social media.', 'pfacarts' ),
// 		)
// 	);
// }

// add_action( 'widgets_init', 'ns_register_social_widget' );
function custom__theme_css() {
	wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap' );
	wp_enqueue_style( 'style', get_stylesheet_uri() . '?v=1.16' );
	// wp_enqueue_style( 'animate', '/wp-content/themes/pfac/src/animate.css/animate.min.css' );
	wp_enqueue_style( 'aos-css', '/wp-content/themes/pfac/src/aos-master/dist/aos.css' );
}
the_posts_pagination( array(
	'mid_size' => 2,
	'prev_text' => __( 'Previous Page', 'textdomain' ),
	'next_text' => __( 'Next Page', 'textdomain' ),
	) );
function custom__theme_js() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/bb3d3bd63e.js' );
	wp_enqueue_script( 'aos-js', '/wp-content/themes/pfac/src/aos-master/dist/aos.js', array(), '1.0', true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
 

function flickity_script(){
    if ( is_home() || is_page_template('video.php') ) {
		wp_enqueue_script( 'flickity-js-library', '/wp-content/themes/pfac/src/flickity/flickity-library.js', array(), '1.0', true );
		wp_enqueue_script( 'flickity-js', '/wp-content/themes/pfac/src/flickity/flickity.js', array(), '1.0', true );
    } 
}
function flickity_style(){
    if ( is_home() ||  is_page_template('video.php')) {
		wp_enqueue_style( 'flickity-css', '/wp-content/themes/pfac/src/flickity/flickity.css' );
    } 
}

add_action('wp_enqueue_scripts','flickity_script', 99999 );
add_action( 'wp_enqueue_scripts', 'flickity_style' );

add_action( 'wp_enqueue_scripts', 'custom__theme_css' );
add_action( 'wp_enqueue_scripts', 'custom__theme_js', 99999 );
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

function my_awesome_tag_fixer( $input ){
	return preg_replace( '/(<.+)\s\/>/', '$1>', $input );
  }
  
  foreach( array('the_content', 'the_excerpt', 'comment_text') as $filter )
	add_filter( $filter, 'my_awesome_tag_fixer', 12 );