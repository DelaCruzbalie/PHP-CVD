<?php 

function theLatest__custom_post(){
    $latestPost_label = array(
        'name'                      => __('Latest Post', 'textdomain'),
        'singular_name'             => __('Latest Post', 'textdomain'),
        'add_new'                   => __('Add Latest Post', 'textdomain'),
        'add_new_item'              => __('Add new Latest Post', 'textdomain'),
        'edit_item'                 => __('Edit Latest Post', 'textdomain'),
        'all_items'                 => __('Latest Post', 'textdomain'),
    );

    $latestPost_args = array(
        'labels'                    => $latestPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('latestPost', $latestPost_args);
};

add_action('init', 'theLatest__custom_post');