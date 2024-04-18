<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Déclarer le fichier style.css à la racine du thème enfant //
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css', array(), '1.0');
}

// Déclarer le JS //
add_action('wp_enqueue_scripts', 'add_js_scripts');
function add_js_scripts()
{
    wp_enqueue_script('animations', get_stylesheet_directory_uri() . '/js/animations.js', array(), '1.0', true);
    wp_enqueue_script('importswiper', 'https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.js', array(), '1.0', true);
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/js/swiper.js', array(), '1.0', true);
    wp_enqueue_script('burgermenu', get_stylesheet_directory_uri() . '/js/burger-menu.js', array(), '1.0', true);
}


// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
