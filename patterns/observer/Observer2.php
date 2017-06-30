<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\Observer;

class Observer2 extends Observer
{
    public function update()
    {
        $args = func_get_args();
        var_dump('Observer2 has been updated');
        var_dump('the arguments are : '.implode(',', $args));
    }
}
