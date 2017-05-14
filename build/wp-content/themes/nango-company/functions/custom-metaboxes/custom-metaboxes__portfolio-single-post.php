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


add_filter( 'rwmb_meta_boxes', 'nango_portfolio_single_post_register_meta_boxes' );




/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function nango_portfolio_single_post_register_meta_boxes( $meta_boxes ) {
  /**
   * prefix of meta keys (optional)
   * Use underscore (_) at the beginning to make keys hidden
   * Alt.: You also can make prefix empty to disable it
   */
  // Better has an underscore as last sign
  $prefix = 'nango_portfolio_single_post';

  $meta_boxes[] = array(
      'title' => esc_html__( 'Дополнительные поля', 'nango_portfolio_single_post' ),

      'post_types' => 'portfolio',

      'fields' => array(

        // TEXT
          array(
            // Field name - Will be used as label
              'name'  => esc_html__( 'Подзаголовок', 'nango_portfolio_single_post' ),
            // Field ID, i.e. the meta key
              'id'    => "{$prefix}-subtitle",
              'type'  => 'text',
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
              'clone' => false,
          ),        

        // IMAGE ADVANCED - RECOMMENDED
          array(
              'name'             => esc_html__( 'Изображения в списке проектов', 'nango_portfolio_single_post' ),
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

        // DATE
          array(
              'name'       => esc_html__( 'Дата сдачи проекта', 'nango_portfolio_single_post' ),
              'id'         => "{$prefix}-release-date",
              'type'       => 'date',
            // jQuery date picker options. See here http://api.jqueryui.com/datepicker
              'js_options' => array(
                  'appendText'      => esc_html__( ' - выберите дату', 'nango_portfolio_single_post' ),
                  'dateFormat'      => esc_html__( 'd-MM yy', 'nango_portfolio_single_post' ),
                  'changeMonth'     => true,
                  'changeYear'      => true,
                  'showButtonPanel' => true,
              ),
          ),

        // TEXT
          array(
            // Field name - Will be used as label
              'name'  => esc_html__( 'Заказчик', 'nango_portfolio_single_post' ),
            // Field ID, i.e. the meta key
              'id'    => "{$prefix}-client",
              'type'  => 'text',
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
              'clone' => false,
          ),

      ),
  );





  return $meta_boxes;
}