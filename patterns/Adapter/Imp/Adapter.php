<?php

namespace Patterns\Adapter\Imp;

/**
 * 对象适配器角色.
 */
class Adapter implements Target
{
    private $adaptee;

    /**
     * construct.
     *
     * @param Adaptee $adaptee
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * 源类中没有world方法，在此补充.
     */
    public function hello()
    {
        $this->adaptee->greet();
    }

    /**
     * 源类中没有world方法，在此补充.
     */
    public function world()
    {
        $this->adaptee->world();
    }
}
