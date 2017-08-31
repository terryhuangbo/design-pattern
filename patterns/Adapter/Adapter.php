<?php

namespace Patterns\Adapter;

/**
 * If you want an interface A, but only have an interface B
 * in hand. B is similar to while not exactly the same with
 * A. Then you can make an adapter class witch implements interface A
 * to insure what you want, and inject an interface B to fulfil it.
 * You must fulfil each method in A with its corresponding method in B.
 */
class Adapter implements Target
{
    /**
     * @var Adaptee
     */
    protected $adaptee;

    /**
     * Adapter constructor.
     */
    public function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * @return mixed
     */
    public function desirable()
    {
        $this->adaptee->available();
        // do something to adapt Adaptee for Target
    }
}
