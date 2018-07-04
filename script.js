'use strict';

$(function(){
  $('.global-navigation li').hover(function() {
    $('ul:not(:animated)', this).slideDown('fast');
  }, function() {
    $('ul.child', this).slideUp('fast');
  });
});
