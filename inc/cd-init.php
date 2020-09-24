<?php

function cd_init(){

  // add theme support
  add_theme_support( 'title-tag');
  add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 1100,
  ) );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'custom-header' );
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
  add_theme_support( 'customize-selective-refresh-widgets' );
  add_theme_support( 'aline-wide' );
  add_theme_support( 'wp-block-styles' );
  add_theme_support( 'editor-styles' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
  


  
  // register menu
  register_nav_menu( 'primary', __( 'Primary Menu', 'chblog' ) );
  
}

function cd_sidebar_widget(){
  register_sidebar( array(
    'name' => 'Main Sidebar',
    'id' => 'sidebar1',
    'description' => 'It is the main sidebar',
    'before_widget' => '<section id="%1$s" class="side-section %2$s">',
    'after_widget' => '</section>',
    'before_title' => '<div><h4 class="widget-title">',
    'after_title' => '</h4></div>',

  ) );

  // footer 1
  register_sidebar( array(
    'name' => 'Footer 1',
    'id' => 'footer1',
    'description' => 'It is the main sidebar',
    'before_widget' => '<div id="%1$s" class="footer-div %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div><h4 class="widget-title">',
    'after_title' => '</h4></div>',

  ) );

  // footer 1
  register_sidebar( array(
    'name' => 'Footer 2',
    'id' => 'footer2',
    'description' => 'It is the main sidebar',
    'before_widget' => '<div id="%1$s" class="footer-div %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div><h4 class="widget-title">',
    'after_title' => '</h4></div>',

  ) );

  // footer 1
  register_sidebar( array(
    'name' => 'Footer 3',
    'id' => 'footer3',
    'description' => 'It is the main sidebar',
    'before_widget' => '<div id="%1$s" class="footer-div %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div><h4 class="widget-title">',
    'after_title' => '</h4></div>',

  ) );
}