<?php 

$services_config = include __DIR__.'/../config/services.php';
$all_service_items = $services_config['service_items'];

$service_items = array_filter($all_service_items, function ($item) {
  return isset($item['visible']) && $item['visible'] === true;
})

?>

<section id="services" class="service-section">
    <div class="auto-container">
      <div class="sec-title text-center wow slideInUp">
        <span class="sub-title">SERVİSLERİMİZ</span>
        <h2>Otel Olanakları</h2>
      </div>
      <div class="row">
        <!-- service-block -->
        <?php foreach ($service_items as $item): ?>
        <div class="service-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn" data-wow-delay="100ms">
            <div class="icon-box wow fadeInUp"><i class="<?= $item['icon'] ?>"></i></div>
            <div class="content-box">
              <h4 class="title">
                <a href="page-service-details.html">
                  <?= $item['title'] ?>
                </a>
              </h4>
              <div class="text">
                <?= $item['description'] ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <!-- service-block -->
        <!-- <div class="service-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn" data-wow-delay="200ms">
            <div class="icon-box wow fadeInUp"><i class="flaticon-travel"></i></div>
            <div class="content-box">
              <h4 class="title"><a href="page-service-details.html">Pick Up & Drop</a></h4>
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div> -->
        <!-- service-block -->
        <!-- <div class="service-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn" data-wow-delay="300ms">
            <div class="icon-box wow fadeInUp"><i class="flaticon-wifi"></i></div>
            <div class="content-box">
              <h4 class="title"><a href="page-service-details.html">Fibre Internet</a></h4>
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div> -->
        <!-- service-block -->
        <!-- <div class="service-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn" data-wow-delay="400ms">
            <div class="icon-box wow fadeInUp"><i class="flaticon-breakfast"></i></div>
            <div class="content-box">
              <h4 class="title"><a href="page-service-details.html">Breakfast</a></h4>
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div> -->
        <!-- service-block -->
        <!-- <div class="service-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn" data-wow-delay="500ms">
            <div class="icon-box wow fadeInUp"><i class="flaticon-swimming-pool"></i></div>
            <div class="content-box">
              <h4 class="title"><a href="page-service-details.html">Swimming Pool</a></h4>
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div> -->
        <!-- service-block -->
        <!-- <div class="service-block col-lg-4 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn" data-wow-delay="600ms">
            <div class="icon-box wow fadeInUp"><i class="flaticon-car"></i></div>
            <div class="content-box">
              <h4 class="title"><a href="page-service-details.html">Parking Space</a></h4>
              <div class="text">Orci varius natoque penatibus magnis ders disney parturient ridiculus</div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
</section>