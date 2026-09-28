<div class="sidebar__single sidebar__post">
	<h3 class="sidebar__title">Fiyat Bilgisi</h3>
	<ul class="sidebar__post-list list-unstyled">
    <?php foreach($room['compare'] as $compare): ?>
		<li>
			<!-- <div class="sidebar__post-image">
                <img src="<?= $compare['img'] ?>" alt="">
            </div> -->
			<div class="sidebar__post-content">
				<h3> 
                    <span class="sidebar__post-content-meta">
                        <i class="far fa-door-open"></i>
                        <?= $compare['title'] ?>
                    </span> 
                    <a href="https://wa.me/905327230273" target="_blank">
                        <?= $compare['price'] ?>
                    </a>
				</h3>
			</div>
		</li>
    <?php endforeach; ?>
	</ul>
</div>