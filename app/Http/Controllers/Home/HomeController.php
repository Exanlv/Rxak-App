<?php

namespace Rxak\App\Http\Controllers\Home;

use Exception;
use Rxak\App\Http\Controllers\BaseController;
use Rxak\Framework\Http\Request;
use Rxak\Framework\Http\Response;
use Rxak\Framework\Logging\Logger;
use Rxak\App\Models\User;
use Rxak\Framework\Templating\Templates\HomePage;

class HomeController extends BaseController
{
    public function home(Request $request)
    {
        Logger::info('Hello there');

        return new Response(
            new HomePage('Hello world!'),
            200
        );
    }

    public function hello(Request $request, User $user)
    {
        dd($user);
        throw new Exception();
    }

    public function feedback(Request $request)
    {
        throw new \Rxak\Framework\Exception\SafeException(200, 'Hello there');
    }
}