<?php

function cvd_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());
    wp_enqueue_script("main-js", get_template_directory_uri() . '/script/toggle__menu.js', [], microtime(), true);
}

add_action('wp_enqueue_scripts', 'cvd_assets');


function cvd_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('title-tag');

    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_menu', 'Footer Menu');
}

add_action('after_setup_theme', 'cvd_theme_support');


function cvd_custom_post() {
    $service_label = array(
        'name' => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new' => __('Add Service', 'textdomain'),
        'edit_item' => __('Edit Service', 'textdomain'),
        'add_new_item' => __('Add New Service', 'textdomain'),
        'all_items' => __('Services', 'textdomain'),
    );

    $service_args = array(
        'labels' => $service_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('services', $service_args);
}
add_action('init', 'cvd_custom_post');