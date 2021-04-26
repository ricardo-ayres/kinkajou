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
	<button id="title-button">
		<svg width="32" height="32" viewBox="0 0 24 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 0H24V2.6875H0V0ZM0 9.3125V6.6875H24V9.3125H0ZM0 16V13.3125H24V16H0Z" fill="black"/>
		</svg>
	</button>
</div>

<!-- side nav -->
<?php get_template_part("sidenav"); ?>

<!-- site tagline -->
<div id="footer">
	<hr/>
	<p><?= kinkajou_get_footer_text(); ?></p>
</div>

<!-- wrapper for all content -->
<div id="main-content">
<?php


