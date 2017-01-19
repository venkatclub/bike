<?php
/*
* get_header() will call header.php and
* get_header('home') call header-home.php
*/
?><!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div class="container-fluid">


      <header>


        <!-- home page slider -->
        <!-- <?php get_template_part('template-parts/content','home-slider');  ?> -->

        <div class="row">
          <div class="col-md-8">
            <h1><a class="titlea" href="<?php echo home_url();?>"><?php bloginfo('title'); ?></a></h1>
            <h4 class="small"><?php bloginfo('description'); ?></h4>
          </div>
          <div class="col-md-4 search-form">
              <?php get_search_form(); ?>
          </div>
        </div>


        <nav class="header-nav">
          <?php wp_nav_menu( array(
            'theme_location' => 'primary'
          )); ?>
        </nav>
      </header>








<?php  ?>
