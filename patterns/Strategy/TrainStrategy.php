<?php

namespace Patterns\Strategy;

/**
 * 具体策略类(ConcreteStrategy)2：乘坐火车.
 */
class TrainStrategy implements TravelStrategy
{
    public function travelAlgorithm()
    {
        echo 'travel by Train', "<BR>\r\n";
    }
}
