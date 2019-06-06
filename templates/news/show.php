<?php
/**
 * @var \Crudch\View\View   $this
 * @var \App\Models\Article $article
 */
?>

<?php $this->extend('layouts/app'); ?>

<?php $this->start('title'); ?><?php echo e($article->title); ?><?php $this->stop(); ?>
<?php $this->start('description'); ?><?php echo e($article->subtitle); ?><?php $this->stop(); ?>

<?php $this->start('content'); ?>
    <section id="news" class="news">
        <div class="news__block">
            <div class="news__item">
                <p><?php echo $article->datePublish(); ?></p>
                <h2><?php echo e($article->title); ?></h2>
                <?php echo $article->body; ?>
            </div>
            <a href="<?php echo url('/news'); ?>">Назад</a>
        </div>
    </section>
<?php $this->stop(); ?>