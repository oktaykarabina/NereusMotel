<div class="wrapper">
	<!-- <h3>Description of Room</h3> -->
	<p class="text">
        <?= $room['description'] ?>
    </p>
	<div class="row justify-content-center">
		<div class="col-xl-12">
			<div class="room-details__content-right mb-40 mt-20">
				<div class="room-details__details-box">
					<div class="row">
						<div class="col-6 col-md-4">
							<p class="text mb-0">Yatak</p>
                            <?php foreach($room['bed'] as $bed): ?>
								<h6><?= $bed ?></h6>
                            <?php endforeach; ?>
						</div>
						<div class="col-6 col-md-4">
							<p class="text mb-0">Kapasite</p>
							<h6><?= $room['capacity'] ?></h6>
						</div>
						<div class="col-6 col-md-4">
							<p class="text mb-0">Manzara</p>
                            <?php foreach($room['view'] as $view): ?>
								<h6><?= $view ?></h6>
                            <?php endforeach; ?>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>