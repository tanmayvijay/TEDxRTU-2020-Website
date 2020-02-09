<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Title, icon, description and keywords -->
  <title>Register | TEDxRTU</title>
  <link rel="shortcut icon" href="../res/images/favicon.ico">
  <meta name="description" content="Register for TEDxRTU, x = independently organised TED event. Ignited Minds. This March, at Rajasthan Technical University.">
  <meta name="keywords" content="TEDx, RTU, Rajasthan Technical University, Kota, event, talks">

  <!-- Social media tags -->
  <!-- Open Graph -->
  <meta property="og:title" content="Register for TEDxRTU">
  <meta property="og:description" content="TEDxRTU - Ignited Minds. This March, at Rajasthan Technical University">
  <meta property="og:image" content="https://tedxrtu.com/res/images/logos/TEDx.jpg">
  <meta property="og:url" content="https://tedxrtu.com/register">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@tedxrtu">
  <!-- Google+ -->
  <meta itemprop="name" content="Register for TEDxRTU">
  <meta itemprop="description" content="TEDxRTU - Ignited Minds. This March, at Rajasthan Technical University.">
  <meta itemprop="image" content="https://tedxrtu.com/res/images/logos/tedx.png">

  <!-- Browser themes -->
  <meta name="theme-color" content="#000">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../res/css/bootstrap.min.css">

  <!-- Font Icons -->
  <link rel="stylesheet" href="../res/css/font-awesome.min.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="../res/css/flickity.min.css">
  <link rel="stylesheet" href="../res/css/magnific-popup.css">

  <!-- Main styles -->
  <link rel="stylesheet" href="../res/css/main.css">
  <link rel="stylesheet" href="../res/css/style.css">

  <!-- Color skin -->
  <link rel="stylesheet" href="../res/css/color_red.css">

  <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 8]>
  <script src="../res/js/modernizr.min.js"></script>
  <![endif]-->
</head>

<body id="page-top">
  <!-- Navigation Start -->
  <nav id="navigation" class="navbar navbar-fixed-top navbar-dark">
    <div class="container">
      <div class="row">
        <div class="navbar-header col-lg-3">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand font-family-alt letter-spacing-1 text-extra-large text-uppercase" href="../">
            <img class="logo-navbar-dark" src="../res/images/logos/TEDx.png" alt="TEDXRTU"/>
            <img class="logo-navbar-white" src="../res/images/logos/TEDx.png" alt="TEDXRTU"/>
          </a>
        </div>
        <!-- //.navbar-header -->

        <div id="navbar" class="navbar-collapse collapse col-lg-9 pull-right">
          <ul class="nav navbar-nav font-family-alt letter-spacing-1 text-uppercase font-weight-700">
            <li><a href="../" class="line-height-unset">About</a></li>
            <li><a href="../speakers/" class="line-height-unset">Speakers</a></li>
            <li><a href="../our-team/" class="line-height-unset">Our Team</a></li>
            <li><a href="../alumni/" class="line-height-unset">Alumni</a></li>
            <li><a href="../sponsors/" class="line-height-unset">Sponsors</a></li>
            <li><a href="../contact/" class="line-height-unset">Contact Us</a></li>
            <li><a href="#page-top" class="page-scroll">Register</a></li>
          </ul>
        </div>
        <!-- //.navbar-collapse -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </nav>
  <!-- //Navigation End -->



  <!-- Section - Registration start -->
  <section id="registration" class="bg-white-2">
    <div class="container">
      <div class="row no-padding-rl">
        <div class="col-md-12">
          <h2 class="font-family-alt font-weight-700 sm-title-large title-extra-large-2 text-gray-dark-2">
            Register for TEDxRTU
          </h2>
          <span class="bg-base-color xs-margin-6 xs-no-margin-rl margin-3 no-margin-rl separator-line-extra-thick-long"></span>
        </div>
        <!-- //.col-md-12 -->
      </div>
      <!-- //.row -->

      <div class="row margin-2 no-margin-rl no-margin-bottom">
        <p class="font-family-alt sm-text-large text-extra-large text-gray-dark-2">
         Book your TEDxRTU tickets Now!
        </p>

        <div class="row">
          <div class="col-sm-6">
            <form name="contact" action="index.php" method="POST">
            <div class="row margin-4 no-margin-rl">
              <input type="text" placeholder="Name" name="name" class="required" required>
              <input type="email" placeholder="Email" name="email" class="required email" required>
              <input type="contact" placeholder="Contact Number" name="contact" class="required" required>
              
            </div>
            <!-- //.row -->

            <div class="row margin-4 no-margin-rl">
              <span class="display-block font-family-alt letter-spacing-1 text-gray-dark-2 text-small text-uppercase">
                * Please fill all the details same in the payment gateway. For further queries, Contact: +919785986223
              </span>
            </div>
            <!-- //.row -->

            <div class="row margin-4 no-margin-rl">
              <button name="register_button" type="submit" class="btn btn-base-color btn-medium">
                Proceed for payment
              </button>
            </div>
            <!-- //.row -->
          </form>
          </div>

          
          <!-- //Features Box Style v3 End -->
        </div>
      </div>

      <span class="bg-gray-light-2 separator-line-full"></span>

     
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </section>
  <!-- //Section - Registration end -->



  <!-- Section - Event banner start -->
  <section id="event-banner" class="bg-white pull-up">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center">
          <i class="fa fa-clock-o display-block text-base-color title-extra-large-2"></i>
          <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
            Date &amp; Time
          </span>
          <p class="margin-3 font-family-alt no-margin-bottom no-margin-rl title-small text-gray-dark-2">
            March 14, 2019<br>
            2 PM to 5 PM
          </p>
        </div>
        <!-- //.col-sm-4 -->

        <div class="col-sm-6 xs-margin-8 xs-no-margin-bottom xs-no-margin-rl text-center">
          <i class="fa fa-map-marker display-block text-base-color title-extra-large-2"></i>
          <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
            Venue
          </span>
          <p class="margin-3 font-family-alt no-margin-bottom no-margin-rl title-small text-gray-dark-2">
            UIT Auditorium, Kota
           
          </p>
        </div>
        <div id="banner-registration" class="col-sm-4 xs-margin-8 xs-no-margin-bottom xs-no-margin-rl text-center">
          <a href="../res/brochure.pdf" class="btn btn-outline-base-color sm-btn-medium btn-large no-margin-rl">
            <span>Download<br>Brochure</span>
          </a>
        </div>
        <!-- //.col-sm-4 -->
      </div>
      <!-- //.row -->
    </div>
  </section>
  <!-- //Section - Event banner end -->



  <!-- Section - Parallax banner start -->
  <section id="home-bg-parallax" class="height-50 no-padding overflow-hidden width-100">
    <!-- BG Parallax -->
    <div class="bg-parallax bg-overlay-black-5 width-100"></div>

    <div class="display-table height-100 position-absolute position-top position-left width-100">
      <div class="display-table-cell vertical-align-middle">
        <div class="container">
          <div class="row">
            <div class="countdown-timer">
              <div class="days">
                <span class="value">00</span>
                <span class="label">DAYS</span>
              </div>
              <div class="hours">
                <span class="value">00</span>
                <span class="label">HOURS</span>
              </div>
              <div class="minutes">
                <span class="value">00</span>
                <span class="label">MINS</span>
              </div>
              <div class="seconds">
                <span class="value">00</span>
                <span class="label">SEC</span>
              </div>
            </div>
          </div>
          <!-- //.row -->
        </div>
        <!-- //.container -->
      </div>
      <!-- //.display-table-cell -->
    </div>
    <!-- //.display-table -->
  </section>
  <!-- //Section - Parallax banner end -->



  <!-- Footer Start -->
  <footer class="footer bg-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="footer-logo xs-text-center">
            <img src="../res/images/logos/light.png" alt="">
          </div>
          <!-- //.footer-logo -->
          <p class="disclaimer xs-text-center">
            This independent TEDx event is operated under license from TED.
          </p>
          <!-- //.disclaimer -->
        </div>
        <!-- //.col-sm-4 -->

        <div class="col-sm-8">
          <div class="footer-social text-right">
            <ul class="list-inline list-unstyled no-margin xs-text-center xs-title-small title-medium">
              <li><a href="https://www.facebook.com/tedxrtu/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/tedxrtu"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/tedxrtu/"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <!-- //.footer-social -->
        </div>
        <!-- //.col-sm-8 -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </footer>
  <!-- //Footer End -->


  <!-- Scroll to top -->
  <a href="#page-top" class="page-scroll scroll-to-top"><i class="fa fa-angle-up"></i></a>


  <!-- jQuery -->
  <script src="../res/js/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="../res/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="../res/js/pace.min.js"></script>
  <script src="../res/js/debouncer.min.js"></script>
  <script src="../res/js/jquery.easing.min.js"></script>
  <script src="../res/js/jquery.inview.min.js"></script>
  <script src="../res/js/jquery.matchHeight.js"></script>
  <script src="../res/js/isotope.pkgd.min.js"></script>
  <script src="../res/js/imagesloaded.pkgd.min.js"></script>
  <script src="../res/js/flickity.pkgd.min.js"></script>
  <script src="../res/js/jquery.magnific-popup.min.js"></script>
  <script src="../res/js/jquery.validate.min.js"></script>

  <!-- BG Parallax JS -->
  <script src="../res/js/TweenMax.min.js"></script>
  <script src="../res/js/ScrollMagic.min.js"></script>
  <script src="../res/js/animation.gsap.min.js"></script>

  <!-- Theme -->
  <script src="../res/js/main.js"></script>

  <!-- Countdown -->
  <script src="../res/js/jquery.countdown.min.js"></script>
  <script src="../res/js/countdown.js"></script>

</body>

</html>
