<?php








if ( get_post_meta( intval( $_GET['post']))['_wp_page_template']['0'] === 'template-pages/page-about.php' ) {

  function nango_about_team_meta_boxes( $meta_boxes ) {
    $prefix = 'nango_about_team';

    $meta_boxes[] = array(
        'title'      => __( 'Информация о сотрудниках', 'textdomain' ),
        'post_types' => 'page',
        'fields'     => array(
          // IMAGE ADVANCED - RECOMMENDED
            array(
                'name'             => esc_html__( 'Наша команда', 'nango_about_team' ),
                'id'               => "{$prefix}-gallery",
                'type'             => 'image_advanced',
              // Delete image from Media Library when remove it from post meta?
              // Note: it might affect other posts if you use same image for multiple posts
                'force_delete'     => false,
              // Maximum image uploads
                'max_file_uploads' => 12,
              // Display the "Uploaded 1/2 files" status
                'max_status'       => true,
            ),
        ),
    );
    return $meta_boxes;
  }

  add_filter( 'rwmb_meta_boxes', 'nango_about_team_meta_boxes' );


} else {

  //  remove_filter( 'rwmb_meta_boxes', 'nango_about_team_meta_boxes' );

    function nango_about_team_meta_boxes( $meta_boxes ) {
      $prefix = 'nango_about_team';

      $meta_boxes[] = array(
          'title'      => __( 'Информация о сотрудниках', 'textdomain' ),
          'post_types' => '',
          'fields'     => array(

          ),
      );
      return $meta_boxes;
    }

  add_filter( 'rwmb_meta_boxes', 'nango_about_team_meta_boxes' );
}








?>