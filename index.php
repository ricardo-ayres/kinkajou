<!DOCTYPE html>
<html>
  <head><?php wp_head(); ?></head>
  <body>

    <!-- sidenav -->
    <div class="sidenav external">
      <div class="sidenav internal">
        <a>a link</a>
      </div>
    </div>

    <!-- main post index -->
    <div class="board">
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>
          <div class="board small">
            <a class="board small thumblink" 
             style="display: block; height: 100%; width: 100%;"
             href="<?php the_permalink(); ?>">
              <img class="board small link thumblink thumb" 
                 src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
                 style="margin: auto;"/>
            </a>
          </div>
        <?php } ?>
      <?php } else { ?>
        <p>Sorry, no posts found.</p>
      <?php } ?>
    </div>

    <footer><?php wp_footer(); ?></footer>
  </body>
</html>
