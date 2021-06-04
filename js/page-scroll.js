"use strict";

let pagescroll = function pagescroll() {
  let elementHash = $(this).attr('href');
  let pos = $(elementHash).offset().top;
  $('body, html').animate({
    scrollTop: pos
  }, 500);
  return false;
};

$('#js-page-scroll__head a[href*="#"]').on('click', pagescroll);
$('#js-page-scroll__foot a[href*="#"]').on('click', pagescroll);
