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

  <section id="localGuide" class="local-guide">
    <div class="auto-container">
      <div class="sec-title text-center wow fadeInUp">
        <span class="sub-title">YEREL REHBER (Bu Alan Test Ediliyor.)</span>
      </div>
      <div class="row">
        <div>
          <div>
            <div>
              <figure>
                <img src="images/background/yerel_rehber.jpg">
              </figure>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- End local guide section -->

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

<script>
  roomModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      const roomKey = button.dataset.room;
  
      const frame = document.getElementById('roomFrame');
  
      frame.src = `room-details.php?room=${encodeURIComponent(roomKey)}`;
  });
</script>
</body>
</html>


