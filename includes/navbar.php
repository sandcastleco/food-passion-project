<?php
  wp_nav_menu( array(
    'menu'              => 'main-menu',
    'theme_location'    => 'main-menu',
    'container' => FALSE,
    'container_id' => FALSE,
    'menu_class' => '',
    'depth' => 1,
    'walker' => new Nav_Walker(array('', ''))
    )
  );
?>
