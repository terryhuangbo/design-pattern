<?php

namespace Patterns\Bridge;

/**
 * Concrete Implementor.
 */
class ImplementorBlack extends ImplementorColor
{
    public function __construct()
    {
        $this->value = 'black';
    }

    /**
     * 着色.
     */
    public function paint()
    {
        echo $this->value;
    }
}
