<?php
/**
 * @var \Crudch\View\View     $this
 * @var \App\Models\Article[] $news
 * @var array                 $paginate
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

            <div class="news__pagination">
                <?php if(false !== $key = array_search('previous', $paginate, true)) : ?>
                    <a class="news__button news__button--preview" href="<?php echo url('/news?page=' . $key); ?>"></a>
                <?php else : ?>
                    <a class="news__button news__button--preview news__button--disabled" href="#"></a>
                <?php endif; ?>
                <?php if(false !== $key = array_search('next', $paginate, true)) : ?>
                    <a class="news__button news__button--next" href="<?php echo url('/news?page=' . $key); ?>"></a>
                <?php else : ?>
                    <a class="news__button news__button--next news__button--disabled" href="#"></a>
                <?php endif; ?>
            </div>

        </div>
    </section>
<?php $this->stop(); ?>