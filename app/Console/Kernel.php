<?php

namespace Rxak\App\Console;

use \Rxak\Framework\Console\Kernel as RxakKernel;

class Kernel extends RxakKernel
{
    public function __construct()
    {
        parent::__construct();

        $this->loadCommands();
    }
}