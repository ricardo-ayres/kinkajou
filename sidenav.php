<?php
?>
  <div class="sidenav wrapper">
      <!-- First flex item: Site title -->
      <div class="sidenav site title">
        <h1 class="sidenav site title"><a class="sidenav site title" href="<?= get_home_url(); ?>"><?= get_bloginfo('name'); ?></a></h1>
      </div>

      <!-- Second flex item: Collapsible posts list -->
      <div class="sidenav post list">
				<?php kinkajou_get_sidenav_posts_list(); ?>
      </div>

      <!-- Third flex item: Page links -->
      <div class="sidenav navlinks">
				<?php kinkajou_get_sidenav_navlinks(); ?>
      </div>

      <!-- Last flex item: Sidenav Footer -->
      <div class="sidenav footer">
        <hr/>
        <p><?= get_bloginfo('description'); ?></p>
      </div>
  </div>
<?php
