<?php

namespace Patterns\Flyweight\Simple;

class Client
{
    public static function main()
    {
        $flyweightFactory = new FlyweightFactory();
        $flyweight = $flyweightFactory->getFlyweigth('state A');
        $flyweight->operation('other state A');

        $flyweight = $flyweightFactory->getFlyweigth('state B');
        $flyweight->operation('other state B');
    }
}
