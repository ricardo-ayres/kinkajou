<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>
<body>
  <header class="side-nav">
    <?php wp_nav_menu(); ?>
  </header>

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

  <footer>
    <?php
      wp_footer()
    ?>
  </footer>
</body>
</html>
