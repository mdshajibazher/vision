<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Consultive | Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

    <?php wp_head(); ?>
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <div class="top-bar bg-dark text-white">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 bg-primary py-2 text-center text-lg-left">
              <p class="mb-0 text-small"><i class="fas fa-clock mr-2"></i>Opening hours: Mon - Sat 9:00 - 18:00</p>
            </div>
            <div class="col-lg-8 text-right py-2 text-center text-lg-right">
              <ul class="list-inline mb-0">
                <li class="list-inline-item"><a class="font-weight-normal text-small reset-anchor" href="#"><i class="fas fa-mobile mr-2"></i>+535 421 895 6523</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a class="font-weight-normal text-small reset-anchor" href="#"><i class="fas fa-envelope mr-2"></i>Construction@example.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="img/logo.svg" alt="" width="200"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-2 active"><a class="nav-link text-uppercase" href="index.html">Home </a></li>
              <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="about.html">About</a></li>
              <li class="nav-item mx-2"><a class="nav-link text-uppercase" href="contact.html">Contact</a></li>
              <li class="nav-item ml-2 dropdown"><a class="nav-link text-uppercase dropdown-toggle pr-0" id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-lg-4" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item font-weight-bold text-small" href="index.html">Home</a><a class="dropdown-item font-weight-bold text-small" href="about.html">About</a><a class="dropdown-item font-weight-bold text-small" href="contact.html">Contact                </a></div>
              </li>
              <li class="nav-item ml-lg-3 pl-lg-3"><a class="btn btn-outline-primary btn-sm" href="contact.html">Request a quote</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Slider -->