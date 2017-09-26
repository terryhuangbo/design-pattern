<?php

namespace Patterns\Builder;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        $waitor = new Waiter();

        $waitor->main();
    }
}
