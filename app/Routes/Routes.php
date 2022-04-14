<?php

namespace Rxak\Framework\Routing\Routes;

use Rxak\App\Http\Controllers\Home\HomeController;
use Rxak\App\Http\Controllers\Home\UserController;
use Rxak\App\Http\Validators\FeedbackValidator;
use Rxak\App\Http\Validators\UserRegisterValidator;
use Rxak\Framework\Middleware\CsrfMiddleware;
use Rxak\Framework\Middleware\StartSessionMiddleware;
use Rxak\App\Models\User;
use Rxak\Framework\Routing\Route;
use Rxak\Framework\Routing\Router;

$router = Router::getInstance();

$homeRoutes = Route::group(
    ['middlewares' => [StartSessionMiddleware::class, CsrfMiddleware::class]],
    [
        Route::get('/^\/$/', HomeController::class, 'home'),
        Route::post('/^\/test$/', HomeController::class, 'home'),
        Route::get('/^\/hello\/(.+)$/', HomeController::class, 'hello', ['mappers' => [User::class]])
    ]
);

$userRoutes = Route::group(
    ['middlewares' => [StartSessionMiddleware::class]],
    [
        Route::get('/^\/user\/register$/', UserController::class, 'register'),
        Route::post('/^\/user\/register$/', UserController::class, 'create', ['validator' => UserRegisterValidator::class]),
    ]
);

$router->registerRoutes(
    Route::post(
        '/^\/contact$/',
        HomeController::class,
        'feedback',
        [
            'validator' => FeedbackValidator::class,
        ]
    ),
    ...$homeRoutes,
    ...$userRoutes,
);