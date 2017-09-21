<?php

namespace Patterns\Flyweight\Simple;

/**
 * 享元工厂角色.
 */
class FlyweightFactory
{
    private $_flyweights;

    public function __construct()
    {
        $this->_flyweights = array();
    }

    public function getFlyweigth($state)
    {
        if (isset($this->_flyweights[$state])) {
            return $this->_flyweights[$state];
        } else {
            return $this->_flyweights[$state] = new ConcreteFlyweight($state);
        }
    }
}
