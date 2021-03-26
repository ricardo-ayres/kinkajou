<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

<body>
<div id="main">

  <!-- side nav -->
  <div class="sidenav external">
    <div class="sidenav internal">
      <?php wp_nav_menu(array('theme_location'='primary')); ?>
    </div>
  </div>
