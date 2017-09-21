<?php

namespace Patterns\Flyweight;

use Patterns\TestInterface;
use Patterns\Flyweight\Simple\Client as SimpleClient;
use Patterns\Flyweight\Complex\Client as ComplexClient;

class Test implements TestInterface
{
    public function run($argument)
    {
        SimpleClient::main();

        echo '<br>';

        ComplexClient::main();
    }
}
