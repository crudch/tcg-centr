<?php
/**
 * @var \Crudch\View\View $this
 * @var \App\Models\Gallery $gallery
 */
?>

<?php $this->extend('layouts/app'); ?>

<?php $this->start('title'); ?>ТСЖ «Центральное» Галерея - <?php echo e($gallery->title); ?><?php $this->stop(); ?>
<?php $this->start('description'); ?><?php echo e($gallery->title); ?> - галерея ТСЖ «Центральное»<?php $this->stop(); ?>

<?php $this->start('style'); ?>
    <link rel="stylesheet" href="/css/lightbox.css">
<?php $this->stop(); ?>

<?php $this->start('content'); ?>
    <section id="gallery" class="gallery">
        <div class="gallery__block">
            <?php foreach($gallery->items as $item) : ?>
                <div class="gallery__item">
                    <a href="<?php echo $item->image; ?>" data-lightbox="<?php echo e($gallery->slug); ?>">
                        <img class="gallery__image" src="<?php echo $item->image; ?>" alt="<?php echo e($gallery->title); ?> - <?php echo $item->id; ?>"></a>
                </div>
            <?php endforeach; ?>

            <div class="gallery__item">
                <a href="<?php echo url('/gallery'); ?>"><img class="gallery__image" src="/img/back.png" alt="Обратно"></a>
            </div>
        </div>
    </section>
<?php $this->stop(); ?>

<?php $this->start('script'); ?>
    <script src="/js/lightbox.js"></script>
<?php $this->stop(); ?>