<?php
/*
Template Name: Karriere
*/


get_header() ?>

  <div class="karriere" style="background: url('<?php the_field('bakgrunnsbilde_karriere'); ?>') no-repeat center fixed; background-size: cover;">


    <!-- NOTE: CLIPPED BACKGROUND -->
    <div class="about-us-first-section padding-md-top text-xs-center">
        <div class="padding-lg-top">
             <h2 id="omOssHeader" class="position-fixed">Karriere</h2>
             <i class="scroll-down-icon fas fa-chevron-down fa-3x"></i>
    </div>
    </div>
    <!-- NOTE: CLIPPED BACKGROUND -->


    <!-- NOTE: FIRST SECTION -->
<div class="about-us-text text-xs-center background-color-three padding-lg-top">
      <div class="row text-xs-center">
          <h2 class="section-header padding-md-top">Åpen for ny jobb?</h2>
          <div class="row padding-lg-top padding-md-bottom">
           <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
             <p class="text-justify" style="font-size: 1.1em;">Vi skreddersyr opplæring og kursing til våre ansatte. Vi foretrekker å rekruttere riktige mennesker internt til våre lederroller, og har mange års erfaring med dette. Er du et riktig menneske for oss? Da sørger vi for at du får en individuelt tilpasset oppfølging som gjenspeiler dine egenskaper og karrieremål.</p>
           </div>
         </div>
   </div>
</div>
<!-- NOTE: FIRST SECTION END-->

<!-- NOTE: SECOND SECTION -->
<div class="container-fluid background-color-one">
      <div class="row padding-lg-top text-xs-center">
            <h2 class="section-header padding-md-top">Ledige stillinger</h2>
            <div class="row padding-md-top">
                  <div class="col-xs-12 col-md-6 col-md-offset-3">
                        <p>Vi rekrutterer selgere og ledere opp mot noen av Norges mest spennende produkter, både heltid- og deltidsstillinger. Se våre ledige stillinger eller la oss kontakte deg.</p>
                        <div class="row text-xs-center">
                          <a id="openPositions" class="square-btn hvr-sweep-to-right" href="https://www.finn.no/job/fulltime/search.html?orgId=8080464" target="_blank">Ledige stillinger</a>
                          <a id="openPositions" class="square-btn hvr-sweep-to-right" href="kontakt#firstSectionContact">Kontakt meg</a>
                        </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- NOTE: SECOND SECTION END -->

</div>


<?php wp_footer(); ?>
<?php get_footer(); ?>
