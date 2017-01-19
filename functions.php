<?php


/********* setup  ******/

add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

add_theme_support('post-thumbnails');
add_theme_support( 'custom-background' );
add_theme_support( 'automatic-feed-links' );

add_theme_support('post-formats',array('aside','link','gallery','image','quote','status','video','audio','chat'));
function bike_post_format(){
	add_post_type_support('page', 'post-formats');
}
add_action('init','bike_post_format');

// $customheaderargs = array(
//     'flex-width'    => true,
//     'width'         => 980,
//     'flex-height'   => true,
//     'height'        => 200,
//     'default-image' => get_template_directory_uri() . '/images/header.jpg',
// );
// add_theme_support( 'custom-header', $customheaderargs );
add_theme_support( 'custom-header' );


// add_action('after_setup_theme', 'my_theme_setup');
// function my_theme_setup(){
//     load_theme_textdomain('bike', get_template_directory() . '/languages');
// }
load_theme_textdomain( 'bike', get_template_directory() . '/languages' );


/********* includes  ******/
include(get_theme_file_path('includes/front/register-styles.php'));
include(get_theme_file_path('includes/front/register-menus.php'));
include(get_theme_file_path('includes/front/register-widgets.php'));
include(get_theme_file_path('includes/widget-classes/bike-test-widget.php'));
include(get_theme_file_path('includes/widget-classes/custom-search-widget.php'));









/*********  actions and filters hooks ******/
// register the scripts and css files - inlcudes/frint/register-styles.php
add_action('wp_enqueue_scripts', 'bike_add_theme_scripts' ,999);

// register menus - includes/front/register-menu.php
add_action('after_setup_theme', 'bike_register_menus');

//register widgets - includes/front/register-widgets.php
add_action('widgets_init','bike_widget_init');





/********* shortcodes  ******/


















?>
