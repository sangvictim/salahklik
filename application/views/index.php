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
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <div id="all">
      <!-- navbar-->
      <header class="header">
        <div role="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header"><a href="#all" class="navbar-brand scroll-to"><img src="<?= base_url('assets/') ?>img/logo.png" alt="logo" class="hidden-xs hidden-sm"><img src="<?= base_url('assets/') ?>img/logo-small.png" alt="logo" class="visible-xs visible-sm"><span class="sr-only">Go to homepage</span></a>
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
      <!--   *** INTEGRATIONS ***-->
      <section id="integrations" class="section-gray" style="margin-top: -10%">
        <div class="container ">
          <div class="row services">
            <div class="col-md-12">
              <div class="row">
                <?php foreach ($konten as $kt): ?>
                  <div class="col-sm-4">
                    <div class="box box-services">
                      <div class="">
                        <img src="<?= $kt->gambar?>" alt="" style="width: 100px">
                      </div>
                      <h4 class="heading"><?= $kt->judul?></h4>
                      <?= substr($kt->deskripsi, 0, 50)?>.... 
                      <br>
                      <a href="" class="btn btn-info">Read More >>></i></a>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="footer__copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>&copy;2016 Best company</p>
              </div>
              <div class="col-md-6">
                <p class="credit pull-right">Code by <a href="https://bootstrapious.com/landing-pages" class="external">Bootstrapious</a></p>
               <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="<?= base_url('assets/') ?>js/jquery-2.2.3.min.js"> </script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"> </script>
    <script src="<?= base_url('assets/') ?>js/jquery.cookie.js"> </script>
    <script src="<?= base_url('assets/') ?>js/ekko-lightbox.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.simple-text-rotator.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>