<?php

$nav_config = include __DIR__ . '/../config/navigation.php';
$all_nav_items = $nav_config['nav_items'];

$nav_items = array_filter($all_nav_items, function($item) {
    return isset($item['visible']) && $item['visible'] === true;
});

?>

<footer class="main-footer footer-style-one">
    <!-- Widgets Section -->
    <div class="widgets-section">
      <div class="auto-container">
        <div class="row">
          <!-- Footer Column -->
          <div class="footer-column col-lg-4 col-sm-6">
            <div class="footer-widget about-widget wow fadeInLeft">
              <div class="widget-content">
                <div class="logo"><a href="#"> <img src="images/logo-2.png" alt=""></a></div>
                <div class="text">
                  <div>
                    <span>Nereus Butik Otel | Asos</span>
                  </div> 
                  <div>
                    <span>Maviyi, tarihi ve sessizliği bir arada yaşayın.</span>
                  </div>
                </div>
                <div class="text">
                </div>
                <ul class="social-icon-two">
                  <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Footer Column -->
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
          <div class="footer-column col-lg-3 col-sm-6">
            <div class="footer-widget info-widget wow fadeInLeft" data-wow-delay="300ms">
              <h4 class="widget-title">İletişim</h4>
              <div class="widget-content">
                <!-- Recent Post -->
                <article class="recent-post">
                  <div class="inner">
                    <div class="post-info">
                      <i class="fas fa-phone"></i>
                      +90 532 723 02 73
                    </div>
                    <!-- <div class="post-info">+91-7052-101-786</div> -->
                    <div class="post-info">
                      <i class="fa fa-envelope"></i>
                      info@nereus.com
                    </div> <!-- TODO: Domain sonrası güncellenecek. -->
                    <div class="post-info">
                      <i class="fas fa-location"></i>
                      Yörükler Evi, 17862 Balabanlı/Ayvacık/Çanakkale
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
          <!-- footer column -->
          <!-- <div class="footer-column col-lg-3 col-sm-6">
            <div class="footer-widget news-widget wow fadeInLeft" data-wow-delay="400ms">
              <h4 class="widget-title">Newsletter</h4>
              <div class="text">Lorem ipsum dolor sit amet consectetur Augue id fermentum</div>
              <div class="subscribe-form-three">
                <form method="post" action="#">
                  <div class="form-group">
                    <input type="email" name="email" class="email" value="" placeholder="Email Address" required="">
                    <button type="button" class="theme-btn btn-style-one"><span class="btn-title"><i class="fa fa-paper-plane"></i></span></button>
                  </div>
                </form>
              </div>
              <div class="text"><i class="fa-regular fa-circle-check"></i>I agree to all terms and policies</div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!--  Footer Bottom -->
    <div class="footer-bottom wow slideInUp">
      <div class="auto-container">
        <div class="inner-container">
          <!-- <div class="copyright-text">© Copyrights reserved by kodesolution.</div>.</div> -->
          <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
        </div>
      </div>
    </div>
</footer>