<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title() ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

<body>
<div id="main" class="main">
  <!-- side nav -->
  <div class="sidenav padding">
    <a href="<?= get_home_url(); ?>"><h1 class="site title padding"><?= get_bloginfo(); ?></h1></a>
    <div class="primary menu wrapper padding">
<?php
wp_nav_menu(array('theme-location'=>'primary'));
?>
    </div>
  </div>
<?php
