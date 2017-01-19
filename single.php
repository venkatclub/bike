<?php

get_header();
?>
<p> this is from <b>single.php</b> </p>

<div class="row">
  <div class="col-md-8">
    <?php
      if(have_posts()) :
        /* start the loop*/
        while( have_posts() ) : the_post(); ?>
          
          <?php get_template_part('template-parts/post-formats/format', get_post_format() ); ?>

            <!-- comments  -->
            <!-- ** some thing wrong here one post comments are displaying in other posts ** -->
            <!-- <h4>comments: </h4> -->
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) :
            //   comments_template();
            // endif;
            ?>
            <!-- <br><hr><br>   -->
            <!-- end comments  -->


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
