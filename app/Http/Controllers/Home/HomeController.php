<?php

namespace Rxak\App\Http\Controllers\Home;

use Rxak\App\Http\Controllers\BaseController;
use Rxak\App\Templating\Pages\HomePage;
use Rxak\Framework\Http\Request;
use Rxak\Framework\Http\Response;
use Rxak\Framework\Logging\Logger;

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
}