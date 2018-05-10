<nav class="pa3 tc" role="navigation">
  <a class="dib pa3" href="/"><?php bloginfo('name'); ?></a>
  <?php
    wp_nav_menu( array(
      'menu' => 'main-menu',
      'theme_location' => 'main-menu',
      'container' => FALSE,
      'container_id' => FALSE,
      'menu_class' => 'dib list pl0 mv0',
      'depth' => 1,
      'walker' => new Nav_Walker(array('dib', 'dib pa2 ink link ttu f5'))
      )
    );
  ?>
</nav>
