<?php

include 'Router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'app/images/index');
$router->get('names', 'app/names/index');