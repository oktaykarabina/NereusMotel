<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Nereus Butik Otel</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/flatpickr.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">

  <!-- Main Header-->
	<?php
    include 'inc/header.php';
  ?>
	<!--End Main Header -->

  <!-- banner section -->
  <?php
    include 'inc/home.php';
  ?>
  <!-- End banner section -->

  <!-- About Section -->
  <?php
    include 'inc/about.php';
  ?>
  <!--Emd About Section -->

  <!-- rooms-section -->
  <?php
    include 'inc/room.php';
  ?>
  <!-- End rooms-section -->

  <!-- service-section -->
  <?php
    include 'inc/services.php';
  ?>
  <!-- End service-section -->

  <!-- video-section -->
  <!-- <section class="video-section">
    <div class="bg bg-image" style="background-image: url(images/background/1.jpg);"></div>
    <div class="auto-container">
      <div class="row">
        <div class="content-column col-lg-9 col-md-12 col-sm-12">
          <div class="inner-column">
            <div class="sec-title-two light wow slideInUp">
              <span class="sub-title">Promotional Video</span>
              <h2> Book Hotal Rooms, <br>et Deals & Book Flights Online.</h2>
            </div>
          </div>
        </div>
        <div class="btn-column col-lg-3 col-md-12 col-sm-12">
          <div class="inner-column">
            <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="play-now-two" data-fancybox="gallery" data-caption="">
              <img src="images/icons/play.png" alt="" />
              <span class="ripple"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End video section -->

  <!-- feature-section -->
  <?php
    // include 'inc/feature-section.php';
  ?>
  <!-- End feature section -->

  <!-- testimonial-section -->
  <?php
    include 'inc/testimonal.php';
  ?>
  <!-- End testimonial section -->

  <!-- pricing-section-two -->
  <?php 
    // include 'inc/pricing-section.php'; 
  ?>
  <!-- End pricing-section-two -->

  <!-- Team Section -->
  <?php
    include 'inc/team-section.php';
  ?>
  <!-- End Team Section -->

  <!-- news-section -->
  <?php
    //include 'inc/blog.php'; // TODO: Blog aşamasına geçildiğinde geliştirilecek.
  ?>
  <!-- End news section -->

  <!-- BOOKING SECTION -->
  <?php
    //include 'inc/contact.php';
  ?>
  <!-- BOOKING SECTION END -->

  <!-- Main Footer -->
  <?php
    include 'inc/footer.php';
  ?>
  <!--End Main Footer -->

</div><!-- End Page Wrapper -->
<?php
  include 'inc/js-import.php';
?>
</body>
</html>


