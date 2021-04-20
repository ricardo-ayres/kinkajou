<?php
?>
<div class="sidenav wrapper">
	<!-- Collapsible posts list -->
	<button id="sidenav-button" class="sidenav button"><?= get_option("sidenav_list_label"); ?></button>

	<div id="sidenav-collapsible" class="sidenav collapsible">
<?php kinkajou_get_sidenav_posts(); ?>
	</div>

	<!-- Page links -->
	<div class="sidenav navlinks">
<?php kinkajou_get_sidenav_navlinks(); ?>
	</div>
</div>
<?php
