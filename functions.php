<?php

// Adding CSS
function load_css () {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'load_css' );

// Adding JS
function load_js() {
    wp_enqueue_script( 'build.min.js', get_template_directory_uri() . '/js/min/build.min.js', array(), '1.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'load_js' );
