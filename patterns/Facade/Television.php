<?php

namespace Patterns\Facade;

/**
 * 电视.
 */
class Television
{
    private $_isOpen = 0;

    public function on()
    {
        echo 'Television is open', '<br/>';
        $this->_isOpen = 1;
    }

    public function off()
    {
        echo 'Television is off', '<br/>';
        $this->_isOpen = 0;
    }
}
