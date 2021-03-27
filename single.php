<?php get_header(); ?>

<div id="main-content" class="post content container padding">
  <?php
    /* the loop */
    if ( have_posts() ) {
      while ( have_posts() ) {
        /* Set up post data */
        the_post();
				$post_text = kinkajou_get_post_text(get_the_content());
				$gallery = kinkajou_get_gallery_urls(get_the_ID());

        /* Post title */
        ?>
          <h1 class="post content title"><?php the_title(); ?></h1>
        <?php

        /* Output content */
				?>
					<div class="post content text">
						<?php echo $post_text; ?>
					</div>
				<?php
				foreach ($gallery as $url) {
					echo $url."<br>";
				}
      }
    } else {
      echo 'Nothing found';
    }; 
   ?>
</div>

<?php get_footer(); ?>
