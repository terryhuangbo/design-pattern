<?php

namespace Patterns\Flyweight\Complex;

/**
 * 享元工厂角色.
 */
/**
 * Class FlyweightFactory.
 */
class FlyweightFactory
{
    /**
     * @var Flyweight[]
     */
    private $_flyweights;

    public function __construct()
    {
        $this->_flyweights = array();
    }

    /**
     * @param $state
     *
     * @return mixed|null|ConcreteFlyweight|UnsharedConcreteFlyweight
     */
    public function getFlyweigth($state)
    {
        if (is_array($state)) { //  组合模式
            $uFlyweight = new UnsharedConcreteFlyweight();

            foreach ($state as $row) {
                $uFlyweight->add($row, $this->getFlyweigth($row));
            }

            return $uFlyweight;
        } else {            // 简单享元模式
            if (is_string($state)) {
                if (isset($this->_flyweights[$state])) {
                    return $this->_flyweights[$state];
                } else {
                    return $this->_flyweights[$state] = new ConcreteFlyweight($state);
                }
            } else {
                return null;
            }
        }
    }
}
