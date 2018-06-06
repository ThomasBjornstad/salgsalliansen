

// NOTE: MOBILE MENU
jQuery(document).ready(function( $ ) {
$(".mobile-menu").click(function(){
  $(".mobile-menu-top-curtain").toggleClass("mobile-menu-top-curtain-visible");
  $(".mobile-menu-bottom-curtain").toggleClass("mobile-menu-bottom-curtain-visible");
  if($('.mobile-menu-bottom-curtain').hasClass("mobile-menu-ios-fix")){
      $(".mobile-menu-bottom-curtain").removeClass("mobile-menu-ios-fix");
  } else {
    setTimeout(function() {
      $(".mobile-menu-bottom-curtain").addClass("mobile-menu-ios-fix");
    }, 600);
  }
  $(".line-1").toggleClass("rotate-clock");
  $(".line-2").toggleClass("rotate-out");
  $(".line-3").toggleClass("rotate-anti-clock");
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


// NOTE: GLOBAL VIDEO VARIABLE
var video = document.getElementById('desktopVideo');

// NOTE: MUTE BUTTON

document.getElementById('volumeOn').addEventListener('click', function() {
      video.muted = !video.muted;
      $("#volumeOn").toggleClass("opacity-full");
});

// NOTE: VIDEO CONTROLS
jQuery(document).ready(function( $ ) {
$(".background-video-wrapper").hover(function() {
      $("#pauseVideo").toggleClass("opacity-half");
      $("#volumeOn").toggleClass("opacity-half");
      $(".hide-content").toggleClass("opacity-full");
    });
});



// NOTE: VIDEO PAUSE BUTTON

jQuery(document).ready(function( $ ) {
$("#pauseVideo").click(function() {
      if (video.paused) {
            video.play();
            $("#pauseVideo").removeClass("fa-play-circle");
            $("#pauseVideo").addClass("fa-pause-circle");
      } else {
            video.pause();
            $("#pauseVideo").removeClass("fa-pause-circle");
            $("#pauseVideo").addClass("fa-play-circle");
      }
    });
});

var careerVideo = document.getElementById('careerVideo');

// NOTE: SCROLL INDEX
jQuery(document).ready(function($) {

      // NOTE: GRADED VIDEO
      $(window).scroll(function() {
            if ($("#home").scrollTop() > 700) {
                  $(".parallax-window").addClass("gradient");
            } else {
                  $(".parallax-window").removeClass("gradient");
            }
            if ($(document).scrollTop() > 550) {
                  $(".header-section").addClass("header-section-out");
            } else {
                  $(".header-section").removeClass("header-section-out");
            }
            if ($(document).scrollTop() > 400) {
                  $(".services-content").addClass("in-focus");
            } else {
                  $(".services-content").removeClass("in-focus");
            }
            if($(document).scrollTop() > 1100 ) {
                  $(".career-content").addClass("in-focus");
            } else {
              $(".career-content").removeClass("in-focus");
            }
      });
});



jQuery("#").click(function($){
            $("#landingPageContent").css('filter', 'blur(5px)');
            setTimeout(function() {
                  window.location.assign("om-oss");
                  $("#landingPageContent").css('filter', 'blur(0px)');
            }, 500);
});

jQuery("#").click(function($){
            $("#landingPageContent").css('filter', 'blur(5px)');
            setTimeout(function() {
                  window.location.assign("tjenester");
                  $("#landingPageContent").css('filter', 'blur(0px)');
            }, 500);
});



function updateProgress(num1, num2){
  var percent = Math.ceil( num1 / num2 * 100 ) + '%';
  document.getElementById('progress').style.width = percent;
}

window.addEventListener('scroll', function(){
  var top = window.scrollY;
  var height = document.body.getBoundingClientRect().height - window.innerHeight;
  updateProgress(top, height);
});
