<?php
/**
 * @var \Crudch\View\View   $this
 * @var \App\Models\Article $article
 */
?>

<?php $this->extend('layouts/index'); ?>

<?php $this->start('title'); ?>ТСЖ «Центральное»<?php $this->stop(); ?>
<?php $this->start('description'); ?>Официальный сайт ТСЖ «Центральное»<?php $this->stop(); ?>

<?php $this->start('content'); ?>
    <section id="primary" class="primary">
        <div class="primary__clear">
        </div>
        <footer id="primary__footer" class="primary__footer">
            <div class="primary__header">
                <h3>Товарищество собственников жилья "Центральное"</h3>
                <p>Екатеринбург, 8 Марта, 7</p>
            </div>
            <div class="primary__news">
                <p><span><?php echo $article->datePublish(); ?></span></p>
                <h3><?php echo $article->title; ?></h3>
                <p><?php echo e(limit($article->subtitle, 80)); ?></p>
            </div>
        </footer>
    </section>
<?php $this->stop(); ?>