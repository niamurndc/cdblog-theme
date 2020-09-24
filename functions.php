<?php 
// include filed
include(get_template_directory(). '/inc/frontend/cd-style.php');
include(get_template_directory(). '/inc/cd-init.php');


// call files or action
add_action( 'wp_enqueue_scripts', 'cd_style_script' );
add_action( 'after_setup_theme', 'cd_init' );
add_action( 'widgets_init', 'cd_sidebar_widget' );