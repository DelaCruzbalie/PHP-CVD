<?php 

function theQuotes__custom_post(){
    $quotesPost_label = array(
        'name'                      => __('Quotes Post', 'textdomain'),
        'singular_name'             => __('Quotes Post', 'textdomain'),
        'add_new'                   => __('Add Quotes Post', 'textdomain'),
        'add_new_item'              => __('Add new Quotes Post', 'textdomain'),
        'edit_item'                 => __('Edit Quotes Post', 'textdomain'),
        'all_items'                 => __('Quotes Post', 'textdomain'),
    );

    $quotesPost_args = array(
        'labels'                    => $quotesPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('quotesPost', $quotesPost_args);
};

add_action('init', 'theQuotes__custom_post');