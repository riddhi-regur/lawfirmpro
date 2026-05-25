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
        'lawfirmpro-faq',
        get_template_directory_uri() . '/assets/css/faq.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-practice-areas',
        get_template_directory_uri() . '/assets/css/practice-areas.css',
        array(),
        $version
    );

    wp_enqueue_style(
        'lawfirmpro-about-firm',
        get_theme_file_uri('/assets/css/about-firm.css'),
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
}

add_action('wp_enqueue_scripts', 'lawfirmpro_enqueue_assets');
