<?php

function register_post_types() {
    register_post_type('members',array(
        'labels' => array(
            'name' => _x('Members', 'post type general name'),
            'singular_name' => _x('Member', 'post type singular name'),
            'menu_name' => 'Members'
        ),
        'rewrite' => array(
            'slug' => 'members',
            'with_front' => false
        ),
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'has_archive' => false,
//        'hierarchical' => true,
        'supports' => array('title','thumbnail')
    ));
}
add_action('init','register_post_types');