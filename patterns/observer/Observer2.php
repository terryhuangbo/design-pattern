<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\Observer;

class Observer2 extends Observer
{
    public function update($argument)
    {
        print_r('Observer2 has been updated');
        print_r('the argument is :'.$argument);
    }
}
