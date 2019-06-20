<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <meta name="description" content="<?php echo $this->renderBlock('description'); ?>">
    <title><?php echo $this->renderBlock('title'); ?></title>
    <link rel="stylesheet" href="/css/normalize.css">
    <style>
        @media only screen and (max-width: 1200px) {
            .navigation__menu {
                width: 60% !important;
            }

            .navigation__menu a {
                padding: 15px;
                border-bottom: solid 1px #000;
                padding-left: 0 !important;
            }
        }
    </style>
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
        <?php require __DIR__ . '/_nav.php'; ?>
        <footer class="navigation__footer">
            <p>ТСЖ "Центральное" 2008-<?php echo date('Y'); ?></p>
        </footer>
    </section>
    <?php echo $this->renderBlock('content') ?>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php echo $this->renderBlock('script') ?>
</body>
</html>