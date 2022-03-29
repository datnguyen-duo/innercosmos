<?php
function register_taxonomies() {
//    register_taxonomy( 'extra-category', array('extra'), array(
//        'hierarchical'      => true,
//        'labels'            => array(
//            'name'              => _x( 'Category', 'taxonomy general name', 'foxallstudio' ),
//            'singular_name'     => _x( 'Category', 'taxonomy singular name', 'foxallstudio' ),
//            'search_items'      => __( 'Search Categories', 'foxallstudio' ),
//            'all_items'         => __( 'All Categories', 'foxallstudio' ),
//            'parent_item'       => __( 'Parent Category', 'foxallstudio' ),
//            'parent_item_colon' => __( 'Parent Category:', 'foxallstudio' ),
//            'edit_item'         => __( 'Edit Category', 'foxallstudio' ),
//            'update_item'       => __( 'Update Category', 'foxallstudio' ),
//            'add_new_item'      => __( 'Add New Category', 'foxallstudio' ),
//            'new_item_name'     => __( 'New Category Name', 'foxallstudio' ),
//            'menu_name'         => __( 'Categories', 'foxallstudio' ),
//        ),
//        'show_ui'           => true,
//        'show_admin_column' => true,
//        'query_var'         => true,
//        'rewrite'           => array( 'slug' => 'extra-category' ),
//    ) );
}
add_action( 'init', 'register_taxonomies', 0 );

