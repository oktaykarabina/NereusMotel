<?php

$roomsConfig = require __DIR__ . '/../../config/room.php';

$roomKey = $_GET['room'] ?? '';

if (!is_string($roomKey) || $roomKey === '') {
    http_response_code(400);
    exit('Oda belirtilmedi.');
}

$room = null;

foreach ($roomsConfig['room_items'] as $item) {
    if ($item['key'] === $roomKey) {
        $room = $item;
        break;
    }
}

if ($room === null) {
    http_response_code(404);
    exit('Oda bulunamadı.');
}

// Yalnızca modalın içeriğini döndür.
?>

<div class="product-details rd-page">

    <?php include __DIR__ . '/slider.php'; ?>

    <?php include __DIR__ . '/description.php'; ?>

    <?php include __DIR__ . '/facilities.php'; ?>

    <?php include __DIR__ . '/compare.php'; ?>

</div>