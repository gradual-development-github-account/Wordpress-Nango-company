<?php

/**
 * При создании новых полей( копировании кода из этого файла и вставка в другом файле ) нужно помеянть:
 * 1. Названия функций начинающиеся на ncmb
 *
 * 2. в функции ncmb_ . . . _loader поменять
 *   2.1. case ' . . . ' на case 'название типа записи':
 *   2.2. my-meta-box--. . . на my-meta-box--название типа записи
 *
 * 3. Название ячеек в БД начинающихся с ncfd
 *
 * 4. Названия id полей ncf_ . . . __id . . .
 *
 * 5. Названия массивов имён ncf_ . . . __names
 *
 * 6. Изменить ncfd в файле где выполняется вывод поля
 *
 * 7. Для каждого поля в ncmb_ . . . _render поменять
 *   7.1. ncf_ . . . __id-название поля
 *   7.2. ncf_ . . . __names-название поля
 *   7.3. в атрибуте value =  . . . $fields[' . . . '] заменить на $fields['название поля']
 *
 *
 * Описание сокращений
 *   ncmb - Nango custom metaboxes
 *   ncfd - Nango custom fields data
 *   ncf  - Nango custom fields
 */


/**
 * Render function
 */
function ncmb_Portfolio_single_page_render( $post ) {

  $fields = get_post_meta( $post->ID, 'ncfd__portfolio-single-page', true );

  ?>
  
  <div class="form-field">
    <p class="post-attributes-label-wrapper">
    <label class="post-attributes-label"
           for="ncf_Portfolio_single_page__id-title-detail">Заголовок детального описания</label>
    </p>
    <input class=""
            id="ncf_Portfolio_single_page__id-title-detail"
           type="text"
           name="ncf_Portfolio_single_page__names[title-detail]"
           value="<?php echo $fields['title-detail']; ?>">
  </div>


  <div class="form-field">
    <p class="post-attributes-label-wrapper">
    <label class="post-attributes-label"
           for="ncf_Portfolio_single_page__id-title-desc">Заголовок описания проекта</label>
    </p>
    <input class=""
            id="ncf_Portfolio_single_page__id-title-desc"
           type="text"
           name="ncf_Portfolio_single_page__names[title-desc]"
           value="<?php echo $fields['title-desc']; ?>">
  </div>


  <div class="form-field">
    <p class="post-attributes-label-wrapper">
    <label class="post-attributes-label"
           for="ncf_Portfolio_single_page__id-title-share">Заголовок сыылок публикации на сторонних ресурсах</label>
    </p>
    <input class=""
           id="ncf_Portfolio_single_page__id-title-share"
           type="text"
           name="ncf_Portfolio_single_page__names[title-share]"
           value="<?php echo $fields['title-share']; ?>">
  </div>


  <div>
    <input type="hidden" name="ncf_Portfolio_single_page__names[nonce]" value="<?php echo wp_create_nonce(__FILE__); ?>" />
  </div>

  <?php

}




/**
 * Register metabox function
 */
function ncmb_Portfolio_single_page_loader( $post_type, $post ) {

  switch ( $post->post_name ) {
    case 'portfolio-single':
      add_meta_box(
          'my-meta-box--portfolio-single',
          __( 'Подзаголовок для Single page' ),
          'ncmb_Portfolio_single_page_render',
          'page',
          'normal',
          'default'
      );
      break;
  }

}
add_action( 'add_meta_boxes', 'ncmb_Portfolio_single_page_loader', 10, 2 );




/**
 * Save metabox function
 */
function ncmb_Portfolio_single_page_saver( $post_id ) {

  $not_cleaned_fields = $_REQUEST['ncf_Portfolio_single_page__names'];
  $cleaned_fields = [];


  if ( !empty( $not_cleaned_fields ) ) {

    foreach ( $not_cleaned_fields as $key => $value ) {
      $cleaned_fields[ $key ] = sanitize_text_field( $value );
    }

    update_post_meta( $post_id, "ncfd__portfolio-single-page", $cleaned_fields );
  }


}
add_action( "save_post_page", 'ncmb_Portfolio_single_page_saver' );


?>