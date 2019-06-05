<?php
/**
* @var \Crudch\View\View $this
*/
?>

<?php $this->extend('layouts/app'); ?>

<?php $this->start('title'); ?>ТСЖ «Центральное»<?php $this->stop(); ?>
<?php $this->start('description'); ?>Официальный сайт ТСЖ «Центральное»<?php $this->stop(); ?>

<?php $this->start('style'); ?>
<?php $this->stop(); ?>

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
            <p><span>24 мая 2019</span></p>
            <h3>Установка дефлекторов на вентиляцию</h3>
            <p>соседи! В нашем доме проводятся работы по установке дефлекторов на вентиляционные...</p>
        </div>
    </footer>
</section>
<?php $this->stop(); ?>

<?php $this->start('script'); ?>
<?php $this->stop(); ?>