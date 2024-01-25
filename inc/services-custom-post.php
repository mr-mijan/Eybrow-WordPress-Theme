<?php
// Register Custom Post Type
function custom_post_type_services() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'eybrow' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'eybrow' ),
        'menu_name'             => __( 'Services', 'eybrow' ),
        'name_admin_bar'        => __( 'Services', 'eybrow' ),
        'archives'              => __( 'Services Archives', 'eybrow' ),
        'attributes'            => __( 'Services Attributes', 'eybrow' ),
        'parent_item_colon'     => __( 'Parent Services:', 'eybrow' ),
        'all_items'             => __( 'All Services', 'eybrow' ),
        'add_new_item'          => __( 'Add New Service', 'eybrow' ),
        'add_new'               => __( 'Add New', 'eybrow' ),
        'new_item'              => __( 'New Service', 'eybrow' ),
        'edit_item'             => __( 'Edit Service', 'eybrow' ),
        'update_item'           => __( 'Update Service', 'eybrow' ),
        'view_item'             => __( 'View Service', 'eybrow' ),
        'view_items'            => __( 'View Services', 'eybrow' ),
        'search_items'          => __( 'Search Service', 'eybrow' ),
        'not_found'             => __( 'Not found', 'eybrow' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'eybrow' ),
        'featured_image'        => __( 'Featured Image', 'eybrow' ),
        'set_featured_image'    => __( 'Set featured image', 'eybrow' ),
        'remove_featured_image' => __( 'Remove featured image', 'eybrow' ),
        'use_featured_image'    => __( 'Use as featured image', 'eybrow' ),
        'insert_into_item'      => __( 'Insert into service', 'eybrow' ),
        'uploaded_to_this_item' => __( 'Uploaded to this service', 'eybrow' ),
        'items_list'            => __( 'Services list', 'eybrow' ),
        'items_list_navigation' => __( 'Services list navigation', 'eybrow' ),
        'filter_items_list'     => __( 'Filter services list', 'eybrow' ),
    );
    $args = array(
        'label'                 => __( 'Service', 'eybrow' ),
        'description'           => __( 'Custom Post Type for Services', 'eybrow' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'taxonomies'            => array( 'services_category' ), // Add your custom taxonomy here
        // 'show_in_rest'          => true,
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 26,
        'menu_icon' => 'dashicons-image-filter',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'services', $args );
}

add_action( 'init', 'custom_post_type_services', 0 );

// Register Custom Taxonomy
function custom_taxonomy_service_category() {
    $labels = array(
        'name'                       => _x( 'Categories', 'Taxonomy General Name', 'eybrow' ),
        'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'eybrow' ),
        'menu_name'                  => __( 'Categories', 'eybrow' ),
        'all_items'                  => __( 'All Categories', 'eybrow' ),
        'parent_item'                => __( 'Parent Category', 'eybrow' ),
        'parent_item_colon'          => __( 'Parent Category:', 'eybrow' ),
        'new_item_name'              => __( 'New Category Name', 'eybrow' ),
        'add_new_item'               => __( 'Add New Category', 'eybrow' ),
        'edit_item'                  => __( 'Edit Category', 'eybrow' ),
        'update_item'                => __( 'Update Category', 'eybrow' ),
        'view_item'                  => __( 'View Category', 'eybrow' ),
        'separate_items_with_commas' => __( 'Separate categories with commas', 'eybrow' ),
        'add_or_remove_items'        => __( 'Add or remove categories', 'eybrow' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'eybrow' ),
        'popular_items'              => __( 'Popular Categories', 'eybrow' ),
        'search_items'               => __( 'Search Categories', 'eybrow' ),
        'not_found'                  => __( 'Not Found', 'eybrow' ),
        'no_terms'                   => __( 'No categories', 'eybrow' ),
        'items_list'                 => __( 'Categories list', 'eybrow' ),
        'items_list_navigation'      => __( 'Categories list navigation', 'eybrow' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'services_category', array( 'services' ), $args );
}

add_action( 'init', 'custom_taxonomy_service_category', 0 );
