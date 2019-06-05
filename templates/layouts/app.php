<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="description" content="<?php echo $this->renderBlock('description'); ?>">
    <title><?php echo $this->renderBlock('title'); ?></title>
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <?php echo $this->renderBlock('style') ?>
</head>
<body class="background__on">
<main class="main">
    <section id="navigation" class="white navigation">
        <header class="navigation__header">
            <a href="/">
                <h1>ТСЖ "Центральное"</h1>
                <img src="/img/logo.png" class="navigation__logo" alt="">
            </a>
            <p>Екатеринбург, 8 Марта, 7</p>
        </header>
        <nav class="navigation__menu">
            <ul class="navigation__list">
                <li><a class="navigation__news" href="/news/news.php">Новости</a></li>
                <li><a class="navigation__homeowners" href="/homeowners/homeowners.php">Наше ТСЖ</a></li>
                <li><a class="navigation__manual" href="/">Справочник</a></li>
                <li><a class="navigation__counters" href="/">Счётчики</a></li>
                <li><a class="navigation__payment" href="/">Оплата</a></li>
                <li><a class="navigation__rate" href="/">Тарифы</a></li>
                <li><a class="navigation__report" href="/report/report.php">Отчётность</a></li>
                <li><a class="navigation__gallery" href="/gallery/gallery.php">Галерея</a></li>
            </ul>
        </nav>
        <footer class="navigation__footer">
            <p>ТСЖ "Центральное" 2008-<?php echo date('Y'); ?></p>
        </footer>
    </section>
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
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php echo $this->renderBlock('script') ?>
</body>
</html>