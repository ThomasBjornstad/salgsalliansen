<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Salgsalliansen AS | <?php the_title()?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">
  <?php // NOTE: LOAD FUNCTIONS.PHP ?>
  <?php wp_head(); ?>
</head>
<body>

<header>
<!-- NOTE: NAVIGATION DESKTOP -->
<div class="container-fluid navigation-bar text-xs-center hidden-sm-down">
  <a href="hjem"><img id="logoNavBar" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="" class="img-rounded center-block"></a>
  <ul class="list-unstyled">
    <li><a href="hjem" class="hvr-underline-from-left">HJEM</a></li>
    <li><a href="om-oss" class="hvr-underline-from-left">OM OSS</a></li>
    <li><a href="tjenester" class="hvr-underline-from-left">TJENESTER</a></li>
    <li><a href="karriere" class="hvr-underline-from-left">KARRIERE</a></li>
    <li><a href="kontakt" class="hvr-underline-from-left">KONTAKT</a></li>
    <li><a href="hjem#partnerSection" class="hvr-underline-from-left">PARTNERE</a></li>
  </ul>

  <?php // NOTE: SOCIAL MENU ?>
  <ul class="list-unstyled social-icons">
    <li><a href="https://www.linkedin.com/company/salgsalliansen-as" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    <li>
      <div class="vertical-line-social-menu"></div>
    </li>
    <li><a href="https://www.facebook.com/Salgsalliansen-233134277260431" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li>
      <div class="vertical-line-social-menu"></div>
    </li>
    <li><a href="https://www.instagram.com/salgsalliansen" target="_blank"><i class="fab fa-instagram"></i></a></li>
  </ul>
  <?php // NOTE: SOCIAL MENU END?>

</div>
<!-- NOTE: NAVIGATION DESKTOP END -->



<!-- NOTE: NAVIGATION MOBILE -->
<div class="container-fluid mobile-navigation-bar text-xs-center hidden-sm-up">
  <!-- NOTE: LOGO -->
  <a href="hjem"><img id="logoNavBarMob" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="" class="img-rounded center-block"></a>
  <!-- NOTE: LOGO END-->

  <!-- NOTE: BURGER ICON -->
  <a class="mobile-menu">
          <div class="line-1"></div>
          <div class="line-2"></div>
          <div class="line-3"></div>
  </a>
  <!-- NOTE: BURGER ICON END -->

<?php // NOTE: TOP HALF OF MOBILE MENU ?>
  <div class=" mobile-menu-top-curtain">
  <ul class="list-unstyled mobile-menu-list top-list">
    <li><a href="hjem">HJEM</a></li>
    <li><a href="tjenester">TJENESTER</a></li>
    <li><a href="karriere">KARRIERE</a></li>
  </ul>
  </div>
</div>
<?php // NOTE: TOP HALF OF MOBILE MENU END?>

<?php // NOTE: BOTTOM HALF OF MOBILE MENU ?>
<div class="mobile-menu-bottom-curtain text-xs-center">
  <ul class="list-unstyled mobile-menu-list bottom-list">
    <li><a href="om-oss">OM OSS</a></li>
    <li><a href="kontakt">KONTAKT</a></li>
    <li><a href="hjem#partnerSection">PARTNERE</a></li>
  </ul>
</div>
<?php // NOTE: BOTTOM HALF OF MOBILE MENU END?>

<!-- NOTE: NAVIGATION MOBILE END -->
</header>
