<?php

namespace Patterns\Strategy;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        // 乘坐火车旅行
        $person = new PersonContext(new TrainStrategy());
        $person->travel();

        // 改骑自行车
        $person->setTravelStrategy(new BicycleStrategy());
        $person->travel();
    }
}
