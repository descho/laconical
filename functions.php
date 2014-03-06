<?php

// Load the Theme CSS
function theme_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
//	wp_enqueue_style( 'iconfont', 'http://i.icomoon.io/public/temp/1e258455d3/UntitledProject1/style.css' );
	wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// Load the Theme JS
function theme_js() {
//	wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.js',  array('jquery'), '', true );
	wp_enqueue_script( 'fittext', get_template_directory_uri() . '/js/jquery.fittext.js',  array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

// Enable custom menus
add_theme_support( 'menus' );

// This featured image
add_theme_support( 'post-thumbnails' );

//remove_theme_support( 'editor' );

function remove_box()
{
//	remove_post_type_support('post', 'editor');
//	remove_meta_box( 'sqpt-meta-tags' , 'post' , 'normal' ); 
//	remove_post_type_support('post', 'tagsdiv-post_tags');
}
// add_action("admin_init", "remove_box");

// function remove_post_tags() {
// 	remove_meta_box( 'sqpt-meta-tags' , 'post' , 'normal' ); 
// }
// add_action( 'admin_init' , 'remove_post_tags' );

?>