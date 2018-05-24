jQuery(document).ready(function($) {
  var $submenu = $('.submenu');
  var $dropdownToggle = $('.menu-item-has-children');

  $submenu.hide();

  $dropdownToggle.click(function(e) {
    e.preventDefault();
    $(this).parent('li').find('.submenu').toggle();
  });

});
