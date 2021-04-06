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
<?php
$sidenav_posts_list = get_posts(['numberposts'=>-1]);
?>
  <div class="sidenav main wrapper padding">
    <div class="sidenav flex container padding">
      <!-- First flex item: Site title -->
      <div class="sidenav site title">
        <h1><a href="<?= get_home_url(); ?>"><?= get_bloginfo(); ?></a></h1>
      </div>

      <!-- Second flex item: Collapsible posts list -->
      <div class="sidenav posts list">
        <h3><a href="javascript:void(0)">SÉRIES +</a></h3>
      </div>
      <div class="sidenav collapsible menu">
<?php
foreach ($sidenav_posts_list as $pid) {
?>
        <h4><a href="<?= get_permalink($pid); ?>">
          <?= esc_html(get_the_title($pid)); ?>
        </a></h4>
<?php
}
?>
      </div>

      <!-- Third flex item: Page links in wordpress menu -->
      <div class="sidenav nav menu">
        <?php wp_nav_menu(array('theme-location'=>'primary')); ?>
      </div>

      <!-- HACK: empyty div flex spacer -->
      <div class="sidenav spacer"></div>

      <!-- Last flex item: Sidenav Footer -->
      <div class="sidenav footer">
        <hr/>
        <p>Footer text goes here</p>
      </div>
    </div>
  </div>
<?php
