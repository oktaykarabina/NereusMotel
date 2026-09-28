<!DOCTYPE html>
<html lang="en">
<?php 
  include 'inc/head.php' 
?>
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
    // include 'inc/team-section.php';
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

<!-- MODAL BLOCK -->
<div class="modal fade" id="roomModal" tabindex="-1" aria-hidden="true" style="z-index: 10000 !important;">
    <div class="modal-dialog modal-lg modal-dialog-centered c-modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Oda Detayları</h5>

                <button 
                    type="button" 
                    class="btn-close" 
                    data-bs-dismiss="modal"
                    aria-label="Kapat">
                </button>
            </div>

            <div class="modal-body">
                    <iframe
        id="roomFrame"
        src=""
        style="width: 100%; height: 600px; border: 0;"
    ></iframe>
            </div>

        </div>
    </div>
</div>
</body>
</html>


