<?php

function my_theme_enqueue_scripts() {
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/dist/css/style.css');
  
  wp_enqueue_script('main-scripts', get_template_directory_uri() . '/dist/js/main.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
