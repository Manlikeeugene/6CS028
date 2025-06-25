<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('db-test', function () {
    $db = \Config\Database::connect();
    echo "Database Connected! MySQL Version: " . $db->getVersion();
});


$routes->get('/', 'Portfolio::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

    