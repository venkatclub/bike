<?php

get_header();
?>
<p> this is from <b>page.php</b> </p>

<div class="row">
  <div class="col-md-8">
    <?php
      if(have_posts()) :
        /* start the loop*/
        while( have_posts() ) : the_post(); ?>
          <div class="thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
          <h1><?php the_title(); ?></h1>
          <small><?php the_author(); ?><span> </span> <?php
           the_time('F jS, Y'); ?> </small>
          <div class="the-content">
            <?php the_content();
            edit_post_link('Edit');
            ?>
          </div>
          <br><br>
            <span>Post ID: </span> <?php the_id(); ?> <br>
            <span>shortlink: </span> <?php the_shortlink(); ?> <br>
            <span>meta: </span> <?php the_meta(); ?> <br>
            <span>Category: </span> <?php the_category(); ?> <br>
                                    <?php the_tags(); ?> <br>

            <br>
          <?php
      endwhile;
    else:
      get_template_part('template-parts/content','none');
    endif;
     ?>
    <span class="prev-post"><?php previous_post_link(); ?></span>
    <span class="next-post"><?php next_post_link(); ?></span>
    <br>
  </div>

  <div class="col-md-4">
    <?php get_sidebar(); ?>
  </div>
</div>



<?php get_footer(); ?>
