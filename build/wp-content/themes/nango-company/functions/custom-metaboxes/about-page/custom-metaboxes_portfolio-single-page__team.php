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

class AdsRepository
{
  private static $instance = NULL;
  private $ob;
  private $ob_Example;


  public static function instance()
  {
    if (self::$instance == NULL) {
      self::$instance = new AdsRepository();
    }
    return self::$instance;
  }

  public function Get_ob() {
    return $this->ob;
  }

  public function Set_ob( $new_ob ) {
    $this->ob = $new_ob;
  }

  public function Get_ob_Example() {
    return $this->ob_Example;
  }

  public function Set_ob_Example( $new_ob ) {
    $this->ob_Example = $new_ob;
  }

}

$post_Object = AdsRepository::instance();


$post_Object->Set_ob_Example('example string');



function admin_inline_js() {
  global $post;
  global $post_Object;

    ?>
    <script type='text/javascript'>
      console.log('--------------------------------');
      console.log('<?php echo json_encode( $post->ID ); ?>');

      console.log('<?php echo json_encode( get_post_meta( intval( $post->ID ) ) ); ?>');

      console.log('--------------------------------');
    </script>
    <?php


  if ( get_post_meta( intval( $_GET['post'] ) )['_wp_page_template']['0'] === 'template-pages/page-about.php' ) {

     ?>
    <script type='text/javascript'>
        console.log('-----');
        console.log('<?php echo get_post_meta( intval( $_GET['post'] ) )['_wp_page_template']['0'] ?>');
        console.log('-----');
    </script>
    <?php

    $post_Object->Set_ob( $post );
//    echo '<pre>';
//    var_dump( $post_Object );
//    echo '</pre>';

  }
}
add_action('admin_print_scripts', 'admin_inline_js', 10, 1 );




function process_post() {
  global $post;
  global $post_Object;
 // var_dump( $post );


  if ( get_post_meta( intval( $_GET['post'] ) )['_wp_page_template']['0'] === 'template-pages/page-about.php' ) {
    $post_Object->Set_ob( $post );
//    echo '<pre>';
//    var_dump( $post_Object );
//    echo '</pre>';
  }
}
add_action( 'init', 'process_post' );



//var_dump($wp_query);



if ( get_post_meta( intval( $_GET['post']))['_wp_page_template']['0'] === 'template-pages/page-about.php' ) {

  add_filter( 'rwmb_meta_boxes', 'nango_about_team_register_meta_boxes' );

}



/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */

//Add metabox function
function nango_about_team_register_meta_boxes( $meta_boxes ) {
  /**
   * prefix of meta keys (optional)
   * Use underscore (_) at the beginning to make keys hidden
   * Alt.: You also can make prefix empty to disable it
   */
  // Better has an underscore as last sign
  $prefix = 'nango_about_team';

  $meta_boxes[] = array(
      'title' => esc_html__( 'Дополнительные поля', 'nango_about_team' ),

      'post_types' => 'page',

      'fields' => array(


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
