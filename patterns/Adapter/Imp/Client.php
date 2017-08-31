<?php

namespace Patterns\Adapter\Imp;

/**
 * 客户端程序.
 */
class Client
{
    /**
     * Main program.
     */
    public static function main()
    {
        $adaptee = new Adaptee();
        $adapter = new Adapter($adaptee);
        $adapter->hello();
        $adapter->world();
    }
}
