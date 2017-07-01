<?php

namespace Patterns\Factory;


/**
 * Class Creator
 * @package Patterns\Factory
 */
class Creator1 extends Creator
{
    /**
     * Create a product.
     *
     * @param  mixed $type
     * @return Product
     */
    protected function factoryMethod($type)
    {
        if ($type == 'product1') {
            return new Product1();
        } elseif ($type == 'product2') {
            return new Product2();
        }
        // ... get more Product here
    }


}
