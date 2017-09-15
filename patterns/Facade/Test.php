<?php

namespace Patterns\Facade;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        Client::open();
        Client::close();
    }
}
