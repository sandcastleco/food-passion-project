<nav class="pa3 tc" role="navigation">
  <a class="dib pa3" href="/"><img class="dib w3 v-mid" alt="<?php bloginfo('name'); ?>" src="<?php get_image_uri('food-passion-project-logo.svg'); ?>"></a>
  <?php
    wp_nav_menu( array(
      'menu' => 'main-menu',
      'theme_location' => 'main-menu',
      'container' => FALSE,
      'container_id' => FALSE,
      'menu_class' => 'dib list pl0 mv0',
      'depth' => 1,
      'walker' => new Nav_Walker(array('dib', 'dib pa2 pa3-l ink link ttu f5'))
      )
    );
  ?>
</nav>
