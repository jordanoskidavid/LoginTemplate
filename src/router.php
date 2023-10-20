<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    '/' => 'controllers/index.php',
];
$functions = new Functions();
$functions->routeToController($uri, $routes);