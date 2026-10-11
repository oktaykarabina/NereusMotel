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
                <!-- <a href="page-service-details.html">
                  <?= $item['title'] ?>
                </a> -->
                <span>
                  <?= $item['title'] ?>
                </span>
              </h4>
              <div class="text">
                <?= $item['description'] ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>