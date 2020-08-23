<?php

// Adding the CSS and JS files

function setup() {
  wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Raleway:ital@0;1&display=swap");
  wp_enqueue_style('font-awesome', 'https://kit.fontawesome.com/3899a97913.js');
  wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'setup');


// custom post type
function custom_post_type() {
  register_post_type('menu item',
    array(
      'rewrite' => array('slug' => 'menu items'),
      'labels' => array(
        'name' => 'Menu Items',
        'singular_name' => 'Menu Item',
        'add_new_item' => 'Add new Item',
        'edit_item' => 'Edit Menu Item'
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title', 'thumbnail','post-formats', 'editor', 'custom-fields'
      )
    )
  );
}

if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150,150);
}

add_action('init', 'custom_post_type');


?>