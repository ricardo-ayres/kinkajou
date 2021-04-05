<?php

get_header();
?>
<div class="single main wrapper padding">
  <div class="single content flex">
<?php
/* the loop */
if ( have_posts() ) {
  while ( have_posts() ) {
    /* Set up single data */
    the_post();
    $post_text = kinkajou_get_post_text(get_the_content());
    $gallery = kinkajou_get_gallery_urls(get_the_ID());
?>
      <div class="single text container padding">
        <h1 class="single content title"><?php the_title(); ?></h1>
        <?= $post_text; ?>
      </div>
<?php
    foreach ($gallery as $img) {
?>
      <div class="gallery item container padding">
        <img src="<?= $img; ?>" class="gallery item image"/>
      </div>
<?php
    }
?>
  </div>
<?php
  }
} else {
  echo 'Nothing found';
} 
?>
</div>
<?php get_footer();
