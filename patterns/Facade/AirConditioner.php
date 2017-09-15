<?php

namespace Patterns\Facade;

/**
 * 空调.
 */
class AirConditioner
{
    private $_isOpen = 0;

    public function on()
    {
        echo 'AirConditioner is open', '<br/>';
        $this->_isOpen = 1;
    }

    public function off()
    {
        echo 'AirConditioner is off', '<br/>';
        $this->_isOpen = 0;
    }
}
