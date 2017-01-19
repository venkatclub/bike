
<div class="thumbnail">
  <?php the_post_thumbnail(); ?>
</div>
<h1><?php the_title(); ?></h1>
<small><?php the_author(); ?> <?php
 the_time('F jS, Y'); ?> </small>
<div class="the-content">
  <?php the_content();
  wp_link_pages();
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
  <hr><br>
