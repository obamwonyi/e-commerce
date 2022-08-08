<?php 
require_once __DIR__. "/../vendor/autoload.php";

use Framework\Routing\Router;

$router = new Router(); 

$routes = include_once __DIR__ . "/../app/routes.php";

$routes($router);

print $router->dispatch();