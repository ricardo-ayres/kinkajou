<?php
?>
<div id="sidenav-wrapper" class="sidenav">
	<button id="mobile-menu-close-btn" class="sidenav">
		<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M13.9844 1.42188L8.40625 7L13.9844 12.5781L12.5781 13.9844L7 8.40625L1.42188 13.9844L0.015625 12.5781L5.59375 7L0.015625 1.42188L1.42188 0.015625L7 5.59375L12.5781 0.015625L13.9844 1.42188Z" fill="black"/>
		</svg>
	</button>

	<!-- Collapsible posts list -->
	<button id="sidenav-button" class="sidenav"><?= get_option("sidenav_list_label"); ?></button>

	<div id="sidenav-collapsible" class="sidenav">
<?php kinkajou_get_sidenav_posts(); ?>
	</div>

	<!-- Page links -->
	<div class="sidenav navlinks">
<?php kinkajou_get_sidenav_navlinks(); ?>
	</div>
</div>
<?php
