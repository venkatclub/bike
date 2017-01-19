<?php

get_header();  ?>

<p>this is <b>index.php</b></p>
  <?php if (have_posts() ):

    while (have_posts() ) : the_post(); ?>

      <a href="<?php the_permalink(); ?>"><?php the_title( '<h1>', '</h1>' ); ?></a>
      <?php the_excerpt(); ?>
      <!-- <?php wp_link_pages(); ?> -->
    <?php
    endwhile;
  else:
    get_template_part('template-parts/content','none');
  endif; ?>


<?php get_footer(); ?>
