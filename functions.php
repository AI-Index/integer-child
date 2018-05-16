<?php
function mychildtheme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
function img_directory() {
    return get_stylesheet_directory_uri() . '/img/';
}

add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );


/* Change Excerpt length */
function custom_excerpt_length( $length ) {
return 300;
}
add_filter( ‘excerpt_length’, ‘custom_excerpt_length’, 999 );

add_filter('excerpt_more','__return_false');

// Changing excerpt more
function new_excerpt_more($more) {
  global $post;
  return '';
}
add_filter('excerpt_more','new_excerpt_more');

// Add 'odd' and 'even' post classes
function alternating_post_class ( $classes ) {
     global $current_class;
     if( is_home() ):
         $classes[] = $current_class;
         $current_class = ($current_class == 'odd') ? 'even' : 'odd';
     endif;
     return $classes;
}
add_filter ('post_class', 'alternating_post_class');
global $current_class;
$current_class = 'odd'; 

/* Prevent link to category page for now */
add_filter( 'the_category', function ( $thelist, $sep, $parents ) {
  return strip_tags( $thelist, '<ul><li>' );
} );

/* Register template redirect action callback */
add_action('template_redirect', 'meks_remove_wp_archives');
 
/* Remove archives */
function meks_remove_wp_archives(){
  //If we are on category or tag or date or author archive
  if( is_category() || is_tag() || is_date() || is_author() || is_search() ) {
    global $wp_query;
    $wp_query->set_404(); //set to 404 not found page
  }
}
