<nav class="pa3 tc absolute w-100" role="navigation">
  <a class="dib pa3" href="/"><img class="dib w3 v-mid" alt="<?php bloginfo('name'); ?>" src="<?php get_image_uri('food-passion-project-logo.svg'); ?>"></a>

  <?php
    create_menu('main-menu', 2, 'dib list pl0 mv0', array(
      'item_class' => 'dib relative',
      'link_class' => 'dib pa2 pa3-l ink link ttu f5',
      'submenu_class' => 'dn absolute-l list pl0 w-100 ph3',
      'subitem_class' => 'pa2 bg-compote mb2',
      'sublink_class' => 'white link ttu f6'
    ));

    create_menu('feature-menu', 1, 'dib list pl0 mv0', array(
      'item_class' => 'dib',
      'link_class' => 'dib pv2 ph3 bg-white compote link ttu f5 b'
    ));
  ?>

</nav>
