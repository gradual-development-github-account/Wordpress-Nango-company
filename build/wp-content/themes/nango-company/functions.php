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
  //Quality Control
    require_once ('functions/custom-post-types/custom-post-types__quality-control.php');


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
    //Quality Control
      //Quality Control categories
        require_once ('functions/custom-taxonomies/taxonomies/quality-control/custom-taxonomies__blog-categories.php');
      //Quality Control tags
        require_once ('functions/custom-taxonomies/taxonomies/quality-control/custom-taxonomies__blog-tags.php');

  //Taxonomies permalinks
    require_once ('functions/custom-taxonomies/custom-taxonomies__permalinks.php');




//Custom metaboxes
  //Blog
    require_once ('functions/custom-metaboxes/rwmb_custom-metaboxes__blog.php');

  //About
    require_once ('functions/custom-metaboxes/rwmb_custom-metaboxes__about.php');

  //Portfolio list page
    require_once ('functions/custom-metaboxes/portfolio-list-page/custom-metaboxes__portfolio-list-page.php');
  //Quality control list page
    require_once ('functions/custom-metaboxes/quality-control-list-page/custom-metaboxes__quality-control-list-page.php');

  //Portfolio single page filelds
    require_once ('functions/custom-metaboxes/portfolio-single-page/custom-metaboxes_portfolio-single-page__fields.php');
  //Portfolio single page table Details
    require_once ('functions/custom-metaboxes/portfolio-single-page/custom-metaboxes_portfolio-single-page__table-Details.php');

  //Quality Control single page filelds
    require_once ('functions/custom-metaboxes/quality-control-single-page/custom-metaboxes_quality-control-single-page__fields.php');
  //Quality Control single page table Details
    require_once ('functions/custom-metaboxes/quality-control-single-page/custom-metaboxes_quality-control-single-page__table-Details.php');
  //Quality Control single page Related posts
    require_once ('functions/custom-metaboxes/quality-control-single-page/custom-metaboxes_quality-control-single-page__related-posts.php');



  //Portfolio single post
    require_once ('functions/custom-metaboxes/rwmb_custom-metaboxes__portfolio-single-post.php');


  //Quality Control single post
    require_once ('functions/custom-metaboxes/rwmb_custom-metaboxes__quality-control-single-post.php');


  
  //Sections
    //Section 01
      require_once ('functions/custom-metaboxes/sections/custom-metaboxes_sections-page__section-01.php');      
    //Section 02
      require_once ('functions/custom-metaboxes/sections/custom-metaboxes_sections-page__section-02.php');    
    //Section 03
      require_once ('functions/custom-metaboxes/sections/custom-metaboxes_sections-page__section-03.php');    
    //Section 04
      require_once ('functions/custom-metaboxes/sections/custom-metaboxes_sections-page__section-04.php');    
    //Section 05    
      require_once ('functions/custom-metaboxes/sections/custom-metaboxes_sections-page__section-05.php');
?>