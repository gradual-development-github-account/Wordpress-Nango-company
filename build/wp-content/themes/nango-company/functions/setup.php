<?php

function nango_theme_setup() {
  add_theme_support( 'title-tag' );

  add_theme_support( 'custom-logo' , array(
      'height' => 60,
      'width'  => 60,
      'flex-height' => true
  ));

  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 120, 120 );

  add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
  ));

  add_theme_support( 'post-formats', array(
      'aside',
      'image',
      'video',
      'gallery'
  ));

  register_nav_menu('main_nav', 'Main nav');
}
add_action( 'after_setup_theme', 'nango_theme_setup' );

?>