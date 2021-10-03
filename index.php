<?php

require './vendor/autoload.php';

error_reporting(E_ALL); 


date_default_timezone_set("America/Sao_Paulo");    
session_start();

$request = new Framework\Request\Request();

$router = new Framework\Router\Routing();
App\Config\Router::configRouters($router);
$router->setBaseUrl('http://localhost');

$middleware = new Framework\Middleware\Middleware();

App\Config\Middleware::config($middleware);

$app = new Framework\App\App($request, $middleware, $router);

$app->run();