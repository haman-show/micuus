'use strict';

function responsiveMenu() {
  var windowWidth = $(window).width();
  if (windowWidth <= 768) {
    $('.global-header nav .menu, .global-header nav .close, .global-header nav a').on('click', function() {
      $('.global-header nav ul').stop().slideToggle();
    });
  }
}

$(function(){
  responsiveMenu();
  $(window).on('resize', function(){
    responsiveMenu();
  });

  $('a[href^="#"]').click(function() {
    var speed = 800;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $('body, html').animate({scrollTop:position}, speed, 'jswing');
    return false;
  });
  $('.asumi-navigation nav ul li').hover(function() {
    $('.parent', this).next().stop().slideToggle('fast');
  });
});
