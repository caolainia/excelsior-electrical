<?php

function onepress_child_scripts() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'parenthandle' ), 
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'onepress_child_scripts' );