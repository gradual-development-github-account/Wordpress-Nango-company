<?php

function nango_styles_loader() {
  wp_enqueue_style( 'flexgrid-styles', get_template_directory_uri() . '/vendor/libs/flexboxGrid-20-columns/css/flexboxGrid-20-columns.css' );
  
  wp_enqueue_style( 'mobile-menu-button-styles', get_template_directory_uri() . '/vendor/libs/mobile-menu-buttons-by-Jonathan Suh/hamburgers.css' );
  
  wp_enqueue_style( 'iconfont-styles', get_template_directory_uri() . '/vendor/libs/IconFont/css/icofont.css' );

  wp_enqueue_style( 'semantic-UI-styles', get_template_directory_uri() . '/vendor/frameworks/SemanticUI/semantic.css' );

  wp_enqueue_style( 'owl-carousel-styles', get_template_directory_uri() . '/vendor/libs/owl-carousel/owl.carousel.css' );
  wp_enqueue_style( 'owl-carousel-theme-styles', get_template_directory_uri() . '/vendor/libs/owl-carousel/owl.theme.default.css' );

  wp_enqueue_style( 'swiper-styles', get_template_directory_uri() . '/vendor/libs/swiper/swiper.min.css' );

  wp_enqueue_style( 'nango-layout-styles', get_template_directory_uri() . '/assets/styles/layout-concatenated.css' );
}
add_action( 'wp_enqueue_scripts', 'nango_styles_loader' );




function nango_scripts_loader() {
  wp_enqueue_script( 'semantic-UI-scripts', get_template_directory_uri() . '/vendor/frameworks/SemanticUI/semantic.js', array(), false, true );
  wp_enqueue_script( 'semantic-UI-settings-scripts', get_template_directory_uri() . '/assets/scripts/settings__semanticUI.js', array(), false, true );

  wp_enqueue_script( 'owl-carousel-scripts', get_template_directory_uri() . '/vendor/libs/owl-carousel/owl.carousel.js', array(), false, true );
  wp_enqueue_script( 'owl-carousel-settings-scripts', get_template_directory_uri() . '/assets/scripts/scripts__owl-carousel.js', array(), false, true );

  wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() . '/vendor/libs/swiper/swiper.min.js', array(), false, true );
  wp_enqueue_script( 'swiper-settings-scripts', get_template_directory_uri() . '/assets/scripts/scripts__swiper.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'nango_scripts_loader' );







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




