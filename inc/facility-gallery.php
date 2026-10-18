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

$galleryUrl = '/NereusHotel/images/facility-gallery';

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

$perPage = 6;
$totalItems = count($galleryItems);
$totalPages = (int) ceil($totalItems / $perPage);

$currentPage = max(1, (int) ($_GET['gallery_page'] ?? 1));
$currentPage = min($currentPage, max(1, $totalPages));

?>
  
  <section id="foto-gallery">
    <div class="auto-container">
        <div class="sec-title text-center wow fadeInUp">
            <span class="sub-title">GALERİ</span>
        </div>

        <div class="row align-items-center">
            <div class="col-auto">
                <a class="gallery-arrow" id="gallery-prev">
                    <i class="fa-solid fa-arrow-left-long"></i>
                </a>
            </div>

            <div class="col" style="min-width:0">
                <div id="gallery-pages">
                    <div class="row g-3">
                        <?php foreach ($galleryItems as $item): ?>
                            <?php
                                $url = $galleryUrl . '/' . rawurlencode(basename($item['path']));
                                $safeUrl = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
                            ?>
                
                            <div class="col-12 col-sm-6 col-lg-4 gallery-item">
                                <figure class="m-0">
                                    <a href="<?= $safeUrl ?>"
                                       data-fancybox="facility-gallery"
                                       class="facility-image-link"
                                    >
                        
                                        <?php if ($item['type'] === 'image'): ?>
                                            <img src="<?= $safeUrl ?>"
                                                 class="facility-image"
                                                 alt="Tesis Görseli">
                                        <?php else: ?>
                                            <video class="facility-video"
                                                   muted
                                                   playsinline
                                                   preload="metadata">
                                                <source
                                                    src="<?= $safeUrl ?>"
                                                    type="<?= strtolower(pathinfo($item['path'], PATHINFO_EXTENSION)) === 'mov' ? 'video/quicktime' : 'video/mp4' ?>">
                                            </video>
                                        <?php endif; ?>
                                    </a>
                                </figure>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a class="gallery-arrow" id="gallery-next">
                    <i class="fa-solid fa-arrow-right-long"></i>
                </a>
            </div>
        </div>
    </div>
</section>