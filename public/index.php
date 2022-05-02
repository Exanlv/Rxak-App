<?php

use Rxak\App\App;
use Rxak\Framework\Filesystem\Filesystem;
use Rxak\App\Routes\Router;
use Rxak\Framework\Http\Request;

require '../vendor/autoload.php';

Filesystem::init(__DIR__ . '/..');
App::init();

$request = Request::createFromGlobals();

$router = Router::getInstance();

$router->loadRoutes();
$router->handleRequest($request);
