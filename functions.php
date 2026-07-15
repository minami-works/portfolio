<?php
function minamiworks_register_works_cpt() {
  register_post_type('works', array(
    'labels' => array(
      'name'          => 'Works',
      'singular_name' => 'Work',
      'add_new_item'  => '作品を追加',
      'edit_item'     => '作品を編集',
    ),
    'public'       => true,
    'has_archive'  => false,
    'menu_icon'    => 'dashicons-portfolio',
    'supports'     => array('title'),
    'show_in_rest' => true,
  ));
}
add_action('init', 'minamiworks_register_works_cpt');