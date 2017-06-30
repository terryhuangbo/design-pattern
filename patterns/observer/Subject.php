<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\Subject as AbstractSubject;

class Subject extends AbstractSubject
{
    public function change()
    {
        $args = func_get_args();
        //do something else

        var_dump('Subject begins to change!');
        $this->notify(...$args);
    }
}
