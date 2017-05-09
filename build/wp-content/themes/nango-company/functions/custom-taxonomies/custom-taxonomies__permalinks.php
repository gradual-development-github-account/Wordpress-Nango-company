<?php

/**
* Таксономия taxnews
*/
    // Удаление slug таксономии:
    function taxonomy_link( $link, $term, $taxonomy ) {
      if ( $taxonomy !== 'taxnews' )
        return $link;
      return str_replace( 'taxnews', 'category', $link );
    }
    add_filter( 'term_link', 'taxonomy_link', 10, 3 );

    // Редирект:
    function taxonomy_rewrite_rule() {
      add_rewrite_rule('category/ярлык-категрии-новостей-1/?$', 'index.php?taxnews=ярлык-категрии-новостей-1', 'top');
    }
    add_action('init', 'taxonomy_rewrite_rule');

?>