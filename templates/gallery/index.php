<?php
/**
 * @var \Crudch\View\View $this
 * @var \App\Models\Gallery[] $gallery
 */
?>

<?php $this->extend('layouts/app'); ?>

<?php $this->start('title'); ?>ТСЖ «Центральное» Галерея<?php $this->stop(); ?>
<?php $this->start('description'); ?>Галерея ТСЖ «Центральное»<?php $this->stop(); ?>

<?php $this->start('content'); ?>
    <section id="gallery" class="gallery">
        <div class="gallery__block">
            <h1>Галерея</h1>
            <?php foreach($gallery as $item) : ?>
                <div class="gallery__item">
                    <a href="<?php echo url('/gallery/' . $item->slug); ?>">
                        <img class="gallery__image" src="<?php echo $item->preview; ?>" alt="<?php echo e($item->title); ?>">
                    </a>
                    <p><?php echo e($item->title); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php $this->stop(); ?>