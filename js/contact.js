// NOTE: SCROLL ABOUT US
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
      });
});



// NOTE: CONTACT FORM VALIDATION
jQuery(document).ready(function($) {
  $("form[name='contact_form']").validate({
    rules: {
      first_name: "required",
      last_name: "required",
      email: {
        required: true,
        email: true
      },
      message: "required",
    },

    // Specify validation error messages
    messages: {
      first_name: "<i class='fas fa-exclamation' style='position: absolute; margin-left: -20px; font-size: 1.5em; line-height: 10px;'></i>",
      last_name: "<i class='fas fa-exclamation' style='position: absolute; margin-left: -20px; font-size: 1.5em; line-height: 10px;'></i>",
      email: "<i class='fas fa-exclamation' style='position: absolute; margin-left: -20px; font-size: 1.5em; line-height: 10px;'></i>",
      message: "<i class='fas fa-exclamation' style='position: absolute; margin-left: -30px; font-size: 1.5em; margin-top: -110px;'></i>"
    },
    submitHandler: function(form) {
      form.submit();
    }
  });
});

// NOTE: SMOOTH SCROLLING
jQuery(document).ready(function($) {
  $('.scroll-down-icon').click(function() {
    $('html, body').animate({
      scrollTop: $("#firstSectionContact").offset().top
    }, 700);
  });
});

// NOTE: MAP
function initMap() {
  var salgsalliansen = {lat: 59.9098147, lng: 10.812804300000039};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: salgsalliansen});
  var marker = new google.maps.Marker({position: salgsalliansen, map: map, title: 'Salgsalliansen AS'});
}
