<?php
$folder = __DIR__ . '/../images/facility-gallery';

$images = glob(
    $folder . '/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}',
    GLOB_BRACE
) ?: [];

$videos = glob(
    $folder . '/*.{mp4,MP4}',
    GLOB_BRACE
) ?: [];

$docRoot    = rtrim(str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])), '/');
$realFolder = str_replace('\\', '/', realpath($folder));
$galleryUrl = str_replace($docRoot, '', $realFolder);

$galleryItems = array_merge(
    array_map(fn($path) => [
        'path' => $path,
        'type' => 'image',
    ], $images),
    array_map(fn($path) => [
        'path' => $path,
        'type' => 'video',
    ], $videos)
);

?>
  
<section id="foto-gallery">
  <div class="auto-container">
    <div class="sec-title text-center wow fadeInUp">
      <span class="sub-title">GALERİ</span>
    </div>

    <div class="gallery-slider peek-slider">
      <?php foreach ($galleryItems as $item): ?>
        <?php
          $url = $galleryUrl . '/' . rawurlencode(basename($item['path']));
          $safeUrl = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        ?>
        <div class="gallery-slide">
          <figure class="m-0">
            <a href="<?= $safeUrl ?>" data-fancybox="facility-gallery" class="facility-image-link">
              <?php if ($item['type'] === 'image'): ?>
                <img src="<?= $safeUrl ?>" class="facility-image" alt="Tesis Görseli" loading="lazy">
              <?php else: ?>
                <video class="facility-video" muted playsinline preload="metadata">
                  <source src="<?= $safeUrl ?>" type="video/mp4">
                </video>
              <?php endif; ?>
            </a>
          </figure>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>