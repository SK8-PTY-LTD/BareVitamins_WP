<?php
add_action( 'wp_enqueue_scripts', 'sk8tech_theme_enqueue_styles' );
function sk8tech_theme_enqueue_styles() {

    $parent_style = 'hellen';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'barevitamins',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
?>