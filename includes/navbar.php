<nav class="pa3" role="navigation">
  <a class="dib pa3" href="/"><?php bloginfo('name'); ?></a>
  <?php
    wp_nav_menu( array(
      'menu' => 'main-menu',
      'theme_location' => 'main-menu',
      'container' => FALSE,
      'container_id' => FALSE,
      'menu_class' => 'dib list pl0 mv0',
      'depth' => 1,
      'walker' => new Nav_Walker(array('dib pa3', ''))
      )
    );
  ?>
</nav>
