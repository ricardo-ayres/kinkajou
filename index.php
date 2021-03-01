<!DOCTYPE html>
<html>
  <head><?php wp_head(); ?></head>

<body style="display: block;
             height: 100vh;
             overflow-y: hidden;">

  <!-- side nav -->
  <div style="display: block;
              float: left;
              height:100%;
              width: 15%;
              overflow-y: hidden;">
    <div style="width: calc(100% + 15px);
                height: 100%;
                overflow-y: scroll;">
      <a style="display: block;">a link in the sidenav</a>
    </div>
  </div>

  <!-- main post board -->
  <div style="display: flex;
              flex-flow: column wrap;
              float: left;
              height: 100%;">
    <?php while (have_posts()): ?>
      <?php the_post(); ?>
      <div style="display: block;
                  height: 30%;
                  padding: 1%;">
        <a style="display: block;
                  height: 100%;
                  width: 100%;"
          href="<?php the_permalink(); ?>">
          <img style="display: block;
                      margin: auto;
                      max-width: 100%;
                      max-height: 100%;"
            src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"/>
        </a>
      </div>
    <?php endwhile ?>
  </div>


  <footer><?php wp_footer(); ?></footer>
</body>
</html>
