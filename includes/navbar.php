<nav class="absolute pa3 tc w-100" role="navigation">
  <a class="db dib-ns pa3" href="/"><img class="dib w3 v-mid" alt="<?php bloginfo('name'); ?>" src="<?php get_image_uri('food-passion-project-logo.svg'); ?>"></a>

  <a class="dn navbar-toggle" href="#">Menu</a>

  <div class="navbar-nav dib-ns">
    <?php
      create_menu('main-menu', 2, 'dib list pl0 mv0', array(
        'item_class' => 'dib-l relative',
        'link_class' => 'dib pa2 pa3-l ink link ttu f5',
        'submenu_class' => 'submenu absolute-l list pl0 w-100 ph3',
        'subitem_class' => 'mb2',
        'sublink_class' => 'db pv1 ph2 bg-arugula white link ttu f6 br bw2'
      ));

      create_menu('feature-menu', 1, 'dib list pl0 mv0', array(
        'item_class' => 'dib',
        'link_class' => 'dib pv2 ph3 bg-white compote link ttu f5 b br bw2'
      ));
    ?>
  </div>

</nav>
