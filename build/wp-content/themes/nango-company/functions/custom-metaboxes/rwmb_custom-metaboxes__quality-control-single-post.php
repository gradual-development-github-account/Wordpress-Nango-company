<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 *
 * @link http://metabox.io/docs/registering-meta-boxes/
 */


add_filter( 'rwmb_meta_boxes', 'nango_quality_control_single_post_register_meta_boxes' );


/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function nango_quality_control_single_post_register_meta_boxes( $meta_boxes ) {
  /**
   * prefix of meta keys (optional)
   * Use underscore (_) at the beginning to make keys hidden
   * Alt.: You also can make prefix empty to disable it
   */
  // Better has an underscore as last sign
  $prefix = 'nango_quality_control_single_post';

  $meta_boxes[] = array(
      'title' => esc_html__( 'Дополнительные поля', 'nango_quality_control_single_post' ),

      'post_types' => 'quality-control',

      'fields' => array(

        // TEXT
          array(
            // Field name - Will be used as label
              'name'  => esc_html__( 'Подзаголовок типа качества', 'nango_quality_control_single_post' ),
            // Field ID, i.e. the meta key
              'id'    => "{$prefix}-subtitle",
              'type'  => 'text',
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
              'clone' => false,
          ),

        // IMAGE ADVANCED - RECOMMENDED
          array(
              'name'             => esc_html__( 'Галлерея', 'nango_quality_control_single_post' ),
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






/**
 * This file demonstrates how to use 'text_list' field
 */
add_filter( 'rwmb_meta_boxes', 'nango_quality_control_single_post_Details_register_meta_boxes' );

function nango_quality_control_single_post_Details_register_meta_boxes( $meta_boxes ) {
  $prefix = 'nango_quality_control_single_post__details';

  $meta_boxes[] = array(
      'title'  => __( 'Таблица детальной информации', 'nango_quality_control_single_post__details' ),

      'post_types' => 'quality-control',

      'fields' => array(
        // TEXT
          array(
            // Field name - Will be used as label
              'name'  => esc_html__( 'Стоимость услуги', 'nango_portfolio_single_post' ),
            // Field ID, i.e. the meta key
              'id'    => "{$prefix}-price",
              'type'  => 'text',
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
              'clone' => false,
          ),

          array(
              'id'      => 'text_list__basic-functions-id',
              'name'    => __( 'Список основных функций', 'nango_quality_control_single_post__details' ),
              'type'    => 'text_list',
              'clone' => true,
            // Options: array of Placeholder => Label for text boxes
            // Number of options are not limited
              'options' => array(
                  'опишите преимущество'      => __( '- одна из основных функций', 'nango_quality_control_single_post__details' ),
              ),
          ),

          array(
              'id'      => 'text_list__advantages-id',
              'name'    => __( 'Список премуществ', 'nango_quality_control_single_post__details' ),
              'type'    => 'text_list',
              'clone' => true,
            // Options: array of Placeholder => Label for text boxes
            // Number of options are not limited
              'options' => array(
                  'опишите преимущество'      => __( '- преимущество', 'nango_quality_control_single_post__details' ),
              ),
          ),
      ),
  );
  return $meta_boxes;
}