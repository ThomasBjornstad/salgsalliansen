// NOTE: SCROLL ABOUT US
jQuery(document).ready(function($){
      $(window).scroll(function(){
            if ($(document).scrollTop() > 160) {
                  $("#omOssHeader").removeClass("position-fixed");
                  $("#omOssHeader").addClass("position-static");
                  $('.scroll-down-icon').fadeOut(300);
            } else {
                  $("#omOssHeader").addClass("position-fixed");
                  $("#omOssHeader").removeClass("position-static");
                  $('.scroll-down-icon').fadeIn(300);
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
