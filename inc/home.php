<?php 

$banner_config = include __DIR__.'/../config/banner.php';
$all_banner_items = $banner_config['banner_items'];

$banner_items = array_filter($all_banner_items, function ($item) {
  return isset($item['visible']) && $item['visible'] === true;
})

?>

<section id="home" class="banner-section">
    <div class="banner-slider">
      <?php foreach ($banner_items as $item): ?>
        <div class="banner-slide">
          <figure class="image">
            <img src="<?= $item['img_url'] ?>" alt="">
          </figure>
          <div class="content-box">
            <span class="sub-title" data-animation-in="fadeInUp" data-delay-in="0.1">
              <?= $item['subtitle'] ?>
            </span>
            <h1 data-animation-in="fadeInUp" data-delay-in="0.3">
              <?= $item['title'] ?>
            </h1>
            <a href="#room" class="btn" data-animation-in="fadeInUp" data-delay-in="0.5">
              Odaları GÖr
            </a>
          </div>
        </div>
      <?php endforeach; ?>
      
    <?php
        // include 'checkout.php';
    ?>
</section>