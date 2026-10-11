<?php

$folder = __DIR__ . '/../../images/rooms/' . $room['key'];

$images = glob(
    $folder . '/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}',
    GLOB_BRACE
) ?: [];

$imageUrlBase = 'images/rooms/' . rawurlencode($room['key']);

?>

<div class="bxslider">

    <?php foreach ($images as $index => $image): ?>

        <?php
        $imageUrl = $imageUrlBase . '/' . rawurlencode(basename($image));
        ?>

        <div class="slider-content">

            <figure class="image-box">
                <a
                    href="<?= htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8') ?>"
                    class="lightbox-image"
                    data-fancybox="gallery"
                >
                    <img
                        src="<?= htmlspecialchars($imageUrl, ENT_QUOTES, 'UTF-8') ?>"
                        alt=""
                    >
                </a>
            </figure>

            <div class="slider-pager">
                <ul class="thumb-box">

                    <?php foreach ($images as $thumbIndex => $thumb): ?>

                        <?php
                        $thumbUrl = $imageUrlBase . '/' .
                            rawurlencode(basename($thumb));
                        ?>

                        <li class="mb-0">
                            <a
                                class="<?= $thumbIndex === $index ? 'active' : '' ?>"
                                data-slide-index="<?= $thumbIndex ?>"
                                href="#"
                            >
                                <figure>
                                    <img
                                        src="<?= htmlspecialchars($thumbUrl, ENT_QUOTES, 'UTF-8') ?>"
                                        alt=""
                                    >
                                </figure>
                            </a>
                        </li>

                    <?php endforeach; ?>

                </ul>
            </div>

        </div>

    <?php endforeach; ?>

</div>