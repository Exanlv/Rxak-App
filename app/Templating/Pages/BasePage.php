<?php

namespace Rxak\App\Templating\Pages;

use Rxak\Framework\Templating\Page;

class BasePage extends Page
{
    public function __construct(
        public string $body = ''
    ) {
    }

    public static function getFile(): string
    {
        return 'views/base';
    }
}