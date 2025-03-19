<?php

/** @var Bramus\Router\Router $router */

$router->mount('/api', function () use ($router) {
// Define routes here
    $router->get('/test', App\Controllers\IndexController::class . '@test');
    $router->get('/', App\Controllers\IndexController::class . '@test');


    $router->get('/admin/users', App\Controllers\AdminUsersController::class . '@index');
    $router->get('/admin/users/(\d+)', App\Controllers\AdminUsersController::class . '@show');
    $router->post('/admin/users/login', App\Controllers\AdminUsersController::class . '@login');
    $router->post('/admin/users/logout/(\d+)', App\Controllers\AdminUsersController::class . '@logout');
    $router->post('/admin/users', App\Controllers\AdminUsersController::class . '@store');



});