<?php get_header(); ?>

<div class="wrapper">
<?php
/* the loop */
if ( have_posts() ) {
  while ( have_posts() ) {
?>
  <div class="page content">
<?php
    /* Set up post data */
    the_post();

    /* Post title */
?>
    <h1 class="page title"><?php the_title(); ?></h1>
<?php

        /* Output content */
        the_content();
?>
  </div>
<?php
  }
} else {
  echo 'Nothing found';
}; 
?>
</div>

<?php get_footer();
