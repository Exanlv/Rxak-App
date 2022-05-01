<?php

namespace Rxak\Framework\Routing\Routes;

use Rxak\App\Http\Controllers\Home\HomeController;
use Rxak\Framework\Middleware\CsrfMiddleware;
use Rxak\Framework\Middleware\StartSessionMiddleware;
use Rxak\Framework\Routing\Route;
use Rxak\Framework\Routing\Router;

$router = Router::getInstance();

$homeRoutes = Route::group(
    ['middlewares' => [StartSessionMiddleware::class, CsrfMiddleware::class]],
    [
        Route::get('/^\/$/', HomeController::class, 'home'),
    ]
);

$router->registerRoutes(
    ...$homeRoutes,
);