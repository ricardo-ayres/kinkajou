<?php
add_theme_support('post-thumbnails');

function kinkajou_scripts() {
    wp_enqueue_style( 'kinkajou-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'kinkajou_scripts' );
register_nav_menu('primary', 'Primary Menu');
?>
