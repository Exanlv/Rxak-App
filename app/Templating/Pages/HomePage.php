<?php

namespace Rxak\App\Templating\Pages;

use Rxak\Framework\Templating\Page;

class HomePage extends Page
{
    public function __construct(
        public string $body
    ) {
    }

    public static function getFile(): string
    {
        return 'views/home';
    }

    public function build(): string
    {
        return (string) new BasePage($this->buildPart());
    }
}