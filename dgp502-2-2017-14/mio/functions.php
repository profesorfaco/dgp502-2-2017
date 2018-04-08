<?php

function los_scripts() {
wp_register_script( 'script-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery'), '3.3.5', true );
wp_enqueue_script( 'script-bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'los_scripts' );

add_filter( 'pre_option_link_manager_enabled', '__return_true' );

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
add_image_size( 'custom', 250, 250, true );
}
?>
