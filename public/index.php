<?php

require __DIR__.'/../vendor/autoload.php';

use App\Controllers\MainController;
use App\Inc\Router;

$uri = $_SERVER['REQUEST_URI'];
$container = new \App\ServiceContainer();

// Binding
$container->set(\App\Inc\DB::class, function () {
    return new \App\Inc\DB();
});

$container->set(MainController::class, function ($container) {
    return new MainController($container->get(\App\Inc\DB::class));
});

$router = new Router($uri, $container);

$router->get('/test', MainController::class, 'test');
$router->get('/rahul', MainController::class, 'rahul');
