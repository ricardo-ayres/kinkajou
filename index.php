<?php get_header(); ?>
<!-- main post board -->
<div class="index grid main wrapper">
  <div class="index grid flex main">
<?php
while (have_posts()) {
        the_post();
?>
    <div class="index grid item container padding">
      <a class="index grid item permalink" href="<?php the_permalink(); ?>">
        <img class="index grid item thumbnail"
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
