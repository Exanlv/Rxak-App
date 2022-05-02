<?php

namespace Rxak\App;

use Rxak\Framework\App as FrameworkApp;

class App extends FrameworkApp
{
    public static function init(): void
    {
        parent::init();

        parent::initDb();
    }

    public static function terminate(): void
    {
        parent::terminate();
    }
}