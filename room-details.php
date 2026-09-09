<?php
  $roomsConfig = require_once __DIR__.'/config/room.php';

  $roomKey = $_GET['room'] ?? null;

  if (!$roomKey) {
      die('Oda belirtilmedi.');
  }

  $room = null;

  foreach ($roomsConfig['room_items'] as $item) {
      if ($item['key'] === $roomKey) {
          $room = $item;
          break;
      }
  }

  if ($room === null) {
      die('Oda bulunamadı.');
  }
?>

<!DOCTYPE html>
<html lang="en">
<?php 
  include 'inc/head.php' 
?>

<script>
    console.log("room:", <?= json_encode($room) ?>);
</script>
<body>
<div class="page-wrapper">
  
	<!-- Preloader -->
	<div class="preloader"></div>
      <!-- Sticky Header  -->
      <div class="sticky-header">
        <div class="auto-container">
          <div class="inner-container">
            <!--Logo-->
            <div class="logo">
              <a href="index.php">
                <img src="images/banner/banner-1.png" alt="">
              </a>
            </div>
            <!--Right Col-->
            <div class="nav-outer">
              <!-- Main Menu -->
              <nav class="main-menu">
                <div class="navbar-collapse show collapse clearfix">
                  <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                  </ul>
                </div>
              </nav><!-- Main Menu End-->
              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
            </div>
          </div>
        </div>
      </div><!-- End Sticky Menu -->
    </div>
	</header>
	<!--End Main Header -->

	<!-- Start main-content -->
  <?php include 'inc/room-details/main-content.php'; ?>
	<!-- end main-content -->

	<!--Room Details Start-->
	<section class="blog-details">
		<div class="container">
			<div class="row d-flex flex-row">
				<div class="col-xl-8 col-lg-7 product-details rd-page">
					<?php include 'inc/room-details/slider.php'; ?>
					<div class="room-details__left">
						<?php include 'inc/room-details/description.php'; ?>
						<?php include 'inc/room-details/facilities.php'; ?>
					</div>
          <div class="col-xl-4 col-lg-5">
            <div class="sidebar">
              <!-- TODO: Rezervasyon eklentisi kurulunca aktif edilebilir. -->
              <?php //include 'inc/room-details/reservation.php'; ?>
              <?php include 'inc/room-details/compare.php'; ?>
            </div>
          </div>
				</div>
			</div>
		</div>
	</section>
	<!--Room Details End-->

  <?php
    include 'inc/footer.php';
  ?>
</div><!-- End Page Wrapper -->
<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slick-animation.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/bxslider.js"></script>
<script src="js/owl.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/script.js"></script>
<!-- form submit -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.form.min.js"></script>
<script>
(function($) {
	$("#contact_form").validate({
		submitHandler: function(form) {
			var form_btn = $(form).find('button[type="submit"]');
			var form_result_div = '#form-result';
			$(form_result_div).remove();
			form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
			var form_btn_old_msg = form_btn.html();
			form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
			$(form).ajaxSubmit({
				dataType: 'json',
				success: function(data) {
					if (data.status == 'true') {
						$(form).find('.form-control').val('');
					}
					form_btn.prop('disabled', false).html(form_btn_old_msg);
					$(form_result_div).html(data.message).fadeIn('slow');
					setTimeout(function() { $(form_result_div).fadeOut('slow') }, 6000);
				}
			});
		}
	});
})(jQuery);
</script>
</body>
</html>