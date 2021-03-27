<?php
function kinkajou_scripts() {
	wp_enqueue_style( 'kinkajou-style', get_stylesheet_uri() );
}

function kinkajou_get_post_text($content) {
	return apply_filters('the_content', strip_shortcodes($content));
}

function kinkajou_get_gallery_img_urls($a_post) {
	$imgs = get_attached_media('image', $a_post);
	foreach ($imgs as $img) {
		array_push($img_urls, get_attachment_url($img));
	}
	return $img_urls;
}

add_theme_support('post-thumbnails');
register_nav_menu('primary', 'Primary Menu');
add_action( 'wp_enqueue_scripts', 'kinkajou_scripts' );
?>
