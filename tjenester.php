<?php
/*
Template Name: Tjenester
*/
get_header();
 ?>

  <div id="servicesPageContent" style="background: url('<?php the_field('bakgrunnsbilde_tjenester'); ?>') no-repeat center fixed; background-size: cover;">

    <!-- NOTE: CLIPPED BACKGROUND -->
    <div class="about-us-first-section padding-md-top text-xs-center">
        <div class="padding-lg-top">
              <h2 id="tjenesterHeader" class="position-fixed">Tjenester</h2>
              <i class="scroll-down-icon fas fa-chevron-down fa-3x"></i>
    </div>
    </div>
    <!-- NOTE: CLIPPED BACKGROUND -->


    <!-- NOTE: FIRST SECTION -->
<div class="about-us-text text-xs-center background-color-three padding-lg-top">
      <div class="row text-xs-center padding-md-bottom">
          <h2 class="section-header padding-md-top">Vi tilbyr</h2>
    </div>

          <div id="salgText" class="row padding-lg-top padding-lg-bottom transition-fast saleTextFaded">

           <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-2">
                 <h3 class="padding-sm-bottom">Salg</h3>
                 <p class="services-text text-justify">Salg: TM, Feltsalg, Messer eller stands. B2C og B2B. Blant våre selgere finner du alltid gode kandidater med riktige holdninger, god erfaring og resultatoppnåelse.</p>
           </div>
           <div class="hidden-sm-down col-md-3 col-md-offset-1">
                 <img src="<?php the_field('bilde_salg'); ?>" alt="Salg" width="100%">
           </div>
     </div>

     <div id="rekrutteringText" class="row padding-lg-top padding-lg-bottom saleTextFaded transition-fast">
           <div class="hidden-sm-down col-md-3 col-md-offset-2">
                 <img src="<?php the_field('bilde_rekruttering'); ?>" alt="Rekruttering" width="100%">
           </div>
           <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-1">
                 <h3 class="padding-sm-bottom">Rekruttering</h3>
                 <p class="services-text text-justify">Vår Rekrutteingssjef har bygget opp avdelinger til flere store aktører innenfor både B2C og B2B: Bisnode, Viasat, A-Kraft og Get for å nevne noen. Har dere en veletablert salgsorganisasjon internt, men ønsker bistand til å finne rette mennesker? <br> <br>
                       <a href="#" style="color: #000; text-decoration: underline">Ta en uforpliktende prat med oss!</a>
                 </p>
           </div>
     </div>

     <div id="salgsutviklingText" class="row padding-lg-top padding-md-bottom saleTextFaded transition-fast">

      <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-2">
            <h3 class="padding-sm-bottom">Salgsutvikling</h3>
            <p class="services-text text-justify">Vi er stolte av vårt samarbeid med The Walk Consulting. Daglig leder i The Walk Consulting, Erik Holmen, har gjennom mange års erfaring utviklet og forenklet metoder og prosesser innenfor salgsutvikling, som har beviselig effekt. Programmet tilpasses hver enkelt kunde ut ifra ønsket målbilde. Han har bl a vært innleid til selskaper som Telenor og Schibsted Media Group.</p>
      </div>
      <div class="hidden-sm-down col-md-3 col-md-offset-1">
            <img src="<?php the_field('bilde_salgsutvikling'); ?>" alt="Salgsutvikling" width="100%">
      </div>
</div>
</div>
<!-- NOTE: FIRST SECTION END-->



<div class="clipped-separator hidden-sm-down">

</div>


<!-- NOTE: SECOND SECTION-->
<div class="container-fluid services-section clipped background-color-two">

    <div id="service-content-tjenester" class="container services-content padding-lg-top">
      <div class="row padding-lg-top text-xs-center">
          <h2 class="section-header">Salgstjenester</h2>


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
            <div class="hidden-sm-down col-md-4 col-md-offset-1">
              <img src="<?php the_field('direktesalg'); ?>" alt="" width="100%">
            </div>
            <div class="col-md-5 text-justify">
              <h4 class="text-xs-left">Direktesalg</h4>
              <p>Vi leverer salg til våre oppdragsgivere med fokus på både høy kvalitet og volum. Vi tilbyr feltsalg til private husstander, stands eller TM. Sammen med oppdragsgiver legger vi en plan på hva som egner seg best for å nå ut til relevant kundegruppe.</p>
            </div>
          </div>
          <!-- NOTE: DIREKTESALG -->

          <!-- NOTE: MESSER OG STANDS -->
          <div id="messerOgStands" class="row padding-md-top services-text-wrapper">
            <div class="hidden-sm-down col-md-4 col-md-offset-1">
              <img src="<?php the_field('messer_og_stands'); ?>" alt="" width="100%">
            </div>
            <div class="col-md-5 text-justify">
              <h4 class="text-xs-left">Messer og stands</h4>
              <p>Vi har god erfaring med messer / stands over hele landet, i flere forskjellige bransjer. Vi tilbyr enten ren bemanning eller ferdige pakker hvor vi står for alt av logistikk, planlegging og design av monter. Dette er en perfekt anledning til høyt volum på kort tid, eller generering av kvalifiserte leads til deres bedrift.</p>
            </div>
          </div>
          <!-- NOTE: MESSER OG EVENTS -->

          <!-- NOTE: AREA TARGETING -->
          <div id="areaTargeting" class="row padding-md-top services-text-wrapper">
            <div class="hidden-sm-down col-md-4 col-md-offset-1">
              <img src="<?php the_field('area_targeting'); ?>" alt="" width="100%">
            </div>
            <div class="col-md-5 text-justify">
              <h4 class="text-xs-left">Area targeting</h4>
              <p>Vårt konsept til dere som ønsker salgsaktiviteter spisset til et spesifikt geografisk område. Vi reiser med et håndplukket team og bearbeider området i løpet av en avtalt tidsperiode. Dette fungerer også utmerket sammen med forberedende tiltak, som f eks DM’s eller digital markedsføring i utvalgt område.</p>
            </div>
          </div>
          <!-- NOTE: AREA TARGETING -->

          <!-- NOTE: RENT A REP -->
          <div id="rentARep" class="row padding-md-top services-text-wrapper">
            <div class="hidden-sm-down col-md-4 col-md-offset-1">
              <img src="<?php the_field('rent_a_rep'); ?>" alt="" width="100%">
            </div>
            <div class="col-md-5 text-justify">
              <h4 class="text-xs-left">Rent a rep</h4>
              <p>Trenger du flinke promotører i forbindelse med lansering av produkter, eller markedsføring via stands med give-aways? Hos oss kan du leie dyktige medarbeidere over en avtalt periode.</p>
            </div>
          </div>
          <!-- NOTE: RENT A REP -->


          <!-- NOTE: MØTEBOOKING -->
          <div id="motebooking" class="row padding-md-top services-text-wrapper">
            <div class="hidden-sm-down col-md-4 col-md-offset-1">
              <img src="<?php the_field('motebooking'); ?>" alt="" width="100%">
            </div>
            <div class="col-md-5 text-justify">
              <h4 class="text-xs-left">Møtebooking</h4>
              <p>Salg av noen tjenester og produkter egner seg best ved å komme til avtalte møter. Ser dere etter kompetente møtebookere, ta kontakt med oss.</p>
            </div>
          </div>
          <!-- NOTE: MØTEBOOKING -->
        </div>
    </div>
  </div>
</div>
<!-- NOTE: SECOND SECTION END -->




      </div>

      <?php wp_footer(); ?>
      <?php get_footer(); ?>

  <!-- NOTE: SCROLL PROGRESS CONTAINER -->
  <div class="progressContainer">
    <div id="progress" class="progress"></div>
  </div>
