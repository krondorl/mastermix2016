<?php

  add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

  function theme_enqueue_styles() {
      wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), rand(111,9999), 'all' );
  }

  // Override font loading, with empty function.
  // No webfonts needed!
  function twentysixteen_fonts_url() {

  }

?>