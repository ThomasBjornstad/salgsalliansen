<?php
/*
Template Name: Om oss
*/
get_header();
 ?>

  <div id="aboutUsContent" style="background: url('<?php the_field('bakgrunnsbilde_om_oss') ?>') no-repeat center fixed; background-size: cover;">

    <!-- NOTE: CLIPPED BACKGROUND -->
    <div class="about-us-first-section padding-md-top text-xs-center">
        <div class="padding-lg-top">
             <h2 id="omOssHeader" class="position-fixed">Om oss</h2>
             <i class="scroll-down-icon fas fa-chevron-down fa-3x"></i>
        </div>
    </div>
    <!-- NOTE: CLIPPED BACKGROUND -->

    <!-- NOTE: FIRST SECTION -->
    <div class="about-us-text text-xs-center background-color-three padding-lg-top">
      <div class="row text-xs-center">
          <h2 class="section-header padding-md-top"><?php the_field('overskrift_setning'); ?></h2>
          <div class="row padding-lg-top padding-md-bottom">
           <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">
             <p class="text-justify" style="font-size: 1.1em;"><?php the_field('om_oss_tekst'); ?></p>
           </div>
         </div>
       </div>
     </div>
<!-- NOTE: FIRST SECTION -->


<!-- NOTE: SECOND SECTION -->
<div class="container-fluid background-color-one">
  <div class="container">
      <div class="row padding-lg-top text-xs-center">
            <h2 class="section-header">Kvalitet</h2>
                <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 padding-lg-top">
                  <p style="font-size: 1.2em"><?php the_field('kvalitet_setning_1'); ?></p>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 padding-lg-top">
                  <p style="font-size: 1.2em"><?php the_field('kvalitet_setning_2'); ?></p>
                </div>
                <div class="col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-0 padding-lg-top">
                  <p style="font-size: 1.2em"><?php the_field('kvalitet_setning_3'); ?></p>
            </div>
          </div>
    </div>
</div>
<!-- NOTE: SECOND SECTION -->


  <!-- NOTE: THIRD SECTION -->
  <div class="container-fluid
   background-color-two team-section">
      <div class="container padding-sm-top">
        <div class="row padding-lg-top text-xs-center padding-lg-bottom">
          <h2 class="section-header">Team</h2>
        </div>

        <!-- NOTE: DANIEL -->
        <div class="row padding-lg-top padding-lg-bottom text-xs-center text-md-left">
        <div class="col-xs-12 col-md-4 col-md-offset-2">
          <img class="ansatte-img" src="<?php the_field('ansatt_1_bilde'); ?>" alt="" width="60%">
        </div>
        <div class="col-xs-12 col-md-4">
            <h2 class="team-member-header "><?php the_field('ansatt_1_navn'); ?></h2>
            <h5 class="team-member-pos"><?php the_field('ansatt_1_stilling'); ?></h5>
            <a class="team-member-social" href="<?php the_field('ansatt_1_link'); ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
          </div>
          </div>
        <!-- NOTE: DANIEL -->

        <!-- NOTE: ARE -->
        <div class="row padding-lg-top padding-lg-bottom text-xs-center text-md-left">
        <div class="col-xs-12 col-md-4 col-md-offset-2">
          <img class="ansatte-img" src="<?php the_field('ansatt_2_bilde'); ?>" alt="" width="60%">
        </div>
        <div class="col-xs-12 col-md-4">
            <h2 class="team-member-header"><?php the_field('ansatt_2_navn'); ?></h2>
            <h5 class="team-member-pos"><?php the_field('ansatt_2_stilling'); ?></h5>
            <a class="team-member-social" href="<?php the_field('ansatt_2_link'); ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
          </div>
          </div>
        <!-- NOTE: ARE -->


        <!-- NOTE: JOHAN -->
        <div class="row padding-lg-top padding-lg-bottom text-xs-center text-md-left">
        <div class="col-xs-12 col-md-4 col-md-offset-2">
          <img class="ansatte-img" src="<?php the_field('ansatt_3_bilde'); ?>" alt="" width="60%">
        </div>
        <div class="col-xs-12 col-md-4">
            <h2 class="team-member-header"><?php the_field('ansatt_3_navn'); ?></h2>
            <h5 class="team-member-pos"><?php the_field('ansatt_3_stilling'); ?></h5>
            <a class="team-member-social" href="<?php the_field('ansatt_3_link'); ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
          </div>
          </div>
        <!-- NOTE: JOHAN -->

        <!-- NOTE: PATRICK -->
        <div class="row padding-lg-top padding-lg-bottom text-xs-center text-md-left">
        <div class="col-xs-12 col-md-4 col-md-offset-2">
          <img class="ansatte-img" src="<?php the_field('ansatt_4_bilde') ?>" alt="" width="60%">
        </div>
        <div class="col-xs-12 col-md-4">
            <h2 class="team-member-header"><?php the_field('ansatt_4_navn'); ?></h2>
            <h5 class="team-member-pos"><?php the_field('ansatt_4_stilling'); ?></h5>
            <a class="team-member-social" href="<?php the_field('ansatt_4_link'); ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
          </div>
          </div>
        <!-- NOTE: PATRICK -->

        <!-- NOTE: JOAKIM -->
        <div class="row padding-lg-top padding-lg-bottom text-xs-center text-md-left">
        <div class="col-xs-12 col-md-4 col-md-offset-2">
          <img class="ansatte-img" src="<?php the_field('ansatt_5_bilde'); ?>" alt="" width="60%">
        </div>
        <div class="col-xs-12 col-md-4">
            <h2 class="team-member-header"><?php the_field('ansatt_5_navn'); ?></h2>
            <h5 class="team-member-pos"><?php the_field('ansatt_5_stilling'); ?></h5>
            <a class="team-member-social" href="<?php the_field('ansatt_5_link'); ?>"><i class="fab fa-linkedin-in fa-2x"></i></a>
          </div>
          </div>
        <!-- NOTE: JOAKIM -->
      </div>
    </div>
    <!-- NOTE: THIRD SECTION END -->

      </div>

          <?php wp_footer(); ?>
          <?php get_footer(); ?>
