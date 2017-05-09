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


add_filter( 'rwmb_meta_boxes', 'nango_blog_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function nango_blog_register_meta_boxes( $meta_boxes ) {
  /**
   * prefix of meta keys (optional)
   * Use underscore (_) at the beginning to make keys hidden
   * Alt.: You also can make prefix empty to disable it
   */
  // Better has an underscore as last sign
  $prefix = 'nango_blog';

  $meta_boxes[] = array(
      'title' => esc_html__( 'Дополнительные поля', 'nango_blog' ),

      'post_types' => 'blog',

      'fields' => array(
        // TEXT
          array(
            // Field name - Will be used as label
              'name'  => esc_html__( 'Атор поста', 'nango_blog' ),
            // Field ID, i.e. the meta key
              'id'    => "{$prefix}_autor_of_post",
              'type'  => 'text',
            // CLONES: Add to make the field cloneable (i.e. have multiple value)
              'clone' => false,
          ),

        // TEXTAREA
          array(
              'name' => esc_html__( 'Textarea', 'your-prefix' ),
              'desc' => esc_html__( 'Краткое описание поста на странице блога', 'nango_blog' ),
              'id'   => "{$prefix}_post_descr",
              'type' => 'textarea',
              'cols' => 12,
              'rows' => 2,
          ),

        // IMAGE ADVANCED - RECOMMENDED
          array(
              'name'             => esc_html__( 'Изображение из выпадающего блока', 'nango_blog' ),
              'id'               => "{$prefix}_hover_block_image",
              'type'             => 'image_advanced',
            // Delete image from Media Library when remove it from post meta?
            // Note: it might affect other posts if you use same image for multiple posts
              'force_delete'     => false,
            // Maximum image uploads
              'max_file_uploads' => 1,
            // Display the "Uploaded 1/2 files" status
              'max_status'       => false,
          ),

        // IMAGE ADVANCED - RECOMMENDED
          array(
              'name'             => esc_html__( 'Главное изображегние внутри поста', 'nango_blog' ),
              'id'               => "{$prefix}_main_image_in_post",
              'type'             => 'image_advanced',
            // Delete image from Media Library when remove it from post meta?
            // Note: it might affect other posts if you use same image for multiple posts
              'force_delete'     => false,
            // Maximum image uploads
              'max_file_uploads' => 1,
            // Display the "Uploaded 1/2 files" status
              'max_status'       => false,
          ),
      ),
  );

  return $meta_boxes;
}