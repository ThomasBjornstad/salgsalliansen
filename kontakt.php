<?php
/*
Template Name: Kontakt
*/
get_header();
 ?>

 <?php // NOTE: PAGE START ?>
  <div id="kontakt">

    <?php // NOTE: MAP ?>
    <div id="map">
    </div>

    <!-- NOTE: CLIPPED BACKGROUND -->
    <div class="contact-first-section padding-md-top text-xs-center">
        <div class="padding-lg-top">
              <h2 id="tjenesterHeader" class="position-fixed">Kontakt</h2>
                  <i class="scroll-down-icon fas fa-chevron-down fa-3x"></i>
        </div>
    </div>
    <!-- NOTE: CLIPPED BACKGROUND -->


  <?php // NOTE: CONTACT SECTION ?>
<div id="firstSectionContact" class="about-us-text text-xs-center background-color-three padding-lg-top">
      <div class="row text-xs-center padding-md-bottom">
          <h2 class="section-header padding-md-top">Ta gjerne kontakt med oss for en uforpliktende prat!</h2>

          <?php // NOTE: CONTACT FORM ?>
          <div class="col-xs-12 col-md-4 col-md-offset-2">
          <div id="contactForm">
              <form id="submitEmailForm" action="../takk" method="post" name="contact_form">
              <input id="firstName" class="contact-form-field" type="text" name="first_name" placeholder="Fornavn">
              <input id="LastName" class="contact-form-field" type="text" name="last_name" placeholder="Etternavn"><br>
              <input id="email" class="contact-form-field" type="text" name="email"  placeholder="E-post"><br>
              <br><textarea rows="5" name="message" placeholder="Din melding"></textarea><br>
              <input id="submitButton" id="emailSubmit" type="submit" name="submit" value="Send melding"  class="square-btn">
              </form>
            </div>
          </div>
          <?php // NOTE: CONTACT FORM END ?>

          <?php // NOTE: CONTACT INFO ?>
          <div id="contactInfo" class="col-xs-10 col-xs-offset-3 col-md-4 col-md-offset-1 padding-lg-top text-xs-left">

            <h5>Adresse</h5>
            <p>Østensjøveien 43, <br>
              0667, OSLO <br> <br>
            </p>

            <h5>Kontakt</h5>
            <p>@salgsalliansen.no <br>
               20 02 40 <br> <br></p>

            <h5>Åpningstider</h5>
            <p>Man - Fre: 09:00-18:00</p>

          </div>
          <?php // NOTE: CONTACT INFO END?>

          <?php // NOTE: SUBMIT EMAIL

            if(isset($_POST['submit'])){
                $to = "kontakt@thomasbjornstad.com";
                $from = $_POST['email'];
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $subject = "Ny melding fra nettside";
                $subject2 = "En kopi av din melding til Salgsalliansen AS";
                $message = $first_name . " " . $last_name . " skrev:" . "\n\n" . $_POST['message'];
                $message2 = "Dette er en kopi av eposten du sendte. " . "\n\n" . $_POST['message'];

                $headers = "Fra:" . $from;
                $headers2 = "Fra:" . $to;
                mail($to,$subject,$message,$headers);
                mail($from,$subject2,$message2,$headers2);
              }
              ?>
              <?php // NOTE: SUBMIT EMAIL END ?>

    </div>
</div>
<?php // NOTE: CONTACT SECTION END?>

</div>
<?php // NOTE: PAGE END ?>

      <?php wp_footer(); ?>
      <?php get_footer(); ?>


      <?php // NOTE: Load API ?>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGelOy3UtZc84BEiPozYtMDRLZ3Ldgh58&callback=initMap">
      </script>
