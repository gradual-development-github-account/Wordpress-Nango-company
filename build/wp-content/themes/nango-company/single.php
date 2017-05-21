<?php

if        ( $post->post_type === 'blog' ) {
  include ( TEMPLATEPATH . '/template-pages/page-blog-single.php' );
  
} else if ( $post->post_type === 'portfolio' ) {
  include ( TEMPLATEPATH . '/template-pages/page-portfolio-single.php' );

} else if ( $post->post_type === 'quality-control' ) {
  include ( TEMPLATEPATH . '/template-pages/page-quality-control-single.php' );

} else {
  //var_dump( get_post_type() );
  echo 'single.php echo';
}

?>
