<?php

namespace Patterns\Flyweight\Complex;

/**
 * 不共享的具体享元，客户端直接调用。
 */
class UnsharedConcreteFlyweight extends Flyweight
{
    private $_flyweights;

    /**
     * 构造方法.
     */
    public function __construct()
    {
        $this->_flyweights = array(); // 可以为迭代器
    }

    public function operation($state)
    {
        foreach ($this->_flyweights as $flyweight) {
            $flyweight->operation($state);
        }
    }

    public function add($state, Flyweight $flyweight)
    {
        $this->_flyweights[$state] = $flyweight;
    }
}
