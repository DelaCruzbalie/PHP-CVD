<?php 

function theCategory__custom_post(){
    $categoryPost_label = array(
        'name'                      => __('Category', 'textdomain'),
        'singular_name'             => __('Category', 'textdomain'),
        'add_new'                   => __('Add Category', 'textdomain'),
        'add_new_item'              => __('Add new Category', 'textdomain'),
        'edit_item'                 => __('Edit Category', 'textdomain'),
        'all_items'                 => __('Category', 'textdomain'),
    );

    $categoryPost_args = array(
        'labels'                    => $categoryPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('categoryPost', $categoryPost_args);
};

add_action('init', 'theCategory__custom_post');