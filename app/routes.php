<?php

namespace App\Controllers;
use App\Controllers\ExampleController;
use App\Core\Router;

    $router->get('posts', 'AdminController@index');
    $router->post('users/create', 'AdminController@create');
?>