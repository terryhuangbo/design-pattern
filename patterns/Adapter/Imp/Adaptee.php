<?php

namespace Patterns\Adapter\Imp;

/**
 * 源角色：被适配的角色.
 */
class Adaptee
{
    /**
     * 源类含有的方法.
     */
    public function world()
    {
        echo ' world <br />';
    }

    /**
     * 加入新的方法.
     */
    public function greet()
    {
        echo ' Greet ';
    }
}
