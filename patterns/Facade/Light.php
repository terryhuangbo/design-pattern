<?php

namespace Patterns\Facade;

/**
 * 电灯.
 */
class Light
{
    private $_isOpen = 0;

    public function on()
    {
        echo 'Light is open', '<br/>';
        $this->_isOpen = 1;
    }

    public function off()
    {
        echo 'Light is off', '<br/>';
        $this->_isOpen = 0;
    }
}
