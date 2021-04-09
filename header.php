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
$get_posts_args = array(
  'numberposts'     => -1,
  'category'        => get_category_by_slug(get_option("sidenav_list_category"))->term_id,
);

$sidenav_posts_list = get_posts($get_posts_args);
?>
  <div class="sidenav main wrapper padding">
    <div class="sidenav flex container padding">
      <!-- First flex item: Site title -->
      <div class="sidenav site title">
        <h1 class="sidenav site title"><a class="sidenav site title" href="<?= get_home_url(); ?>"><?= get_bloginfo('name'); ?></a></h1>
      </div>

      <!-- Second flex item: Collapsible posts list -->
      <h2><button id="kinkajou-collapse-button" class="sidenav posts list btn"><?= get_option("sidenav_list_label"); ?></button></h2>
      <div id="kinkajou-collapsible-menu" class="sidenav collapsible menu">
<?php
foreach ($sidenav_posts_list as $pid) {
?>
        <h3 class="sidenav collapsible-item"><a class="sidenav collapsible-item" href="<?= get_permalink($pid); ?>"><?= esc_html(get_the_title($pid)); ?></a></h3>
<?php
}
?>
      </div>

      <!-- Third flex item: Page links -->
      <div class="sidenav page links container">
<?php
$opts = array("sidenav_about", "sidenav_contact", "sidenav_resume");
foreach ($opts as $opt) {
  $navpage = kinkajou_get_page_by_slug(get_option($opt));
  if ($navpage) {
?>
        <h2><a class="sidenav page link" href="<?= get_permalink($navpage); ?>"><?= $navpage->post_title; ?></a></h2>
<?php
  }
}
?>
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
