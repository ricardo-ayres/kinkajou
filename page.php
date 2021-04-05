<?php get_header(); ?>

<div class="page main wrapper padding">
<?php
/* the loop */
if ( have_posts() ) {
  while ( have_posts() ) {
?>
  <div class="page content container padding">
<?php
    /* Set up post data */
    the_post();

    /* Post title */
?>
    <h1 class="page content title"><?php the_title(); ?></h1>
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

<?php get_footer(); ?>
