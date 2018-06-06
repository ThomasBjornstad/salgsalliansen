// NOTE: SCROLL SERVICES
jQuery(document).ready(function($){
      $(window).scroll(function(){
            if ($(document).scrollTop() > 160) {
                  $("#tjenesterHeader").removeClass("position-fixed");
                  $("#tjenesterHeader").addClass("position-static");
                  $('.scroll-down-icon').fadeOut(300);
            } else {
                  $("#tjenesterHeader").addClass("position-fixed");
                  $("#tjenesterHeader").removeClass("position-static");
                  $('.scroll-down-icon').fadeIn(300);
            }
            // NOTE: SALG
            if ($(document).scrollTop() > 300) {
                  $("#salgText").removeClass("saleTextFaded");
            } else {
                  $("#salgText").addClass("saleTextFaded");
            }
            // NOTE: REKRUTTERING
            if ($(document).scrollTop() > 700) {
                  $("#salgText").addClass("saleTextFadedTwo");
                  $("#rekrutteringText").removeClass("saleTextFaded");
            } else {
                  $("#salgText").removeClass("saleTextFadedTwo");
                  $("#rekrutteringText").addClass("saleTextFaded");
            }
            // NOTE: SALGSUTVIKLING
            if ($(document).scrollTop() > 1200) {
                  $("#rekrutteringText").addClass("saleTextFadedTwo");
                  $("#salgsutviklingText").removeClass("saleTextFaded");
            } else {
                  $("#rekrutteringText").removeClass("saleTextFadedTwo");
                  $("#salgsutviklingText").addClass("saleTextFaded");
            }
            if ($(document).scrollTop() > 1500) {
                  $("#service-content-tjenester").addClass("in-focus");
            } else {
                  $("#services-content-tjenester").removeClass("in-focus");
            }
      });
});


// NOTE: SMOOTH SCROLLING
jQuery(document).ready(function($) {
  $('.scroll-down-icon').click(function() {
    $('html, body').animate({
      scrollTop: $(".about-us-text").offset().top
    }, 700);
  });
});


// NOTE: SERVICES MENU
jQuery(document).ready(function ($) {
    $('.services-list-item').click(function () {
        $(".blur-effect").css("opacity", "0");
        setTimeout(function() {
          $("#direktesalg, #messerOgStands, #areaTargeting, #rentARep, #motebooking").removeClass("services-text-wrapper-active");

        }, 200);

        var $clicked = $(this)
        var $textWrapper = "#" + $clicked.attr('data-item');
        $('.services-list-item').each(function(){
            var $menu = $(this);
            if (!$menu.is($clicked))
            {
                $menu.removeClass('services-list-item-active');
                $(".services-list").css("padding-bottom", '3px');
            }
        });

        setTimeout(function() {
          $(".blur-effect").css("opacity", "1");
          $($textWrapper).addClass("services-text-wrapper-active");
          $clicked.addClass('services-list-item-active');
        }, 200);
    });
});
