<?php

namespace Patterns\Strategy;

/**
 * 环境类(Context):用一个ConcreteStrategy对象来配置。维护一个对Strategy对象的引用。
 * 可定义一个接口来让Strategy访问它的数据。算法解决类，以提供客户选择使用何种解决方案：.
 */
class PersonContext
{
    private $strategy = null;

    public function __construct(TravelStrategy $travel)
    {
        $this->strategy = $travel;
    }

    /**
     * 旅行.
     */
    public function setTravelStrategy(TravelStrategy $travel)
    {
        $this->strategy = $travel;
    }

    /**
     * 旅行.
     */
    public function travel()
    {
        return $this->strategy->travelAlgorithm();
    }
}
