<?php
/**
 * @var \Crudch\View\View $this
 */
?>

<?php $this->extend('layouts/app'); ?>

<?php $this->start('title'); ?>ТСЖ «Центральное» Отчетность<?php $this->stop(); ?>
<?php $this->start('description'); ?>Отчетность ТСЖ «Центральное»<?php $this->stop(); ?>

<?php $this->start('content'); ?>
    <section id="report" class="report">
        <div class="report__block">
            <h1>Отчетность</h1>
            <h2>Основные показатели</h2>
            <div class="report__item">
                <a class="report__file" href="/"><h3>Годовая бухгалтерская отчетность</h3></a>
                <p>PDF, 1MB</p>
            </div>
            <div class="report__item">
                <a class="report__file" href="/"><h3>Бухгалтерский баланс</h3></a>
                <p>PDF, 1MB</p>
            </div>
            <div class="report__item">
                <a class="report__file" href="/"><h3>Приложения к бухгалтерскому балансу</h3></a>
                <p>PDF, 1MB</p>
            </div>
        </div>
    </section>
<?php $this->stop(); ?>