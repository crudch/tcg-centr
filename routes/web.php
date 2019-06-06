<?php

use Crudch\Routing\Router;

/**
 * @var Router $route
 */

// Главная страница
$route->get('/', 'MainController@index');

//Новости
$route->group('/news', static function (Router $router) {
    $router->get('/', 'NewsController@index');
    $router->get('/{id:\d+}', 'NewsController@show');
});

// Наше ТСЖ
$route->get('/homeowners', 'MainController@home');
// Справочник
$route->get('/manual', 'MainController@manual');
// Счетчики
$route->get('/counters', 'MainController@counters');
// Оплата
$route->get('/payment', 'MainController@payment');
// Тарифы
$route->get('/rate', 'MainController@rate');
// Отчетность
$route->get('/report', 'MainController@report');

//Галерея
$route->group('/gallery', static function (Router $router) {
    $router->get('/', 'GalleryController@index');
    $router->get('/{slug}', 'GalleryController@show');
});