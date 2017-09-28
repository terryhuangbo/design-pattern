<?php

namespace Patterns\Bridge;

/**
 * Concrete Implementor.
 */
class ImplementorWhite extends ImplementorColor
{
    public function __construct()
    {
        $this->value = 'white';
    }

    /**
     * 着色.
     */
    public function paint()
    {
        echo $this->value;
    }
}
