
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
  <title>Contact Us | TEDxRTU</title>
  <link rel="shortcut icon" href="res/images/favicon.ico">
  <meta name="description" content="TEDxRTU, x = independently organised TED event. Ignited Minds. This March, at Rajasthan Technical University.">
  <meta name="keywords" content="TEDxRTU, TEDx, RTU, Rajasthan Technical University, kota Rajasthan, event, talks">

  <!-- Social media tags -->
  <!-- Open Graph -->
  <meta property="og:title" content="TEDxRTU">
  <meta property="og:description" content="Ignited Minds. This March, at Rajasthan Technical University">
  <meta property="og:image" content="https://tedxrtu.com/res/images/logos/tedx.png">
  <meta property="og:url" content="https://tedxrtu.com/contact">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@tedxrtu">
  <!-- Google+ -->
  <meta itemprop="name" content="TEDxJMI">
  <meta itemprop="description" content="Ignited Minds. This March, at Rajasthan Technical University.">
  <meta itemprop="image" content="http://tedxrtu.com/res/images/logos/TEDxRTU5.png">

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

          <a class="navbar-brand font-family-alt letter-spacing-1 text-extra-large text-uppercase" href="/">
            <img class="logo-navbar-dark" src="../res/images/logos/tedx.png" alt=""/>
            <img class="logo-navbar-white" src="../res/images/logos/tedx.png" alt=""/>
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
            <li><a href="#page-top" class="page-scroll">Contact Us</a></li>
            <li class="bg-base-color">
              <a href="../register/" class="line-height-unset width-100">
                Register
              </a>
            </li>
          </ul>
        </div>
        <!-- //.navbar-collapse -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </nav>
  <!-- //Navigation End -->



  <!-- Section - Contact Start -->
  <section id="contact" class="bg-white-2">
    <div class="container">
      <div class="row no-padding-rl">
        <div class="col-md-12">
          <h2 class="font-family-alt font-weight-700 sm-title-large title-extra-large-2 text-gray-dark-2">
            Contact Us
          </h2>
          <span class="bg-base-color xs-margin-6 xs-no-margin-rl margin-3 no-margin-rl separator-line-extra-thick-long"></span>
        </div>
        <!-- //.col-md-10 -->
      </div>
      <!-- //.row -->

      <div class="row margin-4 no-margin-rl no-margin-bottom">
        <div class="col-md-5 no-padding-rl">
          <div class="row text-center">
            <i class="fa fa-envelope-o display-block text-base-color title-extra-large-2"></i>
            <br>
            <h4 class="font-weight-300 letter-spacing-1">
              contact@tedxrtu.com
            </h4>
          </div>
          <!-- //.row -->

          <p class="margin-8 no-margin-bottom no-margin-rl font-family-alt text-extra-large">
            Send us your queries by email.<br>
            We endeavour to answer them all within 24 hours.
          </p>

          <br>
          <form name="contact" action="index.php" method="POST">
            <div class="row margin-4 no-margin-rl">
              <input type="text" placeholder="Your Name" name="name" class="required" value="<?php 
          if(isset($_SESSION['name'])) {
            echo $_SESSION['name'];
          } 
          ?>" required>

              <input type="email" placeholder="Your Email" name="email" class="required email" value="<?php 
          if(isset($_SESSION['email'])) {
            echo $_SESSION['email'];
          } 
          ?>" required>
              <textarea placeholder="Your Message" name="message" class="required" value="<?php 
          if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
          } 
          ?>" required></textarea>
            </div>
            <?php if(in_array("<span style='color: #14C800;'>Submitted", $error_array)) echo "<span style='color: #14C800;'>Submitted"; ?>
            <!-- //.row -->

            <div class="row margin-4 no-margin-rl">
              <span class="display-block font-family-alt letter-spacing-1 text-gray-dark-2 text-small text-uppercase">
                * Please enter all fields correctly
              </span>
            </div>
            <!-- //.row -->

            <div class="row margin-4 no-margin-rl">
              <button name="contact_button" type="submit" class="btn btn-base-color btn-medium">
                Send Message
              </button>
            </div>

            
            <!-- //.row -->
          </form>
        </div>
        <!-- //.col-md-5 -->

        <div class="contact-address col-md-6 col-md-offset-1">
          <div class="row text-center">
            <i class="fa fa-map-marker display-block text-base-color title-extra-large-2"></i>
            <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
              Our Location
            </span>
            <br>
            <h4 class="font-weight-300 letter-spacing-1">
              UIT Auditorium
              <br>Kota
              <br>Rajasthan
            </h4>
          </div>
          <!-- //.row -->
          <div class="row text-center">
            <div class="margin-8 no-margin-bottom no-margin-rl map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.180181860913!2d75.83059251500814!3d25.129598533927687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f84ed7e2235a9%3A0xfad31938f404fdc4!2sUIT+Auditorium%2C+Balaji+Nagar%2C+Sector+-+A%2C+Rangbari%2C+Kota%2C+Rajasthan+324010!5e0!3m2!1sen!2sin!4v1545386558982" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- //.map -->
          </div>
          <!-- //.row -->
        </div>
        <!-- //.col-md-6 -->
      </div>
      <!-- //.row -->
    </div>
    <!-- //.container -->
  </section>
  <!-- //Section - Contact End -->



  <!-- Section - Event banner start -->
  <section id="event-banner" class="bg-white pull-up">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 text-center">
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

        <div class="col-sm-4 xs-margin-8 xs-no-margin-bottom xs-no-margin-rl text-center">
          <i class="fa fa-map-marker display-block text-base-color title-extra-large-2"></i>
          <span class="display-block font-family-alt font-weight-700 letter-spacing-1 margin-5 no-margin-bottom no-margin-rl text-large text-uppercase">
            Venue
          </span>
          <p class="margin-3 font-family-alt no-margin-bottom no-margin-rl title-small text-gray-dark-2">
           UIT Auditorium,<br>
            Kota
          </p>
        </div>
        <!-- //.col-sm-4 -->

        <div id="banner-registration" class="col-sm-4 xs-margin-8 xs-no-margin-bottom xs-no-margin-rl text-center">
          <a href="../res/...pdf" class="btn btn-outline-base-color sm-btn-medium btn-large no-margin-rl">
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
