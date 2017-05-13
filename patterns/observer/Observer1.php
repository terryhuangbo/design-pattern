<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\Observer;

class Observer1 extends Observer
{
    public function update($argument)
    {
        print_r('Observer1 has been updated');
        print_r('the argument is :'.$argument);
    }
}
