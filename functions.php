<?php
function kinkajou_scripts() {
	wp_enqueue_style( 'kinkajou-style', get_stylesheet_uri() );
  wp_enqueue_script('functions.js', get_template_directory_uri() .'/js/functions.js', array('jquery'), null, true);
}

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

add_theme_support('post-thumbnails');
register_nav_menu('primary', 'Primary Menu');
add_action( 'wp_enqueue_scripts', 'kinkajou_scripts' );
?>
