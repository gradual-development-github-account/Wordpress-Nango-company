<?php

function nango_scripts_loader() {
  wp_deregister_script( 'jquery' );
  wp_register_script(   'jquery', get_template_directory_uri() .                     '/sources/vendor/libs/jQuery/jquery-3.2.2.min.js', array(), false, true );
  wp_enqueue_script(    'jquery' );


  wp_enqueue_script( 'semantic-UI-scripts', get_template_directory_uri() .           '/sources/vendor/frameworks/SemanticUI/semantic.js', array(), false, true );

  wp_enqueue_script( 'semantic-UI-settings-scripts', get_template_directory_uri() .  '/sources/theme/scripts/scripts-semanticUI.js', array(), false, true );


  wp_enqueue_script( 'swiper-scripts', get_template_directory_uri() .                '/sources/vendor/libs/swiper/swiper.min.js', array(), false, true );

  wp_enqueue_script( 'swiper-settings-scripts', get_template_directory_uri() .       '/sources/theme/scripts/scripts-swiper.js', array(), false, true );


//  wp_enqueue_script( 'videojs-scripts', get_template_directory_uri() .               '/sources/vendor/frameworks/Videojs/videojs-5.11.9.min.js', array(), false, true );
//  wp_enqueue_script( 'videojs-settings-scripts', get_template_directory_uri() .      '/sources/theme/scripts/scripts-videojs.js', array(), false, true );


  wp_enqueue_script( 'lodash-scripts', get_template_directory_uri() .                '/sources/vendor/libs/lodash/lodash-4.17.4.min.js', array(), false, true );


  wp_enqueue_script( 'theme-gradients-hover', get_template_directory_uri() .         '/sources/theme/scripts/scripts-gradients-hover.js', array(), false, true );

  wp_enqueue_script( 'theme-video-contents-scripts', get_template_directory_uri() .  '/sources/theme/scripts/scripts-video-contents.js', array(), false, true );

  wp_enqueue_script( 'theme-progress-bars-scripts', get_template_directory_uri() .   '/sources/theme/scripts/scripts-progress-bars.js', array(), false, true );

  wp_enqueue_script( 'theme-onmouseleave-scripts', get_template_directory_uri() .    '/sources/theme/scripts/scripts-onmouseenter-onmouseleave.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'nango_scripts_loader' );

?>