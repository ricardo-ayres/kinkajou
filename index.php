<?php get_header(); ?>
<!-- main post board -->
<div class="wrapper">
  <div class="index grid">
<?php
while (have_posts()) {
        the_post();
?>
    <div class="index item container">
      <a class="index permalink" href="<?php the_permalink(); ?>">
        <img class="index thumb"
          src="<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
        />
      </a>
    </div>
<?php
}
?>
  </div>
</div>
<?php
get_footer();
