<?php



// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
//adds dynamic title tag support
function Random_Theme_Support(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme','Random_Theme_Support');
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
//Creates a "Menus section under appearance in wordpress backend
function random_menus() {

	$locations = array(
		'primary' => "Desktop primary",
		'footer' => "Footer Menu Items"
	);

	register_nav_menus($locations);
}
add_action('init','random_menus');
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
							// This function makes it so that we can load the CSS/Tailwind in automatically
function random_register_styles(){

	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style('random-style', get_template_directory_uri() . "/style.css", array('random-tailwind'), $version, 'all');
	// this links to the tailwind stuff with   "/build/tailwind.css"
	wp_enqueue_style('random-tailwind', get_template_directory_uri() . "/build/tailwind.css", array(), '1.0', 'all'); 

}

add_action( 'wp_enqueue_scripts', 'random_register_styles');
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
							// This removeds the stupid admin bar that was originally in the code
function hide_admin_bar_from_front_end(){
	if (is_blog_admin()) {
	  return true;
	}
	return false;
  }
  add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
function random_register_scripts(){

	wp_enqueue_script('Main-Javascript', get_template_directory_uri() . "/js/mainJavascript.js", array(), '1.0', true);
	
}

add_action( 'wp_enqueue_scripts', 'random_register_scripts');
// * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

