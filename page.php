<?php get_header(); ?>

	<div id="main-content" class="main-content">
		<?php
		// Start the Loop.
		while (have_posts()): the_post();
			// Include the page content template.
			get_template_part('content', 'page');
		endwhile;
		?>
	</div><!-- #main-content -->

<?php get_footer(); ?>
