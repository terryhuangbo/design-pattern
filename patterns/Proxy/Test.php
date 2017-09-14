<?php

namespace Patterns\Proxy;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        header('Content-type:text/html;charset=UTF-8');
        Client::main();
        //Client::Genericmain();
    }
}
