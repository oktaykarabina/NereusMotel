<?php 
$room_config = include __DIR__.'/../config/room.php';
$all_room_items = $room_config['room_items'];

$room_items = array_filter($all_room_items, function ($item) {
  return isset($item['visible']) && $item['visible'] === true;
})

?>

<section id="room" class="rooms-section pb-100">
    <div class="auto-container">
      <div class="sec-title text-center wow fadeInUp">
        <span class="sub-title">ODALARIMIZ</span>
      </div>
      <div class="row">
        <!-- room-block -->
         <?php foreach($room_items as $item): ?>
        <div class="room-block col-lg-6 col-md-6 col-sm-12 align-center">
          <div class="inner-box wow fadeIn">
            <div class="image-box">
              <figure class="image-2 overlay-anim">
                <img src="<?= $item['img'] ?>" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title">
                <a                 
                  href="#" 
                  class="book-btn" 
                  data-bs-toggle="modal"
                  data-bs-target="#roomModal"
                  data-room="<?= $item['key'] ?>">
                  <?= $item['title'] ?>
                </a>
              </h6>
            </div>
            <div class="box-caption">
              <!-- <a 
                href="room-details.php?room=<?= $item['key'] ?>" 
                class="book-btn" >
                İNCELE
              </a> -->
              <a 
                href="#" 
                class="book-btn" 
                data-bs-toggle="modal"
                data-bs-target="#roomModal"
                data-room="<?= $item['key'] ?>">
                İNCELE
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>