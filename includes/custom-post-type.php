<?php 

function theCVD__custom_post(){
    $cvdPost_label = array(
        'name'                      => __('CVD Post', 'textdomain'),
        'singular_name'             => __('CVD Post', 'textdomain'),
        'add_new'                   => __('Add CVD Post', 'textdomain'),
        'add_new_item'              => __('Add new CVD Post', 'textdomain'),
        'edit_item'                 => __('Edit CVD Post', 'textdomain'),
        'all_items'                 => __('CVD Post', 'textdomain'),
    );

    $cvdPost_args = array(
        'labels'                    => $cvdPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('cvdPost', $cvdPost_args);
};

add_action('init', 'theCVD__custom_post');