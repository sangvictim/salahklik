<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salah Klik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic">
    <!-- Stroke 7 font by Pixeden (http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set)-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/helper.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.default.css" id="theme-stylesheet">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.css">
    <!-- plugins-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/simpletextrotator">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <div id="all">
      <!-- navbar-->
      <header class="header">
        <div role="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header"><a href="#all" class="navbar-brand scroll-to"><img src="<?= base_url('assets/') ?>logo-small.png" alt="logo" class="hidden-xs hidden-sm"><img src="<?= base_url('assets/') ?>logo-small.png" alt="logo" class="visible-xs visible-sm"><span class="sr-only">Go to homepage</span></a>
              <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="pe-7s-menu"></i></button>
              </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav navbar-right">
              <?= $menu ?>
            </ul>
            </div>
          </div>
        </div>
      </header>