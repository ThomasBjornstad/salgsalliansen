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

        </div>
      </div>
    </div>
    <!-- NOTE: BACKGROUND VIDEO END-->


    <!-- NOTE: FIRST SECTION   -->
    <div class="clipped background-color-one header-section">
    <div id="landingHeaders" class="container-fluid">
        <div class="container-fluid anti-sloped-text text-xs-center">
          <div class="row">
            <div class="landing-text-wrapper col-xs-12 col-md-6 col-md-offset-3">
              <h1 id="landingHeaderSm" class="landingHeader padding-lg-top"><?php the_field('liten_overskrift'); ?></h1>
              <h2 id="landingHeaderLg" class="landingHeader"><?php the_field('stor_overskrift'); ?></h2>

              <div class="row padding-sm-top padding-lg-bottom">
                <a id="landingBtn" class="square-btn hvr-sweep-to-right botto" href="om oss"><?php the_field('overskrift_link'); ?></a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- NOTE: FIRST SECTION END-->


  <div class="clipped-separator hidden-sm-down">
  </div>


  <!-- NOTE: SERVICES SECTION-->
    <div class="container-fluid services-section clipped background-color-two">

        <div class="container services-content padding-lg-top">
          <div class="row padding-lg-top text-xs-center">
              <h2 class="section-header">Tjenester</h2>

              <!-- NOTE: SERVICES MENU-->
              <ul class="list-unstyled services-list padding-lg-top">
                <li><a class="services-list-item services-list-item-active" data-item="direktesalg">DIREKTESALG</a></li>
                <li><a class="services-list-item" data-item="messerOgStands">MESSER OG STANDS</a></li>
                <li><a class="services-list-item" data-item="areaTargeting">AREA TARGETING</a></li>
                <li><a class="services-list-item" data-item="rentARep">RENT A REP</a></li>
                <li><a class="services-list-item" data-item="motebooking">MØTEBOOKING</a></li>
              </ul>
              <!-- NOTE: SERVICES MENU END-->

              <div class="blur-effect">

              <!-- NOTE: DIREKTESALG -->
              <div id="direktesalg" class="row padding-md-top services-text-wrapper services-text-wrapper-active">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php the_field('bilde_direktesalg') ?>" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Direktesalg</h4>
                  <p><?php the_field('direktesalg'); ?></p>
                </div>
              </div>
              <!-- NOTE: DIREKTESALG -->

              <!-- NOTE: MESSER OG STANDS -->
              <div id="messerOgStands" class="row padding-md-top services-text-wrapper">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php the_field('bilde_messer_og_stands') ?>" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Messer og stands</h4>
                  <p><?php the_field('messer_og_stands') ?></p>
                </div>
              </div>
              <!-- NOTE: MESSER OG EVENTS -->

              <!-- NOTE: AREA TARGETING -->
              <div id="areaTargeting" class="row padding-md-top services-text-wrapper">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php the_field('bilde_area_targeting') ?>" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Area targeting</h4>
                  <p><?php the_field('area_targeting') ?></p>
                </div>
              </div>
              <!-- NOTE: AREA TARGETING -->

              <!-- NOTE: RENT A REP -->
              <div id="rentARep" class="row padding-md-top services-text-wrapper">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php the_field('bilde_rent_a_rep') ?>" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Rent a rep</h4>
                  <p><?php the_field('rent_a_rep') ?></p>
                </div>
              </div>
              <!-- NOTE: RENT A REP -->


              <!-- NOTE: MØTEBOOKING -->
              <div id="motebooking" class="row padding-md-top services-text-wrapper">
                <div class="hidden-sm-down col-md-3 col-md-offset-2">
                  <img src="<?php the_field('bilde_motebooking') ?>" alt="" width="100%">
                </div>
                <div class="col-xs-12 col-md-5 text-justify">
                  <h4 class="text-xs-left">Møtebooking</h4>
                  <p><?php the_field('motebooking') ?></p>
                </div>
              </div>
              <!-- NOTE: MØTEBOOKING -->

            </div>
        </div>
        <div class="row padding-md-top text-xs-center">
             <a id="tjenesterBtn" class="square-btn hvr-sweep-to-right botto" href="tjenester">Alle våre tjenester</a>
        </div>
      </div>
  </div>
  <!-- NOTE: SERVICES SECTION END -->


  <!-- NOTE: CAREER SECTION -->
  <div id="careerSection" class="container-fluid
   background-color-one">
      <div class="padding-md-top career-content">
        <div class="row padding-md-top text-xs-center">
          <h2 class="section-header">Karriere</h2>
        </div>
          <div class="col-xs-12 col-md-4 col-md-offset-2 padding-lg-top">

            <p class="text-justify"><br>
            <?php the_field('karriere') ?> <br><br></p>
            <div class="row text-xs-center">
              <a id="openPositions" class="square-btn hvr-sweep-to-right" href="https://www.finn.no/job/fulltime/search.html?orgId=8080464" target="_blank">Ledige stillinger</a>
              <a id="openPositions" class="square-btn hvr-sweep-to-right" href="mailto:post@salgsalliansen.no">Send åpen søknad</a>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 padding-sm-top">
          <div class="padding-lg-top hidden-sm-down">
          </div>
          <video id="careerVideo" src="<?php the_field('video_karriere') ?>" muted controls width="100%" poster="<?php echo get_template_directory_uri();?>/img/poster-karriere.png">
          </video>
        </div>
      </div>
    </div>
    <!-- NOTE: CAREER SECTION END-->

      <!-- NOTE: PARTNER ICONS -->
      <div id="partnerSection" class="container-fluid
       background-color-two">
          <div class="container padding-md-top career-content">
            <div class="row padding-md-top text-xs-center">
              <h2 class="section-header">Partnere</h2>
            </div>
            <div class="row text-xs-center">
              <div class="col-xs-12 padding-lg-top text-xs-center">

                <?php
                $partner_1 = get_field('partner_1');
                if( !empty($partner_1) ): ?>
                <a class="partner-icons" href="<?php the_field('partner_1_link'); ?>" target="_blank">
	               <img src="<?php echo $partner_1['url']; ?>" alt="<?php echo $partner_1['alt']; ?>" height="50px"/>
                 </a>
               <?php endif; ?>

               <?php
               $partner_2 = get_field('partner_2');
               if( !empty($partner_2) ): ?>
               <a class="partner-icons" href="<?php the_field('partner_2_link'); ?>" target="_blank">
               <img src="<?php echo $partner_2['url']; ?>" alt="<?php echo $partner_2['alt']; ?>" height="50px"/>
                </a>
              <?php endif; ?>

              <?php
              $partner_3 = get_field('partner_3');
              if( !empty($partner_3) ): ?>
              <a class="partner-icons" href="<?php the_field('partner_3_link'); ?>" target="_blank">
               <img src="<?php echo $partner_3['url']; ?>" alt="<?php echo $partner_3['alt']; ?>" height="50px"/>
               </a>
             <?php endif; ?>

             <?php
             $partner_4 = get_field('partner_4');
             if( !empty($partner_4) ): ?>
             <a class="partner-icons" href="<?php the_field('partner_4_link'); ?>" target="_blank">
             <img src="<?php echo $partner_4['url']; ?>" alt="<?php echo $partner_4['alt']; ?>" height="50px"/>
              </a>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
        <!-- NOTE: PARTNER ICONS END-->


        <?php wp_footer(); ?>
        <?php get_footer(); ?>


  <!-- NOTE: SCROLL PROGRESS CONTAINER -->
  <div class="progressContainer">
    <div id="progress" class="progress"></div>
</div>
  </div>
