<?php

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

function remove_dashboard_widgets () {

  //Completely remove various dashboard widgets (remember they can also be HIDDEN from admin)
  remove_meta_box( 'dashboard_quick_press',   'dashboard', 'side' );      //Quick Press widget
  remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );      //Recent Drafts
  remove_meta_box( 'dashboard_primary',       'dashboard', 'side' );      //WordPress.com Blog
  remove_meta_box( 'dashboard_secondary',     'dashboard', 'side' );      //Other WordPress News
  remove_meta_box( 'dashboard_incoming_links','dashboard', 'normal' );    //Incoming Links
  remove_meta_box( 'dashboard_plugins',       'dashboard', 'normal' );    //Plugins

}


// Function that outputs the contents of the dashboard widget
function dashboard_widget_function( $post, $callback_args ) {
  echo "Hello World, this is my first Dashboard Widget!";
}

// Function used in the action hook
function add_dashboard_widgets() {
  wp_add_dashboard_widget('dashboard_widget', 'Example Dashboard Widget', 'dashboard_widget_function');
}

// Register the new dashboard widget with the 'wp_dashboard_setup' action
add_action('wp_dashboard_setup', 'add_dashboard_widgets' );


// Function used in the action hook
function add_dashboard_widgets_2() {
  wp_add_dashboard_widget('dashboard_widget_2', 'Example Dashboard Widget 2', 'dashboard_widget_function');
}

// Register the new dashboard widget with the 'wp_dashboard_setup' action
add_action('wp_dashboard_setup', 'add_dashboard_widgets_2' );

?>


<?php

add_action('admin_menu', 'register_my_custom_submenu_page');

function register_my_custom_submenu_page() {
  add_submenu_page( 'edit.php?post_type=portfolio', 'Дополнительная страница инструментов', 'Настройки страницы проекта ', 'manage_options', 'my-custom-submenu-page', 'my_custom_submenu_page_callback' );
}

function my_custom_submenu_page_callback() {
  ?>

  <?php
}



?>