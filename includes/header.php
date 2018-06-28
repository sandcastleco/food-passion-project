<header class="absolute tr tc-l w-100">
  <nav class="dib pa3" role="navigation">
    <a class="db dib-l pa2 mt4 mt0-l" href="/"><img class="dib w3 v-mid" alt="<?php bloginfo('name'); ?>" src="<?php get_image_uri('food-passion-project-logo.svg'); ?>"></a>

    <div class="dib-l absolute static-l left-0 top-0 w-100 w-auto-l tc bg-near-white bg-transparent-l">
      <a class="navbar-toggle db dn-l pv2 w-100 bg-compote tc link white" href="#">Menu</a>
      <div class="navbar-nav dn dib-l pv3">
        <?php
          create_menu('main-menu', 2, 'dib list pl0 mv0', array(
            'item_class' => 'dib-l relative',
            'link_class' => 'dib pv1 mh3 ink link ttu f5',
            'submenu_class' => 'submenu absolute-l list pl0 w-100 ph3',
            'subitem_class' => 'mt2',
            'sublink_class' => 'db pv1 ph2 bg-arugula white link ttu f6 br bw2'
          ));

          create_menu('feature-menu', 1, 'dib-l list pl0 mv0', array(
            'item_class' => 'dib',
            'link_class' => 'dib pv2 ph3 bg-white compote link ttu f5 b br bw2'
          ));
        ?>
      </div>
    </div>

  </nav>
</header>
