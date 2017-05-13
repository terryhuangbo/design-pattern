<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\Observer;

class Observer2 extends Observer
{
    public function update($arguments)
    {
        var_dump('Observer2 has been updated');
        var_dump('the arguments are : '.$arguments);
    }
}
