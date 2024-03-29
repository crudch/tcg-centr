<?php

namespace App\Middleware;

/**
 * Class Registrator
 *
 * @package App\Middleware
 */
class Registrator
{
    /**
     * @var array
     */
    public static $registry = [
        'global' => [
            //\Crudch\Middleware\SessionMiddleware::class,
        ],
        'web'    => [
            \Crudch\Middleware\Handlers\WebHandlerMiddleware::class,
        ],
        'api'    => [
            \Crudch\Middleware\Handlers\ApiHandlerMiddleware::class,
        ],
    ];

    /**
     * @var array
     */
    public static $middleware = [
        'profiler' => ProfilerMiddleware::class,
    ];
}
