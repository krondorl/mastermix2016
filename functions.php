<?php


$file   = "/css/default.css";
$url    = get_template_directory_uri() . $file;
$path   = get_template_directory() . $file;
$handle = get_stylesheet() . '-default';

// Overridden?
if ( is_child_theme() && is_readable( get_stylesheet_directory() . $file ) )
{
    $url  = get_stylesheet_directory_uri() . $file;
    $path = get_stylesheet_directory()     . $file;
}

$modified = filemtime( $path );

add_action( 'wp_loaded', function() use ( $handle, $url, $modified ) {
    wp_register_style( $handle, $url, [], $modified );
});

add_action( 'wp_enqueue_scripts', function() use ( $handle ) {
    wp_enqueue_style( $handle );
});

  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

  function theme_enqueue_styles() {
      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), rand(111,9999), 'all' );
  }

  // Override font loading, with empty function.
  // No webfonts needed!
  function twentysixteen_fonts_url() {

  }

?>