<?php

$localGuides = include __DIR__ . '/../config/local-guide.php';
$all_local_guides_item = $localGuides['local-guides'];

?>


<section id="localGuide" class="local-guide">
  <div class="auto-container">
      <div class="sec-title text-center wow fadeInUp">
        <span class="sub-title">YEREL REHBER</span>
        <p>Keşfedilmeyi bekleyen güzellikler.</p>
      </div>
      <div class="local-guide-slider peek-slider">
        <?php foreach ($all_local_guides_item as $guide): ?>
        <div class="guide-slide">
            <div class="guide-card">

                <div class="guide-card-image">
                    <img
                        src="<?= htmlspecialchars($guide['img']) ?>"
                        alt="<?= htmlspecialchars($guide['title']) ?>"
                    >
                </div>

                <div class="guide-card-content">
                    <h4><?= htmlspecialchars($guide['title']) ?></h4>

                    <p>
                        <?= htmlspecialchars($guide['description']) ?>
                    </p>

                    <div class="guide-card-info">
                        <div class="guide-info-item">
                            <i class="fa-solid fa-route"></i>
                            <span><?= htmlspecialchars($guide['distance']) ?></span>
                        </div>

                        <div class="guide-info-item">
                            <i class="fa-regular fa-clock"></i>
                            <span><?= htmlspecialchars($guide['time']) ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php endforeach; ?>
      </div>
  </div>
</section>
