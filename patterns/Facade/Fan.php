<?php

namespace Patterns\Facade;

/**
 * 电风扇.
 */
class Fan
{
    private $_isOpen = 0;

    public function on()
    {
        echo 'Fan is open', '<br/>';
        $this->_isOpen = 1;
    }

    public function off()
    {
        echo 'Fan is off', '<br/>';
        $this->_isOpen = 0;
    }
}
