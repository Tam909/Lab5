<?php

use App\Controllers\Admin\MovieController;

$router->filter('auth', function(){
    if(!isset($_SESSION['user']) ){
        redirect('login');
    } else if ($_SESSION['user']->role != 'admin'){
        redirect('');
    }
});

$router->group(['prefix' => 'admin'], function ($router) {
    $router->get('/movies', [MovieController::class, 'index']);
    $router->get('/movies/create', [MovieController::class, 'create']);
    $router->post('/movies/create', [MovieController::class, 'store']);
    $router->get('/movies/edit/{id}', [MovieController::class, 'edit']);
    $router->post('/movies/edit/{id}', [MovieController::class, 'update']);
    $router->post('/movies/delete/{id}', [MovieController::class, 'destroy']);
    $router->get('/movies/show/{id}', [MovieController::class, 'show']);
    $router->get('/movies/search', [MovieController::class, 'search']);
});


