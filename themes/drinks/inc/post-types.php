<?php
/**
 * Functions which enhance the theme by creating custom post types 
 * 
 * @package Love_for_Drinks 
 */

function drinks_post_types() {
    $labels = array(
        'name'                  => _x( 'Mixtures', 'Post type general name', 'drinks' ),
        'singular_name'         => _x( 'Mixture', 'Post type singular name', 'drinks' ),
        'menu_name'             => _x( 'Mixtures', 'Admin Menu text', 'drinks' ),
        'name_admin_bar'        => _x( 'Mixture', 'Add New on Toolbar', 'drinks' ),
        'add_new'               => __( 'Add New', 'drinks' ),
        'add_new_item'          => __( 'Add New drinks', 'drinks' ),
        'new_item'              => __( 'New drink', 'drinks' ),
        'edit_item'             => __( 'Edit drink', 'drinks' ),
        'view_item'             => __( 'View drink', 'drinks' ),
        'all_items'             => __( 'All drinks', 'drinks' ),
        'search_items'          => __( 'Search drinks', 'drinks' ),
        'parent_item_colon'     => __( 'Parent drinks:', 'drinks' ),
        'not_found'             => __( 'No drinks found.', 'drinks' ),
        'not_found_in_trash'    => __( 'No drinks found in Trash.', 'drinks' ),
        'featured_image'        => _x( 'Mixture Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'drinks' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'drinks' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'drinks' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'drinks' ),
        'archives'              => _x( 'Mixture archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'drinks' ),
        'insert_into_item'      => _x( 'Insert into drink', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'drinks' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this drink', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'drinks' ),
        'filter_items_list'     => _x( 'Filter drinks list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'drinks' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'drinks' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'drinks' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Mixture custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'mixtures' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
    register_post_type( 'drinks_mixture', $args );
}
add_action( 'init', 'drinks_post_types' );