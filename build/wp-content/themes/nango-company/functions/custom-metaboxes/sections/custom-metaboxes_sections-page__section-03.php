<?php

/**
 * При создании новых полей( копировании кода из этого файла и вставка в другом файле ) нужно помеянть:
 * 1. Названия функций начинающиеся на ncmb ( 6 позиций )
 *
 * 2. в функции ncmb_ . . . _loader поменять
 *   2.1. case ' . . . ' на case 'название типа записи':
 *   2.2. my-meta-box--. . . на my-meta-box--название типа записи
 *
 * 3. Название ячеек в БД начинающихся с ncfd ( 2 позиции )
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
function ncmb_Sections_page_section_03_render( $post ) {

  $fields = get_post_meta( $post->ID, 'ncfd__sections-page_section_03', true );

  ?>

  <div class="form-field">
    <p class="post-attributes-label-wrapper">
      <label class="post-attributes-label"
             for="ncf_Sections_page_section_03__id-number">Номер секции</label>
    </p>
    <input class=""
           id="ncf_Sections_page_section_03__id-number"
           type="text"
           name="ncf_Sections_page_section_03__names[number]"
           value="<?php echo $fields['number']; ?>">
  </div>


  <div class="form-field">
    <p class="post-attributes-label-wrapper">
      <label class="post-attributes-label"
             for="ncf_Sections_page_section_03__id-title">Заголовок</label>
    </p>
    <input class=""
           id="ncf_Sections_page_section_03__id-title"
           type="text"
           name="ncf_Sections_page_section_03__names[title]"
           value="<?php echo $fields['title']; ?>">
  </div>


  <div class="form-field">
    <p class="post-attributes-label-wrapper">
      <label class="post-attributes-label"
             for="ncf_Sections_page_section_03__id-subtitle">Подзаголовок</label>
    </p>
    <input class=""
           id="ncf_Sections_page_section_03__id-subtitle"
           type="text"
           name="ncf_Sections_page_section_03__names[subtitle]"
           value="<?php echo $fields['subtitle']; ?>">
  </div>


  <div class="form-field">
    <p class="post-attributes-label-wrapper">
      <label class="post-attributes-label"
             for="ncf_Sections_page_section_03__id-button-portfolio">Надпись кнопки</label>
    </p>
    <input class=""
           id="ncf_Sections_page_section_03__id-button-portfolio"
           type="text"
           name="ncf_Sections_page_section_03__names[button-portfolio]"
           value="<?php echo $fields['button-portfolio']; ?>">
  </div>


  <div>
    <input type="hidden" name="ncf_Sections_page_section_03__names[nonce]" value="<?php echo wp_create_nonce(__FILE__); ?>" />
  </div>

  <?php

}




/**
 * Register metabox function
 */
function ncmb_Sections_page_section_03_loader( $post_type, $post ) {

  switch ( $post->post_name ) {
    case 'sections':
      add_meta_box(
          'my-meta-box--sections-03',
          __( 'Секция 03' ),
          'ncmb_Sections_page_section_03_render',
          'page',
          'normal',
          'default'
      );
      break;
  }

}
add_action( 'add_meta_boxes', 'ncmb_Sections_page_section_03_loader', 10, 2 );




/**
 * Save metabox function
 */
function ncmb_Sections_page_section_03_saver( $post_id ) {

  $not_cleaned_fields = $_REQUEST['ncf_Sections_page_section_03__names'];
  $cleaned_fields = [];


  if ( !empty( $not_cleaned_fields ) ) {

    foreach ( $not_cleaned_fields as $key => $value ) {
      $cleaned_fields[ $key ] = sanitize_text_field( $value );
    }

    update_post_meta( $post_id, "ncfd__sections-page_section_03", $cleaned_fields );
  }


}
add_action( "save_post_page", 'ncmb_Sections_page_section_03_saver' );


?>