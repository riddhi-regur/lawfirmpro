<?php

if (! defined('ABSPATH')) {
    exit;
}

function lawfirmpro_register_contacts_cpt()
{

    $labels = array(
        'name'          => __('Contacts', 'lawfirmpro-core'),
        'singular_name' => __('Contact', 'lawfirmpro-core'),
        'add_new_item'  => __('Add Contact', 'lawfirmpro-core'),
        'edit_item'     => __('Edit Contact', 'lawfirmpro-core'),
        'menu_name'     => __('Contacts', 'lawfirmpro-core'),
    );

    register_post_type(
        'contact',
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
                'slug' => 'contacts',
            ),
        )
    );
}

add_action(
    'init',
    'lawfirmpro_register_contacts_cpt'
);
