<?php 

function theRecentUpdates__custom_post(){
    $recentUpdatesPost_label = array(
        'name'                      => __('Recent Update Post', 'textdomain'),
        'singular_name'             => __('Recent Update Post', 'textdomain'),
        'add_new'                   => __('Add Recent Update Post', 'textdomain'),
        'add_new_item'              => __('Add new Recent Update Post', 'textdomain'),
        'edit_item'                 => __('Edit Recent Update Post', 'textdomain'),
        'all_items'                 => __('Recent Update Post', 'textdomain'),
    );

    $recentUpdatesPost_args = array(
        'labels'                    => $recentUpdatesPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('recentUpdatesPost', $recentUpdatesPost_args);
};

add_action('init', 'theRecentUpdates__custom_post');