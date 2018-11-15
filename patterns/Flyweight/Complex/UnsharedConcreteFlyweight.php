<?php

namespace Patterns\Flyweight\Complex;

/**
 * 不共享的具体享元，客户端直接调用。
 */
class UnsharedConcreteFlyweight extends Flyweight
{
    /**
     * @var Flyweight[]
     */
    private $_flyweights;

    /**
     * 构造方法.
     */
    public function __construct()
    {
        $this->_flyweights = array(); // 可以为迭代器
    }

    /**
     * @param string $state
     */
    public function operation($state)
    {
        foreach ($this->_flyweights as $flyweight) {
            $flyweight->operation($state);
        }
    }

    /**
     * @param $state
     * @param Flyweight $flyweight
     */
    public function add($state, Flyweight $flyweight)
    {
        $this->_flyweights[$state] = $flyweight;
    }
}
