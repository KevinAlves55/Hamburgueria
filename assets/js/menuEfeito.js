// Animação para menu, ao descer a barra de rolagem

jQuery(function () {
    jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 600) {
       $("header").addClass("headerGradientt"); 
      } else {
       $("header").removeClass("headerGradientt");
       
      }
    });
});