jQuery(document).ready(function($) {
  var $submenu = $('.submenu');
  var $dropdownToggle = $('.menu-item-has-children');

  $submenu.hide();
  $dropdownToggle.click(function(e) {
    $(this).find('.submenu').toggle();
  });

  // var $navbarNav = $('.navbar-nav');
  // var $navbarToggle = $('.navbar-toggle');
  //
  // $navbarNav.toggleClass('dn');
  // $navbarToggle.toggleClass('dn');
  //
  // $navbarToggle.click(function() {
  //   $navbarNav.toggleClass('dn');
  // });

});
