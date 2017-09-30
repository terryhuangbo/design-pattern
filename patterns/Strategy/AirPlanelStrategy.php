<?php

namespace Patterns\Strategy;

/**
 * 具体策略类(ConcreteStrategy)1：乘坐飞机.
 */
class AirPlanelStrategy implements TravelStrategy
{
    public function travelAlgorithm()
    {
        echo 'travel by AirPlain', "<BR>\r\n";
    }
}
