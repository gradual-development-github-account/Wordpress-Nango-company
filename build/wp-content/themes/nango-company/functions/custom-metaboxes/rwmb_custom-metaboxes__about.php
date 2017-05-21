<?php





if ( get_post_meta( intval( $_GET['post']))['_wp_page_template']['0'] !== 'template-pages/page-about.php' ) {
  add_action( 'admin_print_scripts', 'hidden_nango_about_team_meta_boxes' );
} else {
  add_action( 'admin_print_footer_scripts', 'change_nango_about_team_meta_boxes' );
}



function hidden_nango_about_team_meta_boxes() {
   ?>
  <style>
    #rwmb_team-members-admin-id {
      display: none;
    }
  </style>
  <?php
}

function change_nango_about_team_meta_boxes() {
  ?>
  <script>
    document.querySelector( '#rwmb_team-members-admin-id h2 span' ).innerHTML = 'Информация о сотрудниках';
  </script>
  <?php
}







function nango_about_team_meta_boxes( $meta_boxes ) {

  $prefix = 'nango_about_team';

  $meta_boxes[] = array(
      'title'      => __( 'rwmb_team-members-admin-id', 'textdomain' ),
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







?>