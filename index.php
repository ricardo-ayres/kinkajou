<?php get_header(); ?>

  <!-- main post board -->
  <div class="post grid main padding">
    <?php while (have_posts()): ?>
      <?php the_post(); ?>
      <div class="post grid item container padding">
        <a class="post grid item permalink" href="<?php the_permalink(); ?>">
          <img class="post grid item thumbnail"
            src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"/>
        </a>
      </div>
    <?php endwhile ?>
  </div>

<?php get_footer(); ?>
