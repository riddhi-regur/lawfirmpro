<?php

if (! defined('ABSPATH')) {
    exit;
}

function lawfirmpro_register_attorneys_cpt()
{

    $labels = array(
        'name'          => __('Attorneys', 'lawfirmpro-core'),
        'singular_name' => __('Attorney', 'lawfirmpro-core'),
        'add_new_item'  => __('Add Attorney', 'lawfirmpro-core'),
        'edit_item'     => __('Edit Attorney', 'lawfirmpro-core'),
        'menu_name'     => __('Attorneys', 'lawfirmpro-core'),
    );

    register_post_type(
        'attorney',
        array(
            'labels'       => $labels,
            'public'       => true,
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-portfolio',
            'supports'     => array(
                'title',
                'editor',
                'thumbnail',
                'excerpt',
            ),
            'has_archive'  => true,
            'rewrite'      => array(
                'slug' => 'attorneys',
            ),
        )
    );
}

add_action(
    'init',
    'lawfirmpro_register_attorneys_cpt'
);
