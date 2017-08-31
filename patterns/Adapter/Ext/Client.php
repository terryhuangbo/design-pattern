<?php

namespace Patterns\Adapter\Ext;

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
        $adapter = new Adapter();
        $adapter->hello();
        $adapter->world();
    }
}
