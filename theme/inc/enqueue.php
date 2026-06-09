<?php

function lawfirmpro_enqueue_assets()
{

    $version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'lawfirmpro-global',
        get_template_directory_uri() . '/assets/css/global.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-header',
        get_template_directory_uri() . '/assets/css/header.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-homepage-hero',
        get_template_directory_uri() . '/assets/css/homepage.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-practice-areas',
        get_template_directory_uri() . '/assets/css/practice-area.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-menu-overlay',
        get_template_directory_uri() . '/assets/css/menu-overlay.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-faq',
        get_template_directory_uri() . '/assets/css/faq.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-comments',
        get_template_directory_uri() . '/assets/css/comments.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-post-slider',
        get_theme_file_uri('/assets/css/post-slider.css'),
        array(),
        $version
    );

    wp_enqueue_script(
        'lawfirmpro-faq',
        get_theme_file_uri('/assets/js/faq.js'),
        [],
        null,
        true
    );

    wp_enqueue_script(
        'lawfirmpro-post-slider',
        get_theme_file_uri('/assets/js/post-slider.js'),
        [],
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'lawfirmpro_enqueue_assets');
