<?php

namespace Patterns\Prototype;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        ini_set('display_errors', 'On');
        error_reporting(E_ALL & ~E_DEPRECATED);
        Client::Main();
    }
}
