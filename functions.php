<?php
// Add theme supports
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);
add_theme_support('html5');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-logo');
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('starter-content');
// Load in our CSS
function tazhval_enqueue_styles()
{
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
}
add_action('wp_enqueue_scripts', 'tazhval_enqueue_styles');
