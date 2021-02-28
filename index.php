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
    <div class="postboard">
      <?php while (have_posts()): ?>
        <?php the_post(); ?>
        <div class="postboard postitem">
          <a style="display: block; height: 100%; width: 100%;" href="<?php the_permalink(); ?>">
            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" style="margin: auto;"/>
          </a>
        </div>
      <?php endwhile ?>
    </div>

    <footer><?php wp_footer(); ?></footer>
  </body>
</html>
