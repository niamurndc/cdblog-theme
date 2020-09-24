<?php 

function cd_style_script(){
  // style added
  wp_enqueue_style( 'glider-css', get_template_directory_uri().'/inc/frontend/css/glider.css');
  wp_enqueue_style( 'fontwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
  wp_enqueue_style( 'mainstyle', get_stylesheet_uri());

  // script added
  // wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
  // wp_enqueue_script( 'popperjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');
  // wp_enqueue_script( 'boostrapscript', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'); 

  wp_enqueue_script( 'glider-js', get_template_directory_uri(). '/inc/frontend/js/glider.js', array(), 1.0, true);
  wp_enqueue_script( 'appjs', get_template_directory_uri(). '/inc/frontend/js/app.js', array('glider-js'), 1.7, true);
}