<?php

define('APP_TITLE', 'MVC-FRAMWORK');
define('BASE_URL', 'http://localhost:8000');
define('BASE_DIR', realpath(__DIR__ . '../'));


$currentRoute = explode('?', $_SERVER['REQUEST_URI']);
$currentRoute = trim('/ ', $currentRoute[0]);
define('CURRENT_ROUTE', $currentRoute);

global $routes;
$routes = [
    'get' => [],
    'post' => [],
    'put' => [],
    'delete' => []
];
