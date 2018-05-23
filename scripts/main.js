jQuery(document).ready(function($) {
  var $submenu = $('.submenu');
  var $dropdownToggle = $('.menu-item-has-children');

  $submenu.hide();
  $dropdownToggle.click(function(e) {
    e.preventDefault();
    var $el = $(this);
    $el.toggleClass('open');
    if ($el.hasClass('open')) {
      $el.focus();
    } else {
      $el.blur();
    }
    $el.parent('li').find('.submenu').toggle();
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
