<?php get_header(); ?>

<div class="main-window">
  <div class="post-board">
    <?php
      if (have_posts()) {
        while(have_posts()){
          the_post();
          ?> <!-- the post index content goes in here -->
            <div class="post-index">
              <a class="post-index" href="<?php the_permalink(); ?>">
                <img class="post-index" src="<?php the_post_thumbnail(); ?>"/>
                <p><?php the_post_title(); ?></p>
              </a>
            </div>
          <?php
        }
      } else {
        ?><p>Sorry, no posts found.</p><?php
      }
    ?>
  </div>
</div>

<?php get_footer() ?>
