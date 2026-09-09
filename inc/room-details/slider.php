<?php

$folder = 'images/rooms/' . $room['key'];

$images = glob(
    $folder . '/*.{jpg,jpeg,png,webp}',
    GLOB_BRACE
);

?>

<div class="bxslider">

    <?php foreach ($images as $index => $image): ?>

        <div class="slider-content">

            <figure class="image-box">
                <a
                    href="<?= $image ?>"
                    class="lightbox-image"
                    data-fancybox="gallery"
                >
                    <img src="<?= $image ?>" alt="">
                </a>
            </figure>

            <div class="slider-pager">
                <ul class="thumb-box">

                    <?php foreach ($images as $thumbIndex => $thumb): ?>

                        <li class="mb-0">
                            <a
                                class="<?= $thumbIndex === $index ? 'active' : '' ?>"
                                data-slide-index="<?= $thumbIndex ?>"
                                href="#"
                            >
                                <figure>
                                    <img src="<?= $thumb ?>" alt="">
                                </figure>
                            </a>
                        </li>

                    <?php endforeach; ?>

                </ul>
            </div>

        </div>
    <?php endforeach; ?>
</div>