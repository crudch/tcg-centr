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
<?php var_dump(request()) ?>
<?php $this->stop(); ?>

<?php $this->start('script'); ?>
<?php $this->stop(); ?>