<?php

get_header();
?>
<div class="scrollspacer">
  <div id="kinkajou-gallery" class="wrapper horizontal">
    <div class="single flex">
<?php
/* the loop */
if ( have_posts() ) {
  while ( have_posts() ) {
    /* Set up single data */
    the_post();
    $post_text = kinkajou_get_post_text(get_the_content());
    $gallery = kinkajou_get_gallery_urls(get_the_ID());
?>
        <div class="single text">
          <h1 class="title"><?php the_title(); ?></h1>
          <?= $post_text; ?>
        </div>
<?php
    foreach ($gallery as $img) {
?>
        <div class="single gallery">
          <img src="<?= $img; ?>" class="gallery image"/>
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
</div>
<?php get_footer();
