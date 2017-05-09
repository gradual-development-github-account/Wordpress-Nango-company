<?php

function the_breadcrumb() {
  global $post;

  // не главная
  if(!is_home()){
    echo '<a class="theme  modificators  fonts  font-family-4    theme  modificators  colors  links-color-1"   href="'.site_url().'">';
    echo '<b>Главная</b>';
    echo '</a>';
    echo ' / ';

    // записи
    if(is_single()){
      the_category(', ');
      echo " / ";
      the_title();
    }

    // страницы
    elseif (is_page()) {
      if ($post->post_parent ) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          $breadcrumbs[] = '<a class="brcr-pages"  href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
          $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ($breadcrumbs as $crumb) echo $crumb . ' &amp;raquo; ';
      }
      echo the_title();
    }

    // категории
    elseif (is_category()) {
      global $wp_query;
      $obj_cat = $wp_query->get_queried_object();
      $current_cat = $obj_cat->term_id;
      $current_cat = get_category($current_cat);
      $parent_cat = get_category($current_cat->parent);
      if ($current_cat->parent != 0)
        echo(get_category_parents($parent_cat, TRUE, ' &amp;raquo; '));
      single_cat_title();
    }

    // страницы поиска
    elseif (is_search()) {
      echo 'Результаты поиска для "' . get_search_query() . '"';
    }

    // теги (метки)
    elseif (is_tag()) {
      echo single_tag_title('', false);
    }

    // архивы (по дням)
    elseif (is_day()) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> &amp;raquo; ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> &amp;raquo; ';
      echo get_the_time('d');
    }

    // архивы (по месяцам)
    elseif (is_month()) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> &amp;raquo; ';
      echo get_the_time('F');
    }

    // архивы (по годам)
    elseif (is_year()) {
      echo get_the_time('Y');
    }

    // авторы
    elseif (is_author()) {
      global $author;
      $userdata = get_userdata($author);
      echo 'Опубликовал(а) ' . $userdata->display_name;

      // если страницы не существует
    } elseif (is_404()) {
      echo 'Ошибка 404';
    }


    // номер текущей страницы
    if (get_query_var('paged'))
      echo ' (' . get_query_var('paged').'-я страница)';


  } else {
    // главная
    $pageNum=(get_query_var('paged')) ? get_query_var('paged') : 1;
    if($pageNum>1)
      echo '<a href="'.site_url().'">Главная</a> &amp;raquo; '.$pageNum.'-я страница';
    else
      echo 'Вы находитесь на главной странице';
  }
}

?>