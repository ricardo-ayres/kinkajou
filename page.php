<?php get_header(); ?>

<div id="main-content" class="main-content">
  <?php
    /* the loop */
    if ( have_posts() ) {
      while ( have_posts() ) {
        /* Set up post data */
        the_post();
        /* Output content */
        the_title();
        the_content();
      }
    } else {
      echo 'Nothing found';
    }; 
   ?>
</div>

<?php get_footer(); ?>
