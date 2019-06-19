<?php

use Crudch\Routing\Router;

/**
 * @var Router $route
 */

// Главная страница
$route->get('/', 'MainController@index');

// 1. Новости
$route->group('/news', static function (Router $router) {
    $router->get('/', 'NewsController@index');
    $router->get('/{id:\d+}', 'NewsController@show');
});

// 2. Наше ТСЖ
$route->get('/homeowners', 'MainController@homeowners');
// 3. Услуги
$route->get('/services', 'MainController@services');
// 4. Отчетность
$route->get('/report', 'MainController@report');
// 5. Справочник
$route->get('/manual', 'MainController@manual');
// 6. Полезное
$route->get('/helpful', 'MainController@helpful');

// 7. Галерея
$route->group('/gallery', static function (Router $router) {
    $router->get('/', 'GalleryController@index');
    $router->get('/{slug}', 'GalleryController@show');
});
