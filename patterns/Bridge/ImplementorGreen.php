<?php

namespace Patterns\Bridge;

/**
 * Concrete Implementor.
 */
class ImplementorGreen extends ImplementorColor
{
    public function __construct()
    {
        $this->value = 'green';
    }

    /**
     * 着色.
     */
    public function paint()
    {
        echo $this->value;
    }
}
