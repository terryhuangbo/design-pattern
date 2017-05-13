<?php

namespace Patterns\Observer;

use Patterns\Observer\Interfaces\Subject as AbstractSubject;

class Subject extends AbstractSubject
{
    public function change($arguments = '')
    {
        //do something else

        var_dump($this->getName().' begins to change!');
        $this->notify($arguments);
    }
}
