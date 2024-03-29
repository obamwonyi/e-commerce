<?php


require_once __DIR__. "/../vendor/autoload.php";

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/..");

$dotenv->load();

use Framework\Routing\Router;

$router = new Router(); 

$routes = include_once __DIR__ . "/../app/routes.php";

$routes($router);

print $router->dispatch();