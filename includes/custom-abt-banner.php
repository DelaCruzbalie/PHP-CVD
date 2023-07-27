<?php 

function theAbout__custom_post(){
    $abtBannerPost_label = array(
        'name'                      => __('Abt-Banner Post', 'textdomain'),
        'singular_name'             => __('Abt-Banner Post', 'textdomain'),
        'add_new'                   => __('Add Abt-Banner Post', 'textdomain'),
        'add_new_item'              => __('Add new Abt-Banner Post', 'textdomain'),
        'edit_item'                 => __('Edit Abt-Banner Post', 'textdomain'),
        'all_items'                 => __('Abt-Banner Post', 'textdomain'),
    );

    $abtBannerPost_args = array(
        'labels'                    => $abtBannerPost_label,
        'public'                    => true,
        'capability_type'           => 'post',
        'show_ui'                   => true,
        'taxonomies'                => array('post_tag', 'category'),
        'supports'                  => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('abtBannerPost', $abtBannerPost_args);
};

add_action('init', 'theAbout__custom_post');