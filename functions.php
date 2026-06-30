<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function bashar2026_enqueue_styles() {
    wp_enqueue_style('bashar2026-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'bashar2026_enqueue_styles');
