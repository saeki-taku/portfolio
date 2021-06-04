"use strict";

(function () {
  $('#js-buttonHamburger').on('click', function () {
    $('body').toggleClass('is-drawerActive');

    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', true);
    } else {
      $(this).attr('aria-expanded', false);
    }
  });
  $('#js-page-scroll__head a[href*="#"]').on('click', function () {
    var windowSize = $(window).width();
    var mdSize = 768;

    if (windowSize <= mdSize) {
      $('body').toggleClass('is-drawerActive');

      if ($('.c-button').attr('aria-expanded') == 'true') {
        $('.c-button').attr('aria-expanded', false);
      } else {
        $('.c-button').attr('aria-expanded', true);
      }
    }
  });
  var test = $('.c-button').attr('aria-expanded');
})();
