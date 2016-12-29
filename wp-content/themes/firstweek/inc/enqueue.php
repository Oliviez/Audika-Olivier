<?php

function fw_scripts() {
	wp_enqueue_style('fw-ico-style', get_stylesheet_directory_uri() . '/css/icomoon.css', array(), '1.0.0');

	wp_enqueue_style( 'fw-style', get_stylesheet_uri(), array(), '1.0.0' );

	wp_enqueue_script( 'fw-jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4');

	wp_enqueue_script( 'fw-gmaps', get_template_directory_uri() . '/js/gmaps/gmaps.min.js', array(), '0.4.24');

	wp_enqueue_script( 'fw-main', get_template_directory_uri() . '/dist/fw.min.js', array(), '1.0');

}
add_action( 'wp_enqueue_scripts', 'fw_scripts' );


 ?>
