<?php get_header(); ?>

<div>
  <?php
    if (have_posts()) {
      while(have_posts()){
        the_post();
        ?><a href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?></a><?php
      }
    } else {
      ?><p>Sorry, no posts found.</p><?php
    }
  ?>
</div>

<?php get_footer() ?>
