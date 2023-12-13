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
<!-- Start Top Nav Bar -->
<nav class="top-nav navbar navbar-expand-lg bg-body-tertiary navbar-light">
    <div class="container container-fluid">
        <div class="collapse navbar-collapse" id="">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item top-item">
                    <span class="nav-link">
                        <i class="mi10 fa-regular fa-clock"></i><?php echo date_i18n('l, F j, Y', current_time('timestamp')) ?>
                    </span>
                </li>
                <li class="nav-item top-item">
                    <a class="nav-link" aria-current="page" href="#">(AMO) Assurance Maladie Obligatoire</a>
                </li>
                <li class="nav-item top-item">
                    <a class="nav-link" aria-current="page" href="#">Licence d'Université Spécialisé (LUS)</a>
                </li>
                <li class="nav-item top-item">
                    <a class="nav-link" aria-current="page" href="#">Emploi du Temps</a>
                </li>
            </ul>
            <ul class="social-media-menu navbar-nav me-auto mb-2 mb-lg-0">
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
                    <a class="nav-link" aria-current="page" href="#">
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
                <img class="nav-link img-fluid" src="<?php echo get_template_directory_uri()?>/icon/est-ucd-black.svg" style="width: 285px" class="img-responsive" alt="">
            </a>
        </div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="tel:0606060606">
                    <i class="link-img mi10 fa-solid fa-phone"></i>
                    <span class="link-text">0606060606</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="mailto:estsb.ucd.ac.ma">
                    <i class="link-img mi10 fa-solid fa-envelope"></i>
                    <span class="link-text">estsb.ucd.ac.ma</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">
                    <i class="link-img mi10 fa-solid fa-location-dot"></i>
                    <span class="link-text">Sidi Bennour</span>
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
            <img class="navbar-toggler-icon" src="<?php echo get_template_directory_uri()?>/icon/bars.svg" alt="">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php add_header_menu(); ?>
        </div>
        <form class="d-flex search-form">
            <button class="border-0 btn btn-outline-success collapsed" style="margin-inline: 5px;" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
                <i class="search-img fa-solid fa-magnifying-glass" style="display: none"></i>
                <i class="x-img fa-solid fa-xmark" style="width: 16px"></i>
            </button>
            <div class="collapse" id="collapseSearch" style="position: absolute; top: 110%; right: -10px;">
                <div class="card card-body">
                    <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search">
                    <button class="border-0 search-btn btn btn-outline-success search-submit" type="submit">
                        <i class="mi10 fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</nav>
<!-- End Bottom Nav Bar -->
