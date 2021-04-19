<?php
?>
  <div class="sidenav wrapper">
      <!-- First flex item: Site title -->
      <div class="sidenav site title">
        <a id="home" href="<?= get_home_url(); ?>"><?= get_bloginfo('name'); ?></a>
      </div>

      <!-- Second flex item: Collapsible posts list -->
      <button id="sidenav-button" class="sidenav button"><?= get_option("sidenav_list_label"); ?></button>
      <div id="sidenav-collapsible" class="sidenav collapsible">
<?php kinkajou_get_sidenav_posts(); ?>
      </div>

      <!-- Third flex item: Page links -->
      <div class="sidenav navlinks">
<?php kinkajou_get_sidenav_navlinks(); ?>
      </div>

      <!-- Last flex item: Sidenav Footer -->
      <div class="sidenav footer">
        <hr/>
        <p><?= html_entity_decode(get_bloginfo('description')); ?></p>
      </div>
  </div>
<?php
