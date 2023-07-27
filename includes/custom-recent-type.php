<?php 

function theRecent__custom_post(){
    $recentPost_label = array(
        'name'                      => __('Recent Post', 'textdomain'),
        'singular_name'             => __('Recent Post', 'textdomain'),
        'add_new'                   => __('Add Recent Post', 'textdomain'),
        'add_new_item'              => __('Add new Recent Post', 'textdomain'),
        'edit_item'                 => __('Edit Recent Post', 'textdomain'),
        'all_items'                 => __('Recent Post', 'textdomain'),
    );

    $recentPost_args = array(
        'labels'                    => $recentPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('recentPost', $recentPost_args);
};

add_action('init', 'theRecent__custom_post');