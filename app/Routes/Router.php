<?php

namespace Rxak\App\Routes;

use Rxak\Framework\Routing\Router as RxakRouter;

class Router extends RxakRouter
{
    public function loadRoutes(): void
    {
        require __DIR__ . '/Routes.php';
    }
}