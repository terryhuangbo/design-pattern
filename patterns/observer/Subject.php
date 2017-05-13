<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\Subject as AbstractSubject;

class Subject extends AbstractSubject
{
    public function change($argument = '')
    {
        //do something else

        $this->notify($argument);
    }
}
