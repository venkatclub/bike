<?php

/**
*  enqueue  styles and scripts- bootstrap css file , custom css , bootstrap js, jquery , tether
*/


function bike_add_theme_scripts(){

  // add bootstrap.css
  wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.css'));

  //add cutom css file
  wp_enqueue_style('custom', get_theme_file_uri('css/custom.css'));

  // add style.css
  wp_enqueue_style('style', get_stylesheet_uri() );

  // add jquery and tether js
  wp_enqueue_script('scripts', get_theme_file_uri('js/tether.js'), array('jquery'), filemtime(get_theme_file_path('js/tether.js')), true);

  // add bootstrap.js
  wp_enqueue_script('bootstrap', get_theme_file_uri('js/bootstrap.js'), array(), filemtime(get_theme_file_path('js/bootstrap.js')), true);

}






?>
