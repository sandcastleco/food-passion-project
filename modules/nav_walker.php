<?php

function create_menu($menu_location, $menu_class, $list_item_class, $link_class) {
  return wp_nav_menu(
    array(
      'theme_location' => $menu_location,
      'container' => FALSE,
      'container_id' => FALSE,
      'menu_class' => $menu_class,
      'depth' => 1,
      'walker' => new Nav_Walker(array($list_item_class, $link_class))
    )
  );
}

class Nav_Walker extends Walker_Nav_Menu {
  var $el_classes;

  function __construct($el_classes) {
    $this->el_classes = $el_classes;
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf(
      '<li class="%s"><a class="%s" href="%s">%s</a></li>',
      $this->el_classes[0],
      $this->el_classes[1],
      $item->url,
      $item->title
    );
  }
}

class Page_Walker extends Walker_Page {
  var $el_classes;

  function __construct($el_classes) {
    $this->el_classes = $el_classes;
  }

  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    $output .= sprintf(
      '<li class="%s"><a class="%s" href="%s">%s</a></li>',
      $this->el_classes[0],
      $this->el_classes[1],
      $item->guid,
      $item->post_title
    );
  }
}

?>
