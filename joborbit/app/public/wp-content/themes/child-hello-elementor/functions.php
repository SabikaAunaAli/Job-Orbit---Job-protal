<?php 
	 add_action( 'wp_enqueue_scripts', 'child_hello_elementor_enqueue_styles' );
	 function child_hello_elementor_enqueue_styles() {
 		  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
 		  } 
 ?>