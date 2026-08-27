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
        <!-- <h2>Luxury Rooms & Suites</h2> -->
      </div>
      <div class="row">
        <!-- room-block -->
         <?php foreach($room_items as $item): ?>
        <div class="room-block col-lg-6 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="<?= $item['img'] ?>" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title">
                <a href="room-details.html">
                  <?= $item['title'] ?>
                </a>
              </h6>
              <span class="price">150$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="room-details.html" class="book-btn">İNCELE</a>
              <ul class="bx-links">
                <li><a href="room-details.html"><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <!-- room-block -->
        <!-- <div class="room-block col-lg-6 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn" data-wow-delay="200ms">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="images/resource/room-2.jpg" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="room-details.html">Family Room</a></h6>
              <span class="price">200$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="room-details.html" class="book-btn">book now</a>
              <ul class="bx-links">
                <li><a href="room-details.html"><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div> -->
        <!-- room-block -->
        <!-- <div class="room-block col-lg-3 col-md-6 col-sm-12">
          <div class="inner-box wow fadeIn" data-wow-delay="300ms">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="images/resource/room-3.jpg" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="room-details.html">Double Room</a></h6>
              <span class="price">250$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="room-details.html" class="book-btn">book now</a>
              <ul class="bx-links">
                <li><a href="room-details.html"><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div> -->
        <!-- room-block -->
        <!-- <div class="room-block col-lg-6 col-md-6 col-sm-12">
          <div class="inner-box large-style wow fadeIn" data-wow-delay="400ms">
            <div class="image-box">
              <figure class="image-2 overlay-anim"><img src="images/resource/room-4.jpg" alt=""></figure>
            </div>
            <div class="content-box">
              <h6 class="title"><a href="room-details.html">Double Room</a></h6>
              <span class="price">250$ / NIGHT</span>
            </div>
            <div class="box-caption">
              <a href="room-details.html" class="book-btn">book now</a>
              <ul class="bx-links">
                <li><a href="room-details.html"><i class="fa fa-wifi"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-bed"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-bath"></i></a></li>
                <li><a href="room-details.html"><i class="fa fa-shower"></i></a></li>
              </ul>
            </div>
          </div>
        </div> -->
        <!-- room-block -->
        <!-- <div class="room-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box wow fadeIn" data-wow-delay="500ms">
              <div class="image-box">
                <figure class="image-2 overlay-anim"><img src="images/resource/room-5.jpg" alt=""></figure>
              </div>
              <div class="content-box">
                <h6 class="title"><a href="room-details.html">Deluxe Room</a></h6>
                <span class="price">300$ / NIGHT</span>
              </div>
              <div class="box-caption">
                <a href="room-details.html" class="book-btn">book now</a>
                <ul class="bx-links">
                  <li><a href="room-details.html"><i class="fa fa-wifi"></i></a></li>
                  <li><a href="room-details.html"><i class="fa fa-bed"></i></a></li>
                  <li><a href="room-details.html"><i class="fa fa-bath"></i></a></li>
                  <li><a href="room-details.html"><i class="fa fa-shower"></i></a></li>
                </ul>
              </div>
            </div>
        </div> -->
      </div>
    </div>
</section>