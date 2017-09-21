<?php

namespace Patterns\Flyweight\Simple;

/**
 * 具体享元角色.
 */
class ConcreteFlyweight extends Flyweight
{
    private $_intrinsicState = null;

    /**
     * 构造方法.
     *
     * @param string $state 内部状态，共享状态，不可改变
     */
    public function __construct($state)
    {
        $this->_intrinsicState = $state;
    }

    /**
     * @param string $state 外部状态，定制状态，可以改变
     */
    public function operation($state)
    {
        echo 'ConcreteFlyweight operation, Intrinsic State = '.$this->_intrinsicState
            .' Extrinsic State = '.$state.'<br />';
    }
}
