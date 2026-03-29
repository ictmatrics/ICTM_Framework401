<?php declare(strict_types=1);

/**
 * --------------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------------
 *
 * This file is where you define all of your application's routes. It is
 * included by the bootstrapper and should be used to add routes to the
 * $router instance.
 *
 * Example Syntax:
 * $router->get('/users', 'UserController@index');
 * $router->post('/users', 'UserController@store');
 * $router->get() for normal page and data display
 * $router->post() for post form for porcessing isset($_post)
 * $router->any() for both post and get
 * 
 */

$router->get('', 'HomeController@index');  
  
