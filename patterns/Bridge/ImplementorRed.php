<?php

namespace Patterns\Bridge;

/**
 * Concrete Implementor.
 */
class ImplementorRed extends ImplementorColor
{
    public function __construct()
    {
        $this->value = 'red';
    }

    /**
     * 着色.
     */
    public function paint()
    {
        echo $this->value;
    }
}
