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

// include jQuery CDN
function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

// include Font Awesome
function prefix_enqueue_awesome() {
	wp_enqueue_style( 
		'font-awesome-5', 
		'https://use.fontawesome.com/releases/v5.10.2/css/all.css', 
		array(), 
		'5.3.0' 
	);
}
add_action( 'wp_enqueue_scripts', 'prefix_enqueue_awesome' );
