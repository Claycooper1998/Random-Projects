<?php

function random_register_styles(){
	wp_enqueue_style('random-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
	wp_enqueue_style('random-tailwind', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'random_register_styles');
?>