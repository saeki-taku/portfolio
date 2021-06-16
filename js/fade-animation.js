"use strict";

function fadeDown() {
  $(".js-fade-down-trigger").each(function() {
    var elementPos = $(this).offset().top + 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();

    if (scroll >= elementPos - windowHeight) {
      $(this).addClass("fade-down");
    }
  });
}

function workFadeAnimation() {
  let width = $(window).width();
  let fadeUp = "c-fade-up__item";

  if (width > 768) {
    let time = 0.2;
    let value = time;

    $(".delayScroll").each(function() { // PC画面
      const parent = this;
      let elementPos = $(this).offset().top;
      let scroll = $(window).scrollTop();
      let windowHeight = $(window).height();
      let childs = $(this).children();

      if (scroll >= elementPos - windowHeight && !$(parent).hasClass("play")) {
        $(childs).each(function() {
          if (!$(this).hasClass("c-fade-up__item")) {
            $(parent).addClass("paly");
            $(this).css("animation-delay", value + "s");
            $(this).addClass(fadeUp);
            value = value + time;

            let index = $(childs).index(this);
            if (childs.length - 1 == index) {
              $(parent).removeClass("play");
            }
          }
        });
      }
    });
  } else {
    fadeDown(); // SP画面
  }
}

$(window).on('load scroll', function() {
  fadeDown();
  workFadeAnimation();
});
