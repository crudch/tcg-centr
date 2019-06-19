<?php
/**
 * @var \App\Models\Menu[] $menu
 */
$menu = remember('menu', static function () {
    return \App\Models\Menu::items();
});

$uri = request()->uri();
?>
<nav class="navigation__menu">
    <ul class="navigation__list">
        <?php foreach($menu as $item) : ?>
            <li>
                <a class="<?php echo $item->class; ?><?php echo 0 === strpos($uri, $item->slug) ? ' active' : ''; ?>"
                        href="/<?php echo $item->slug; ?>">
                    <?php echo e($item->title); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
