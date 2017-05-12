<?php
/**
 * Render function
 */
function nango_Portfolio_list_page_metaboxes_render( $post ) {

  $fields = get_post_meta( $post->ID, 'nango_portfolio_list_page', true );

  settings_errors();

  ?>
  <div>
    <label class=""
           for="nango_portfolio-list-page__subtitle">Подзаголовок</label>
    <input class=""
            id="nango_portfolio-list-page__subtitle"
           type="text"
           name="nango_portfolio_list_page[subtitle]"
           value="<?php echo $fields['subtitle']; ?>">

    <input type="hidden" name="nango_portfolio-list-page_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
  </div>
  <?php

  $_REQUEST['nango_portfolio_list_page']['st-1'] = 'text 1';
  $_REQUEST['nango_portfolio_list_page']['st-2'] = 'text 2';
  $_REQUEST['nango_portfolio_list_page']['st-3'] = 'text 3<>';

  $cleaned_fields = [];

  echo '<pre>';
  print_r ( $_REQUEST['nango_portfolio_list_page'] );
  echo '</pre>';

  foreach ( $_REQUEST['nango_portfolio_list_page'] as $key => $value ) {
    $cleaned_fields[ $key ] = sanitize_text_field( $value );
  }

  echo '<pre>';
  print_r ( $cleaned_fields );
  echo '</pre>';

//  var_dump( $_REQUEST['nango_portfolio_list_page'] );
//  echo '<br>';
//  var_dump( $_REQUEST['nango_portfolio_list_page']['st'] );
//  echo '<br>';
//  var_dump( sanitize_text_field( $_REQUEST['nango_portfolio_list_page'] ) );
}




/**
 * Register metabox function
 */
function nango_Portfolio_list_page_metaboxes_loader( $post_type, $post ) {

  switch ( $post->post_name ) {
    case 'portfolio':
      add_meta_box(
          'my-meta-box',
          __( 'Подзаголовок' ),
          'nango_Portfolio_list_page_metaboxes_render',
          'page',
          'normal',
          'default'
      );
    break;
  }

}
add_action( 'add_meta_boxes', 'nango_Portfolio_list_page_metaboxes_loader', 10, 2 );




/**
 * Save metabox function
 */
function nango_Portfolio_list_page_metaboxes_saver( $post_id ) {

  $cleaned_fields = [];
  $cleaned_fields[] = $_REQUEST['nango_portfolio_list_page'];

  foreach ( $_REQUEST['nango_portfolio_list_page'] as $key => $value ) {

  }

  /*
  nango_portfolio_list_page = [
    'subtitle'     => 'text',
    'othertitle-1' => 'value 1',
    'othertitle-2' => 'value 2',
  ]
  */

//  update_post_meta( $post_id, "nango_portfolio_list_page", sanitize_text_field( [ 'first-key'=>'first-value' ] ) );
  update_post_meta( $post_id, "nango_portfolio_list_page", $cleaned_fields );

  if ( isset( $_REQUEST["nango_portfolio_list_page[subtitle]"] ) ) {

  } else {

  }



}
add_action( "save_post_page", 'nango_Portfolio_list_page_metaboxes_saver' );


?>