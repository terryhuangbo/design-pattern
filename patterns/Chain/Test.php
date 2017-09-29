<?php

namespace Patterns\Chain;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        Client::main();
        echo '<br>';
        Client::main2();
        echo '<br>';
        Client::main3();
    }
}
