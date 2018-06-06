<?php
/*
Template Name: Hjem
*/


get_header() ?>


    <div id="landingPageContent">

    <!-- NOTE: BACKGROUND VIDEO -->
    <div class="background-video-wrapper text-xs-center">
      <div class="parallax-window header-image" data-parallax="scroll">
        <div class="parallax-slider background-video">
          <i id="pauseVideo" class="fas fa-pause-circle fa-3x video-btn hidden-sm-down"></i>
          <i id="volumeOn" class="fas fa-volume-up fa-2x hidden-sm-down"></i>
          <video id="desktopVideo" class="vid-desktop hidden-sm-down" autoplay muted loop src="<?php the_field('bakgrunnsvideo'); ?>"></video>
                      <img src="<?php echo get_template_directory_uri();?>/img/mobil.jpg" alt="" height="600px" style="margin-left: -200px;" class="hidden-md-up">
        </div>
      </div>
    </div>
    <!-- NOTE: BACKGROUND VIDEO -->







    <!-- NOTE: FIRST LINE -->
    <div class="clipped background-color-one header-section">

    <div id="landingHeaders" class="container-fluid">
        <div class="container-fluid anti-sloped-text text-xs-center">
          <div class="row">
            <div class="landing-text-wrapper col-xs-12 col-md-6 col-md-offset-3">
              <h1 id="landingHeaderSm" class="landingHeader padding-lg-top"><?php the_field('liten_overskrift'); ?></h1>
              <h2 id="landingHeaderLg" class="landingHeader"><?php the_field('stor_overskrift'); ?></h2>

              <div class="row padding-sm-top padding-lg-bottom">
                <a id="landingBtn" class="square-btn hvr-sweep-to-right botto"><?php the_field('overskrift_link'); ?></a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- NOTE: FIRST LINE -->


  <div class="clipped-separator hidden-sm-down">

  </div>



    <div class="container-fluid services-section clipped background-color-two">

        <div class="container services-content padding-lg-top">
          <div class="row padding-lg-top text-xs-center">
              <h2 class="section-header"><?php the_field('overskrift_forste_avsnitt'); ?></h2>


              <ul class="list-unstyled services-list padding-lg-top">
                <li><a class="services-list-item services-list-item-active" data-item="direktesalg">DIREKTESALG</a></li>
                <li><a class="services-list-item" data-item="messerOgStands">MESSER OG STANDS</a></li>
                <li><a class="services-list-item" data-item="areaTargeting">AREA TARGETING</a></li>
                <li><a class="services-list-item" data-item="rentARep">RENT A REP</a></li>
                <li><a class="services-list-item" data-item="motebooking">MØTEBOOKING</a></li>
              </ul>

              <div class="blur-effect">

              <!-- NOTE: DIREKTESALG -->
              <div id="direktesalg" class="row padding-md-top services-text-wrapper services-text-wrapper-active">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php echo get_template_directory_uri();?>/img/direktesalg.jpeg" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Direktesalg</h4>
                  <p>Vi leverer salg til våre oppdragsgivere med fokus på både høy kvalitet og volum. Vi tilbyr feltsalg til private husstander, stands eller TM. Sammen med oppdragsgiver legger vi en plan på hva som egner seg best for å nå ut til relevant kundegruppe.</p>
                </div>
              </div>
              <!-- NOTE: DIREKTESALG -->

              <!-- NOTE: MESSER OG STANDS -->
              <div id="messerOgStands" class="row padding-md-top services-text-wrapper">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php echo get_template_directory_uri();?>/img/messe.jpeg" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Messer og stands</h4>
                  <p>Vi har god erfaring med messer / stands over hele landet, i flere forskjellige bransjer. Vi tilbyr enten ren bemanning eller ferdige pakker hvor vi står for alt av logistikk, planlegging og design av monter. Dette er en perfekt anledning til høyt volum på kort tid, eller generering av kvalifiserte leads til deres bedrift.</p>
                </div>
              </div>
              <!-- NOTE: MESSER OG EVENTS -->

              <!-- NOTE: AREA TARGETING -->
              <div id="areaTargeting" class="row padding-md-top services-text-wrapper">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php echo get_template_directory_uri();?>/img/area-targeting.jpeg" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Area targeting</h4>
                  <p>Vårt konsept til dere som ønsker salgsaktiviteter spisset til et spesifikt geografisk område. Vi reiser med et håndplukket team og bearbeider området i løpet av en avtalt tidsperiode. Dette fungerer også utmerket sammen med forberedende tiltak, som f eks DM’s eller digital markedsføring i utvalgt område.</p>
                </div>
              </div>
              <!-- NOTE: AREA TARGETING -->

              <!-- NOTE: RENT A REP -->
              <div id="rentARep" class="row padding-md-top services-text-wrapper">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php echo get_template_directory_uri();?>/img/rent-a-rep.jpeg" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Rent a rep</h4>
                  <p>Trenger du flinke promotører i forbindelse med lansering av produkter, eller markedsføring via stands med give-aways? Hos oss kan du leie dyktige medarbeidere over en avtalt periode.</p>
                </div>
              </div>
              <!-- NOTE: RENT A REP -->


              <!-- NOTE: MØTEBOOKING -->
              <div id="motebooking" class="row padding-md-top services-text-wrapper">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php echo get_template_directory_uri();?>/img/motebooking.jpeg" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Møtebooking</h4>
                  <p>Salg av noen tjenester og produkter egner seg best ved å komme til avtalte møter. Ser dere etter kompetente møtebookere, ta kontakt med oss.</p>
                </div>
              </div>
              <!-- NOTE: MØTEBOOKING -->
            </div>


        </div>
        <div class="row padding-md-top text-xs-center">
             <a id="tjenesterBtn" class="square-btn hvr-sweep-to-right botto">Alle våre tjenester</a>
        </div>
      </div>
  </div>
  <!-- NOTE: FIRST LINE -->






  <!-- NOTE: FIRST LINE -->
  <div id="careerSection" class="container-fluid
   background-color-one">
      <div class="padding-md-top career-content">
        <div class="row padding-md-top text-xs-center">
          <h2 class="section-header">Karriere</h2>
        </div>
        <div class="col-xs-12 col-md-4 col-md-offset-2 padding-lg-top">

          <p class="text-justify"><br>
            Vi skreddersyr opplæring og kursing til våre ansatte. Vi foretrekker å rekruttere riktige mennesker internt til våre lederroller, og har mange års erfaring med dette. Er du et riktig menneske for oss? Da sørger vi for at du får en individuelt tilpasset
            oppfølging som gjenspeiler dine egenskaper og karrieremål. <br><br></p>
            <div class="row text-xs-center">
              <a id="openPositions" class="square-btn hvr-sweep-to-right" href="https://www.finn.no/job/fulltime/search.html?orgId=8080464" target="_blank">Ledige stillinger</a>
              <a id="openPositions" class="square-btn hvr-sweep-to-right" href="mailto:post@salgsalliansen.no">Send åpen søknad</a>
            </div>
        </div>
        <div class="col-xs-12 col-md-4 padding-sm-top">
          <div class="padding-lg-top hidden-sm-down">

          </div>
          <video id="careerVideo" src="<?php echo get_template_directory_uri();?>/img/stilling-video.mp4" muted controls width="100%" poster="<?php echo get_template_directory_uri();?>/img/poster-karriere.png">
          </video>
        </div>
      </div>
    </div>



      <!-- NOTE: FIRST LINE -->
      <div id="partnerSection" class="container-fluid
       background-color-two">
          <div class="container padding-md-top career-content">
            <div class="row padding-md-top text-xs-center">
              <h2 class="section-header">Partnere</h2>
            </div>
            <div class="row">
              <div class="col-xs-6 col-xs-offset-3 padding-lg-top">
                    <a class="partner-icons" href="http://www.appsecurity.no"><img src="<?php echo get_template_directory_uri();?>/img/partnere/appsecurity.png" alt="AppSecurity" height="60px" style="padding-right: 20px"></a>
                    <a class="partner-icons" href="http://www.energisalgnorge.no"><img src="<?php echo get_template_directory_uri();?>/img/partnere/energisalg.jpg" alt="EnergiSalg" height="60px"></a>
              </div>
            </div>
          </div>
        </div>

        <?php wp_footer(); ?>
        <?php get_footer(); ?>


  <!-- NOTE: SCROLL PROGRESS CONTAINER -->
  <div class="progressContainer">
    <div id="progress" class="progress"></div>
</div>
  </div>
