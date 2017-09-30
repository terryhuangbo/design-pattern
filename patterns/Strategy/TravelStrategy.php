<?php

namespace Patterns\Strategy;

/**
 * 策略模式
 * 定义一系列的算法,把每一个算法封装起来, 并且使它们可相互替换。本模式使得算法可独立于使用它的客户而变化.
 */

/**
 * 出行旅游.
 */
interface TravelStrategy
{
    public function travelAlgorithm();
}
