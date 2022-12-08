<?php


function test_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}



function test_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js' );
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick-script', get_template_directory_uri() .'/assets/js/slick.min.js', array(jquery), null, true );
	wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/main.js', array(jquery), null, true );
}
add_action( 'wp_enqueue_scripts', 'test_style' );
add_action( 'wp_enqueue_scripts', 'test_scripts' );
add_action ('wp_enqueue_scripts', 'b2w_theme_js');