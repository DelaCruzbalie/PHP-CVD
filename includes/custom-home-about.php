<?php 

function theHomeAbout__custom_post(){
    $homeAboutPost_label = array(
        'name'                      => __('Home-About Post', 'textdomain'),
        'singular_name'             => __('Home-About Post', 'textdomain'),
        'add_new'                   => __('Add Home-About Post', 'textdomain'),
        'add_new_item'              => __('Add new Home-About Post', 'textdomain'),
        'edit_item'                 => __('Edit Home-About Post', 'textdomain'),
        'all_items'                 => __('Home-About Post', 'textdomain'),
    );

    $homeAboutPost_args = array(
        'labels'                    => $homeAboutPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('homeAboutPost', $homeAboutPost_args);
};

add_action('init', 'theHomeAbout__custom_post');