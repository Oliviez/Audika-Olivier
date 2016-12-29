$(document).ready( function() {

    // Scroll de la flèche vers la première section
    // Définition de la taille de la nav
    var navHeight = 88;

    $("#scroll-to-about").click(function(){
      $("html, body").animate({scrollTop: $(".about").offset().top - navHeight}, 400);
    });
  });
