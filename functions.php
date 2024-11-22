<?php

function my_theme_enqueue_scripts() {
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/dist/css/style.css');
  
  wp_enqueue_script('main-scripts', get_template_directory_uri() . '/dist/js/main.js', [], false, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-general-settings',
    ));
}

function wp_search_it_menus()
{
    $locations = array(
        'header' => __('Header Menu', 'wp_search_it'),
        'footer_1' => __('Footer Menu 1', 'wp_search_it'),
        'footer_2' => __('Footer Menu 2', 'wp_search_it'),
    );

    register_nav_menus($locations);
}

add_action('init', 'wp_search_it_menus');