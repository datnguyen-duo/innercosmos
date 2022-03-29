<?php

if ( ! function_exists( 'site_setup' ) ) :
    function site_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'innercosmos' ),
                'menu-2' => esc_html__( 'Footer', 'innercosmos' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'site_setup' );

function site_scripts() {
    wp_enqueue_style( 'site-style', get_stylesheet_uri(), array(), '1' );
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

    wp_enqueue_script('select-2', get_theme_file_uri('/js/select2.js'), NULL, '1', true);
    wp_enqueue_script('global', get_theme_file_uri('/js/global.js'), NULL, '1', true);

    wp_localize_script('global','site_data',array(
        'site_url' => site_url(),
        'theme_url' => get_template_directory_uri(),
    ));
}
add_action( 'wp_enqueue_scripts', 'site_scripts' );

require_once("inc/acf.php");
require_once("inc/post-types.php");
require_once("inc/taxonomies.php");