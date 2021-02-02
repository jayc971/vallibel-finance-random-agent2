<?php

include 'Router.php';

$request = $_SERVER['REQUEST_URI'];
$router = new Router($request);

$router->get('/', 'app/agents');
$router->get('names', 'app/names');
$router->get('names/white-bkg', 'app/names/white-bkg');
$router->get('today-is', 'app/today-is');