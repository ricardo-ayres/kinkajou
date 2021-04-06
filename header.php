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
        <h1><a href="<?= get_home_url(); ?>"><?= get_bloginfo('name'); ?></a></h1>
      </div>

      <!-- Second flex item: Collapsible posts list -->
      <h3 id="kinkajou-collapse-button" class="sidenav posts list"><a href="javascript:void(0)" onclick="kinkajou_collapse()">SÉRIES +</a></h3>
      <div id="kinkajou-collapsible-menu" class="sidenav collapsible menu">
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
        <p><?= get_bloginfo('description'); ?></p>
      </div>
    </div>
  </div>
<?php
