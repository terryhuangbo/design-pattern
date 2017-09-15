<?php

namespace Patterns\Facade;

/**
 * 客户类.
 */
class Client
{
    public static function open()
    {
        $f = new SwitchFacade();
        $f->night(1);
    }

    public static function close()
    {
        $f = new  SwitchFacade();
        $f->day(0);
    }
}
