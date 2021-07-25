<?php

function kbt_add_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'kbt_add_styles' );

add_theme_support('post_thumbnails');