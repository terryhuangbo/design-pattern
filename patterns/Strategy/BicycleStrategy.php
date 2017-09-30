<?php

namespace Patterns\Strategy;

/**
 * 具体策略类(ConcreteStrategy)3：骑自行车.
 */
class BicycleStrategy implements TravelStrategy
{
    public function travelAlgorithm()
    {
        echo 'travel by Bicycle', "<BR>\r\n";
    }
}
