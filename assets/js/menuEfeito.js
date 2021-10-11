// Animação para menu, ao descer a barra de rolagem

"use strict"

jQuery(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 200) {
       $('header').addClass('headerGradientt'); 
      } else {
       $('header').removeClass('headerGradientt');
      }
    });
});