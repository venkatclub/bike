<?php

get_header('home');  ?>

<p>this is <b>home.php</b></p>

  <div class="row">
    <div class="col-md-8">
      <?php
        if(have_posts()) :
          /* start the loop*/
          ?>
          <?php
          $user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
          echo "<p>User count is {$user_count}</p>";
          ?>
          <?php
          while( have_posts() ) : the_post(); ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <small><?php the_author(); ?><span> </span> <?php
             the_time('F jS, Y'); ?> </small>
            <div class="the-excerpt">
              <?php the_excerpt();
              edit_post_link('Edit');
              ?>
            </div>
            <br>
            <?php
        endwhile;
      else:
        get_template_part('template-parts/content','none');
      endif;
       ?>

      <!-- <span><?php posts_nav_link(); ?></span> -->
      <span><?php the_posts_pagination(); ?></span>
      <!-- <span class="prev-post"><?php previous_post_link(); ?></span>
      <span class="next-post"><?php next_post_link(); ?></span> -->
      <br>
    </div>

    <!-- sidebar -->
    <div class="col-md-4">
      <?php get_sidebar(); ?>
     </div>  <!-- End sidebar  -->


  </div>


<?php get_footer(); ?>
