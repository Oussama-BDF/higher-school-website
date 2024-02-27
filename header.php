<?php
/**
 * The header for EST-SB Theme.
 * 
 * Contains the section <head> and the header template
 * 
 * @package EST-SB
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
      <?php wp_title('-', 'true', 'right') ?>
      <?php bloginfo('name'); ?>
  </title>
    <link rel="pingback" href="<?php bloginfo('pingback_url')?>">
    <?php wp_head(); ?>
</head>

<body>
  <!-- Start Preload Bar -->
  <!-- <div class="preload-bar d-flex justify-content-center align-items-center">
    <div class="preload-container" style="position: relative">
      <div class="circle"> </div>
      <img src="<?php echo get_template_directory_uri()?>/assets/icon/loding-img.svg" alt="" style="width:80px">
    </div>
  </div> -->
  <!-- End Preload Bar -->

  <!-- Start Top Nav Bar -->
  <nav class="top-nav navbar navbar-expand-lg bg-body-tertiary navbar-light">
    <div class="container container-fluid">
      <div class="collapse navbar-collapse" id="">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item top-item">
            <span class="nav-link"><i class="mi10 fa-regular fa-clock"></i><?php echo date_i18n('l, F j, Y', current_time('timestamp')) ?></span>
          </li>
          <li class="nav-item top-item">
            <a class="nav-link" aria-current="page" href="#">(AMO) Assurance Maladie Obligatoire</a>
          </li>
          <li class="nav-item top-item">
            <a class="nav-link" aria-current="page" href="#">Emploi du Temps</a>
          </li>
        </ul>
        <ul class="social-media-menu navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row justify-content-center m-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <i class="mi10 fa-brands fa-linkedin-in"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <i class="mi10 fa-brands fa-instagram"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="https://web.facebook.com/profile.php?id=100067832741526"  target="_blank">
              <i class="mi10 fa-brands fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <i class="mi10 fa-brands fa-x-twitter"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Top Nav Bar -->

  <!-- Start Middle Nav Bar -->
  <div class="mid-nav navbar navbar-expand-lg bg-body-tertiary navbar-light">
    <div class="container container-fluid">
        <div class="">
          <a class="" href="<?php home_url();?>" title="Home" id="site-name-square">
            <img class="nav-link img-fluid" style="width: 285px" src="<?php echo get_template_directory_uri()?>/assets/icon/est-ucd-black.svg" class="img-responsive" alt="">
          </a>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 flex-row justify-content-between">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" aria-current="page" href="mailto:estsb.ucd.ac.ma">
              <i class="link-img mi10 fa-solid fa-envelope"></i>
              <div class="link-text">
                  <span>EMAIL :</span>
                  <span class="">estsb@gmail.com</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" aria-current="page" href="tel:0606060606">
              <i class="link-img mi10 fa-solid fa-phone"></i>
              <div class="link-text">
                  <span>NOUS CONTACTER :</span>
                  <span class="">+2126 06 06 06 06</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center" aria-current="page" target="_blank" href="https://maps.app.goo.gl/x6fhTYB5cQ3yzkNU7">
              <i class="link-img mi10 fa-solid fa-location-dot"></i>
              <div class="link-text">
                  <span>EMPLACEMENT :</span>
                  <span class="">EST Sidi Bennour</span>
              </div>
            </a>
          </li>
        </ul>
    </div>
  </div>
  <!-- End Middle Nav Bar -->

  <!-- Start Bottom Nav Bar -->
  <nav class="bottom-nav navbar navbar-expand-lg sticky-md-top bg-body-tertiary navbar-light">
    <div class="container container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img class="navbar-toggler-icon" src="<?php echo get_template_directory_uri()?>/assets/icon/bars.svg" alt="">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php add_header_menu(); ?>
      </div>
      <form class="d-flex search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <button class="border-0 btn btn-outline-success collapsed" style="margin-inline: 5px;" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
          <i class="search-img fa-solid fa-magnifying-glass" style="display: none"></i>
          <i class="x-img fa-solid fa-xmark" style="width: 16px"></i>
        </button>
        <div class="collapse" id="collapseSearch" style="position: absolute; top: 110%; right: -10px;">
          <div class="card card-body">
            <input class="form-control me-2" type="search" name="s" placeholder="Rechercher..." aria-label="Search">
            <button class="border-0 search-btn btn btn-outline-success search-submit" type="submit">
              <i class="mi10 fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </nav>
  <!-- End Bottom Nav Bar -->
