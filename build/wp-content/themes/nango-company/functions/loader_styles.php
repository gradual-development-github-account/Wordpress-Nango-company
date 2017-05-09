<?php

function nango_styles_loader() {
  wp_enqueue_style( 'semantic-UI-styles', get_template_directory_uri() .        '/sources/vendor/frameworks/SemanticUI/semantic.css' );

  wp_enqueue_style( 'flexgrid-styles', get_template_directory_uri() .           '/sources/vendor/libs/flexboxgrid/flexboxgrid-12-cols-15-gutter.css' );

  wp_enqueue_style( 'swiper-styles', get_template_directory_uri() .             '/sources/vendor/libs/swiper/swiper.min.css' );

  wp_enqueue_style( 'mobile-menu-button-styles', get_template_directory_uri() . '/sources/vendor/libs/Mobile-menu-buttons/mobile-menu-buttons.css' );

//  wp_enqueue_style( 'videojs-styles', get_template_directory_uri() .            '/sources/vendor/frameworks/Videojs/videojs.min.css' );
//  wp_enqueue_style( 'videojs-settingsstyles', get_template_directory_uri() .    '/sources/vendor/frameworks/Videojs/videojs--nango-theme-style.css' );

  wp_enqueue_style( 'normalize-styles', get_template_directory_uri() .          '/sources/vendor/libs/normalizeCSS/normalize-5.0.0.css' );

  wp_enqueue_style( 'nango-layout-styles', get_template_directory_uri() .       '/sources/theme/styles/styles.css' );
}
add_action( 'wp_enqueue_scripts', 'nango_styles_loader' );

?>