<?php

namespace Patterns\Flyweight\Complex;

class Client
{
    public static function main()
    {
        /* 简单对象*/
        $flyweightFactory = new FlyweightFactory();
//        $flyweight = $flyweightFactory->getFlyweigth('state A');
//        $flyweight->operation('other state A');
//
//        $flyweight = $flyweightFactory->getFlyweigth('state B');
//        $flyweight->operation('other state B');

        /* 复合对象*/
        $uflyweight = $flyweightFactory->getFlyweigth(array('state A', 'state B'));
        $uflyweight->operation('other state A');
    }
}
