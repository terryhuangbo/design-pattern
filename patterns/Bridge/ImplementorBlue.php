<?php

namespace Patterns\Bridge;

/**
 * Concrete Implementor.
 */
class ImplementorBlue extends ImplementorColor
{
    public function __construct()
    {
        $this->value = 'blue';
    }

    /**
     * 着色.
     */
    public function paint()
    {
        echo $this->value;
    }
}
