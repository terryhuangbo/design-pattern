<?php

namespace Patterns\Adapter\Ext;

/**
 * 类适配器角色.
 */
class Adapter extends Adaptee implements Target
{
    /**
     * 源类中没有world方法，在此补充.
     */
    public function hello()
    {
        parent::greet();
    }
}
