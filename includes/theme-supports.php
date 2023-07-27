<?php

function theCVD__support(){
    add_theme_support('post-thumbnails');
};

add_action('after_setup_theme', 'theCVD__support');