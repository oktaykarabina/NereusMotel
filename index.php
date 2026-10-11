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

            <div class="modal-body" id="roomModalBody">
                <div class="text-center py-5">
                    Oda seçiniz.
                </div>
            </div>

        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('roomModal');
    const modalBody = document.getElementById('roomModalBody');
    const modalTitle = document.getElementById('roomModalTitle');

    let requestController = null;

    modal.addEventListener('show.bs.modal', async function (event) {
        const button = event.relatedTarget;
        const roomKey = button?.dataset.room;

        if (!roomKey) {
            modalBody.innerHTML =
                '<div class="alert alert-warning">Oda seçilemedi.</div>';
            return;
        }

        // Önceki istek tamamlanmadıysa iptal et.
        if (requestController) {
            requestController.abort();
        }

        requestController = new AbortController();

        modalBody.innerHTML = `
            <div class="text-center py-5">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Yükleniyor...</span>
                </div>
                <p class="mt-3">Oda detayları yükleniyor...</p>
            </div>
        `;

        try {
            const response = await fetch(
                `inc/room-details/main.php?room=${encodeURIComponent(roomKey)}`,
                { signal: requestController.signal }
            );

            if (!response.ok) {
                throw new Error('Oda detayları yüklenemedi.');
            }

            const html = await response.text();

            modalBody.innerHTML = html;
        } catch (error) {
            if (error.name === 'AbortError') {
                return;
            }

            modalBody.innerHTML = `
                <div class="alert alert-danger">
                    Oda detayları yüklenirken bir hata oluştu.
                    Lütfen tekrar deneyin.
                </div>
            `;

            console.error(error);
        }
    });

    modal.addEventListener('hidden.bs.modal', function () {
        if (requestController) {
            requestController.abort();
            requestController = null;
        }

        modalBody.innerHTML = '';
    });

    modal.addEventListener('shown.bs.modal', function () {
      initRoomSlider(document.getElementById('roomModalBody'));
    });
});

function initRoomSlider(modalBody) {
    if (!window.jQuery || !jQuery.fn.bxSlider) return;

    const $slider = jQuery(modalBody).find(
        '.product-details .bxslider'
    );

    if (!$slider.length || $slider.data('bxSlider')) return;

    $slider.bxSlider({
        mode: 'fade',
        auto: false,
        speed: 700,
        pagerCustom: jQuery(modalBody).find(
            '.product-details .slider-pager .thumb-box'
        ),
        adaptiveHeight: true,
        controls: false,
        onSliderLoad: function () {
            $slider.addClass('bxslider-ready');
        }
    });
}
</script>

</body>
</html>


