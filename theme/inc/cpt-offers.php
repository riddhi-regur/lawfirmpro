<?php

if (! defined('ABSPATH')) {
    exit;
}

function lawfirmpro_register_offers_cpt()
{

    $labels = array(
        'name'          => __('Offers', 'lawfirmpro-core'),
        'singular_name' => __('Offer', 'lawfirmpro-core'),
        'add_new_item'  => __('Add Offer', 'lawfirmpro-core'),
        'edit_item'     => __('Edit Offer', 'lawfirmpro-core'),
        'menu_name'     => __('Offers', 'lawfirmpro-core'),
    );

    register_post_type(
        'offer',
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
                'slug' => 'offers',
            ),
        )
    );
}

add_action(
    'init',
    'lawfirmpro_register_offers_cpt'
);
