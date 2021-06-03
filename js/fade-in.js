"use strict";

function fadeIn() {
  $('.fade-in-trigger').each(function () {
    var elementPos = $(this).offset().top - 180;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    if (scroll >= elementPos - windowHeight) {
      $(this).addClass('fade-in');
    }
  });
}

$(window).scroll(function () {
  fadeIn();
});
