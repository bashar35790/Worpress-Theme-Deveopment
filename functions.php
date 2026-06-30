<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function bashar2026_enqueue_styles() {
    wp_enqueue_style('bashar2026-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.8', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    
    wp_enqueue_style("bootstrap");
    wp_enqueue_style("custom");

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.3.8', true);
}

add_action('wp_enqueue_scripts', 'bashar2026_enqueue_styles');
