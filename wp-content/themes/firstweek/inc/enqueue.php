<?php

function fw_scripts() {
	wp_enqueue_style( 'fw-style', get_stylesheet_uri(), array(), '1.0.0' );

	wp_enqueue_script( 'fw-jquery', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4');

	// wp_enqueue_script( 'fw-main', get_template_directory_uri() . '/js/adk.min.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'fw_scripts' );


 ?>
