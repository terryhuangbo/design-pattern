<?php

namespace Patterns\Adapter;

use Patterns\TestInterface;
use Patterns\Adapter\Ext\Client as ExtClient;
use Patterns\Adapter\Imp\Client as ImpClient;

class Test implements TestInterface
{
    public function run($argument)
    {
        echo '这是类适配器，使用的是继承';
        ExtClient::main();

        echo '<br><br>';

        echo '这是对象适配器，使用的是委派';
        ImpClient::main();
    }
}
