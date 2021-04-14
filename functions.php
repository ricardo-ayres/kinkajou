<?php

/* General Theme Setup */
add_theme_support('post-thumbnails');

/* Theme Functions */
function kinkajou_get_post_text($content) {
	return apply_filters('the_content', strip_shortcodes($content));
}

function kinkajou_get_gallery_urls($id) {
	$gallery = get_post_gallery($id, false);
	$output = array();
	if ($gallery) {
		$img_ids = explode(",", $gallery['ids']);
		foreach ($img_ids as $img) {
			array_push($output, wp_get_attachment_url($img));
		}
		return $output;
	}	else {
		return false;
	}
}

function kinkajou_get_page_by_slug($slug) {
  if ($slug) {
    $args = array(
      "name"          => $slug,
      "post_type"     => "page",
      "post_status"   => "publish",
      "numberposts"   => 1,
    );
    $page = get_posts($args)[0];
  } else {
    $page = null;
  }
  return $page;
}

function kinkajou_get_sidenav_posts() {
	$sidenav_posts_category = get_option("sidenav_posts_category");
	$get_posts_args = array(
		'numberposts'     => -1,
		'category'        => get_category_by_slug($sidenav_posts_category)->term_id,
	);
	$sidenav_posts = get_posts($get_posts_args);
  $output_list = array();
?>
<div class="sidenav posts">
<?php
	foreach ($sidenav_posts as $post_id) {
?>
  <a class="sidenav posts item" href="<?= get_permalink($post_id); ?>"><?= esc_html(get_the_title($post_id)); ?></a>
<?php
	}
?>
</div><!-- sidenav collapsible -->
<?php
}

function kinkajou_get_sidenav_navlinks() {
	$opts = array("sidenav_about", "sidenav_contact", "sidenav_resume");
	foreach ($opts as $opt) {
		$navpage = kinkajou_get_page_by_slug(get_option($opt));
		if ($navpage) {
?>
<a class="sidenav navlink" href="<?= get_permalink($navpage); ?>"><?= $navpage->post_title; ?></a>
<?php
		}
	}
}

/* Theme Settings in Admin Panel */
function kinkajou_settings() {
?>
  <div>
    <h1>Kinkajou Settings</h1>
    <form method="post" action="options.php">
<?php
  settings_fields("sidenav_group");
  do_settings_sections("kinkajou-settings-page");
  submit_button();
?>
    </form>
  </div>
<?php
}

function kinkajou_add_settings_page() {
  add_menu_page("Kinkajou Settings", "Kinkajou Settings", "manage_options", "kinkajou-settings-menu", "kinkajou_settings", null, null);
}

function kinkajou_settings_fields() {
  add_settings_section("sidenav", "Sidenav Options", null, "kinkajou-settings-page");

  add_settings_field("sidenav_posts_category", "Category slug to list in the sidenav", "display_sidenav_posts_category", "kinkajou-settings-page", "sidenav");
  register_setting("sidenav_group", "sidenav_posts_category");

  add_settings_field("sidenav_list_label", "Sidenav post list label", "display_sidenav_list_label", "kinkajou-settings-page", "sidenav");
  register_setting("sidenav_group", "sidenav_list_label");

  add_settings_field("sidenav_about", "Sidenav About page slug", "display_sidenav_about", "kinkajou-settings-page", "sidenav");
  register_setting("sidenav_group", "sidenav_about");

  add_settings_field("sidenav_contact", "Sidenav Contact page slug", "display_sidenav_contact", "kinkajou-settings-page", "sidenav");
  register_setting("sidenav_group", "sidenav_contact");

  add_settings_field("sidenav_resume", "Sidenav Resume page slug", "display_sidenav_resume", "kinkajou-settings-page", "sidenav");
  register_setting("sidenav_group", "sidenav_resume");
}

function display_sidenav_list_label() {
?>
  <input type="text" name="sidenav_list_label" id="sidenav_list_label" value="<?= get_option('sidenav_list_label'); ?>" />
<?php
}

function display_sidenav_posts_category() {
?>
  <input type="text" name="sidenav_posts_category" id="sidenav_posts_category" value="<?= get_option('sidenav_posts_category'); ?>" />
<?php
}

function display_sidenav_about() {
?>
  <input type="text" name="sidenav_about" id="sidenav_about" value="<?= get_option('sidenav_about'); ?>" />
<?php
}

function display_sidenav_contact() {
?>
  <input type="text" name="sidenav_contact" id="sidenav_contact" value="<?= get_option('sidenav_contact'); ?>" />
<?php
}

function display_sidenav_resume() {
?>
  <input type="text" name="sidenav_resume" id="sidenav_resume" value="<?= get_option('sidenav_resume'); ?>" />
<?php
}

add_action('admin_init', 'kinkajou_settings_fields');
add_action('admin_menu', 'kinkajou_add_settings_page');

/* Stylesheets and JS */
function kinkajou_scripts() {
	wp_enqueue_style( 'kinkajou-style', get_stylesheet_uri() );
  wp_enqueue_script('functions.js', get_template_directory_uri() .'/js/functions.js', null, null, true);
}

add_action( 'wp_enqueue_scripts', 'kinkajou_scripts' );
