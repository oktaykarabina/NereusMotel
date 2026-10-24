<?php

$nav_config = include __DIR__ . '/../config/navigation.php';
$all_nav_items = $nav_config['nav_items'];

$nav_items = array_filter($all_nav_items, function($item) {
    return isset($item['visible']) && $item['visible'] === true;
});

?>

<footer class="main-footer footer-style-one">
    <div class="widgets-section">
      <div class="auto-container">
        <div class="row">
          <div class="footer-column col-lg-3 col-sm-6">
            <div class="footer-widget about-widget wow fadeInLeft">
              <div class="widget-content">
                <div class="logo">
                  <img src="images/logo/nereus_yatay_logo_dark.png" width="75%" height="75%" alt="">
                </div>
                <div class="text">
                  <div>
                    <span>Nereus Butik Motel | Assos</span>
                  </div> 
                  <div>
                    <span>Maviyi, tarihi ve sessizliği bir arada yaşayın.</span>
                  </div>
                </div>
                <div class="text">
                </div>
                <ul class="social-icon-two">
                  <li>
                    <a href="https://www.facebook.com/nereusbutikmotel/?locale=tr_TR" target="_blank">
                      <i class="fab fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/nereus.butikmotel/" target="_blank">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-column col-lg-2 col-sm-6 mb-0">
            <div class="footer-widget links-widget wow fadeInLeft" data-wow-delay="200ms">
              <h4 class="widget-title">Linkler</h4>
              <div class="widget-content">
                <ul class="user-links">
                  <?php 
                    foreach($nav_items as $item):
                  ?>
                  <li>
                    <a href="<?= $item['url'] ?>">
                      <?= $item['title'] ?>
                    </a>
                  </li>
                  <?php endforeach; ?>                  
                </ul>
              </div>
            </div>                       
          </div>
          <!-- Footer Column -->
          <div class="footer-column col-lg-7 col-sm-6">
            <div class="footer-widget info-widget wow fadeInLeft" data-wow-delay="300ms">
              <h4 class="widget-title">İletişim</h4>
              <div class="widget-content">
                <div class="row">
                  <div class="col-lg-6">
                    <article class="recent-post">
                      <div class="inner">
                        <div class="post-info">
                          <i class="fa-solid fa-phone"></i>
                            +90 532 723 0273
                        </div>
                        <div class="post-info">
                          <i class="fa fa-envelope"></i>
                          <span>info@nereus.com</span>
                        </div> <!-- TODO: Domain sonrası güncellenecek. -->
                        <div class="post-info">
                          <i class="fas fa-location"></i>
                          Yörükler Evi, 17862 Balabanlı/Ayvacık/Çanakkale
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="col-lg-6">
                    <article class="recent-post" style="max-width: 100%;">
                      <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3079.27179354374!2d26.229768375779067!3d39.48577697160435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14b07957dba2ecef%3A0x5e7e023d2f69056e!2sNereus%20Butik%20Motel!5e0!3m2!1str!2str!4v1790628769556!5m2!1str!2str" 
                        width="100%" 
                        height="200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="strict-origin-when-cross-origin">
                      </iframe>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom wow slideInUp">
      <div class="auto-container">
        <div class="inner-container">
          <div class="copyright-text">
            © Nereus Butik Motel
          </div>
        </div>
      </div>
    </div>
  </footer>