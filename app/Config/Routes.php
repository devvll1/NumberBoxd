<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Main web page
$routes->get('/', 'Login::login'); 
//Post method for login user
$routes->post('/login', 'Login::login');

$routes->group('', ['filter' => 'AuthUser'], function($routes) {
    //Get method wihtout parameter
    $routes->get('/user/list', 'User::list'); 
    $routes->get('/user/add', 'User::add');
    $routes->get('/confirm_logout', 'Logout::confirmLogout');
    $routes->get('/logout', 'Logout::logout');

    //Get method with parameter for view
    $routes->get('/user/view/(:num)', 'User::view/$1');

    //Get method with parameter for edit
    $routes->get('/user/edit/(:num)', 'User::edit/$1');

    //Get method with parameter for delete
    $routes->get('/user/delete/(:num)', 'User::delete/$1');

    //Post method for adding data
    $routes->post('/user/add', 'User::add');

    //Post method for updating data
    $routes->post('/user/edit/(:num)', 'User::edit/$1');

    //Post method for deleting data
    $routes->post('/user/delete/(:num)', 'User::delete/$1');  
    
    //Get Methods
    $routes->get('/movie/list', 'Movie::list'); 
    $routes->get('/movie/add', 'Movie::add');
    $routes->get('/movie/view/(:num)', 'Movie::view/$1');
    $routes->get('/movie/edit/(:num)', 'Movie::edit/$1');
    $routes->get('/movie/delete/(:num)', 'Movie::delete/$1');

    // Post method for adding movie
    $routes->post('/movie/add', 'Movie::add');
    // Post method for updating movie
    $routes->post('/movie/edit/(:num)', 'Movie::edit/$1');
    // Post method for deleting movie
    $routes->post('/movie/delete/(:num)', 'Movie::delete/$1'); 
});

