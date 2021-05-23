"use strict";

// $('#js-page-scroll__head a[href*="#"]').click(function() {
//   const elementHash = $(this).attr("href");
//   const pos = $(elementHash).offset().top;
//   $("body, html").animate({ scrollTop: pos }, 500);
//   return false;
// });
// $('#js-page-scroll__foot a[href*="#"]').click(function() {
//   const elementHash = $(this).attr("href");
//   const pos = $(elementHash).offset().top;
//   $("body, html").animate({ scrollTop: pos }, 500);
//   return false;
// });
var pagescroll = function pagescroll() {
  var elementHash = $(this).attr('href');
  var pos = $(elementHash).offset().top;
  $('body, html').animate({
    scrollTop: pos
  }, 500);
  return false;
};

$('#js-page-scroll__head a[href*="#"]').on('click', pagescroll);
$('#js-page-scroll__foot a[href*="#"]').on('click', pagescroll);
