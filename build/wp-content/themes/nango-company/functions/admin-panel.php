<?php

add_action( 'admin_menu', 'nango_remove_menu_items' );

function nango_remove_menu_items() {
  // тут мы укахываем ярлык пункты который удаляем.
  remove_menu_page('edit.php'); // Удаляем пункт "Записи"
}

?>