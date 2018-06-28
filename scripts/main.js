jQuery(document).ready(function($) {
  var $submenu = $('.submenu');
  var $dropdownToggle = $('.menu-item-has-children');
  var $navToggle = $('.navbar-toggle');
  var $navbar = $('.navbar-nav');

  $submenu.hide();

  $dropdownToggle.click(function(e) {
    e.preventDefault();
    $(this).parent('li').find('.submenu').slideToggle();
  });

  $navToggle.click(function(e) {
    e.preventDefault();
    $navbar.slideToggle();
  });

});
