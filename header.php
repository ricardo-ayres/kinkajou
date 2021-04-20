<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
<body>
<div id="main" class="main">

<!-- site title -->
<div id="title">
	<a id="home" href="<?= get_home_url(); ?>"><?= get_bloginfo('name'); ?></a>
</div>

<!-- side nav -->
<?php get_template_part("sidenav"); ?>

<!-- site tagline -->
<div id="footer">
	<hr/>
	<p><?= html_entity_decode(get_bloginfo('description')); ?></p>
</div>

<!-- wrapper for all content -->
<div id="main-content">
<?php
