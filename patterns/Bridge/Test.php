<?php

namespace Patterns\Bridge;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        Client::main();
    }
}
