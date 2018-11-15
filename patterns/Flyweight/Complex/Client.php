<?php

namespace Patterns\Flyweight\Complex;

class Client
{
    public static function main()
    {
        /* 简单对象*/
        $flyweightFactory = new FlyweightFactory();

        /* 复合对象*/
        $uflyweight = $flyweightFactory->getFlyweigth(array('state A', 'state B'));
        $uflyweight->operation('other state A');
    }
}
