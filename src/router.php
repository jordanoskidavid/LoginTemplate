<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'controllers/index.php',
    '/register' => 'controllers/register.php',
    '/login' => 'controllers/login.php'
];
$functions = new Functions();
$functions->routeToController($uri, $routes);