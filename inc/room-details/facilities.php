<div class="mt-40">
	<h4>Oda Olanakları</h4>
		<div class="row room-facility-list mb-40">
        <?php foreach($room['facilities'] as $facilities): ?>
		    <div class="col-sm-6 col-xl-4">
			    <div class="list-one d-flex align-items-center me-sm-4 mb-3">
				    <div class="icon text-theme-color1 mr-10 flex-shrink-0">
                      <i class="<?= $facilities['icon'] ?>"></i>
                    </div>
						<h6 class="title m-0">
                            <?= $facilities['label'] ?>
                        </h6>
				</div>
			</div>
        <?php endforeach; ?>
	</div>
</div>