<?php

namespace Patterns\Command;

use Patterns\TestInterface;

/**
 * Class Test.
 */
class Test implements TestInterface
{
    public function run($argument)
    {
        Client::request();
    }
}
