<?php

$nav_config = include __DIR__ . '/../config/navigation.php';
$all_nav_items = $nav_config['nav_items'];

$nav_items = array_filter($all_nav_items, function($item) {
    return isset($item['visible']) && $item['visible'] === true;
});

$current_page = $_GET['page'] ?? 'home';

?>

<div class="nav-outer">
    <nav class="nav main-menu">
        <ul class="navigation onepage-nav">
            <?php foreach($nav_items as $item): 
                // Aktif sayfa kontrolü (opsiyonel)
                $is_active = ($current_page === $item['url']) ? 'current' : '';
                $class = $item['class'] ?? '';
                $li_class = trim($class . ' ' . $is_active);
            ?>
                <li class="<?= $li_class ?>">
                    <a href="<?= $item['url'] ?>">
                        <?php if(isset($item['icon'])): ?>
                            <i class="fas <?= $item['icon'] ?>"></i>
                        <?php endif; ?>
                        <?= $item['title'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>