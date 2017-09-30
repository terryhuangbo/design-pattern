<?php

namespace Patterns\Template;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        $template = new DrawMoney();
        $template->process();
    }
}
