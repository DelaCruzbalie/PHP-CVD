<?php 

function theUpdates__custom_post(){
    $updatesPost_label = array(
        'name'                      => __('Updates Post', 'textdomain'),
        'singular_name'             => __('Updates Post', 'textdomain'),
        'add_new'                   => __('Add Updates Post', 'textdomain'),
        'add_new_item'              => __('Add new Updates Post', 'textdomain'),
        'edit_item'                 => __('Edit Updates Post', 'textdomain'),
        'all_items'                 => __('Updates Post', 'textdomain'),
    );

    $updatesPost_args = array(
        'labels'                    => $updatesPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('updatesPost', $updatesPost_args);
};

add_action('init', 'theUpdates__custom_post');