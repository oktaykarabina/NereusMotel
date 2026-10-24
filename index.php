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

<!-- local guide section -->

  <?php 
    // include 'inc/local-guide.php';
  ?>

 <!-- End local guide section -->

  <!-- gallery section -->
  <?php 
    include 'inc/facility-gallery.php'; 
  ?>
  <!-- End gallery section -->

  <!-- testimonial-section -->
  <?php
    include 'inc/testimonal.php';
  ?>
  <!-- End testimonial section -->

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

            <div class="modal-body" id="roomModalBody">
                <div class="text-center py-5">
                    Oda seçiniz.
                </div>
            </div>

        </div>
    </div>
</div>
<div class="scroll-to-top scroll-to-target" data-target="html">
  <i class="fa fa-arrow-up"></i>
</div>
<script src="js/custom-site.js"></script>
</body>
</html>