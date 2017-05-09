<?php

require_once ('functions/loader_styles.php');

require_once ('functions/loader_scripts.php');

require_once ('functions/setup.php');

require_once ('functions/admin-panel.php');




//Hooks ( begin )

require_once ('functions/hooks/excerpt_more.php');

require_once ('functions/hooks/document_title_separator.php');

require_once ('functions/hooks/document_title_parts.php');

require_once ('functions/hooks/breadcrumbs.php');

require_once ('functions/hooks/hooks__links.php');


  //Sidebars
  require_once ('functions/widgets/registration/registration-sidebars.php');

  //Widgets
  require_once ('functions/widgets/registration/registration-widgets.php');

    //Widget recent posts
    require_once ('functions/widgets/classes/class-widget-recent-posts.php');

//Hooks ( end )







//Custom post-types
  //News
    //require_once ('functions/custom-post-types/custom-post-types__news.php');
  //Blog
    require_once ('functions/custom-post-types/custom-post-types__blog.php');
  //Portfolio
    require_once ('functions/custom-post-types/custom-post-types__portfolio.php');


//Custom taxonomies
  //Taxonomies
    //Blog
      //Blog categories
        require_once ('functions/custom-taxonomies/taxonomies/blog/custom-taxonomies__blog-categories.php');
      //Blog tags
        require_once ('functions/custom-taxonomies/taxonomies/blog/custom-taxonomies__blog-tags.php');
    //Portfolio
      //Portfolio categories
        require_once ('functions/custom-taxonomies/taxonomies/portfolio/custom-taxonomies__portfolio-categories.php');
      //Portfolio tags
        require_once ('functions/custom-taxonomies/taxonomies/portfolio/custom-taxonomies__portfolio-tags.php');
      //Portfolio page settings
//        require_once ('functions/custom-taxonomies/taxonomies/portfolio/custom-taxonomies__portfolio-single-page-settings.php');

  //Taxonomies permalinks
    require_once ('functions/custom-taxonomies/custom-taxonomies__permalinks.php');



//Custom metaboxes
  //Blog
    require_once ('functions/custom-metaboxes/custom-metaboxes__blog.php');
  //Portfolio
    require_once ('functions/custom-metaboxes/custom-metaboxes__portfolio.php')

?>