<?php

namespace Patterns\Factory;

/**
 * Class Creator.
 */
class Creator1 extends Creator
{
    /**
     * Create a product.
     *
     * @param mixed $type
     *
     * @return Product
     */
    protected function factoryMethod($type)
    {
        if ('product1' == $type) {
            return new Product1();
        } elseif ('product2' == $type) {
            return new Product2();
        }
        // ... get more Product here
    }
}
