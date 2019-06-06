<?php
/**
 * @var \Crudch\View\View     $this
 * @var \App\Models\Article[] $news
 */
?>

<?php $this->extend('layouts/app'); ?>

<?php $this->start('title'); ?>ТСЖ «Центральное» Новости<?php $this->stop(); ?>
<?php $this->start('description'); ?>Новости ТСЖ «Центральное»<?php $this->stop(); ?>

<?php $this->start('content'); ?>
    <section id="news" class="news">
        <div class="news__block">
            <h1>Новости</h1>
            <?php foreach ($news as $article) : ?>
                <div class="news__item">
                    <p><?php echo $article->datePublish(); ?></p>
                    <a href="<?php echo url('/news/' . $article->id); ?>">
                        <h2><?php echo e($article->title); ?></h2>
                    </a>
                    <p><?php echo e($article->subtitle); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php $this->stop(); ?>