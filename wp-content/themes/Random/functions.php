<?php

function random_register_styles(){
	wp_enqueue_style('random-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
	// this links to the tailwind stuff with   "/build/tailwind.css"
	wp_enqueue_style('random-tailwind', get_template_directory_uri() . "/build/tailwind.css", array(), '1.0', 'all'); 

}

add_action( 'wp_enqueue_scripts', 'random_register_styles');
?>