<?php

namespace Patterns\Factory;


/**
 * Class Product2
 * @package Patterns\Factory
 */
class Product2 extends Product
{
    /**
     * Product2 constructor.
     */
    public function __construct()
    {
        // Defined the attributes of this product to make it differs from others
        $this->name = "Name of Product2";
        $this->attribute1 = "Attribute1 of Product2";
        $this->attribute2 = "Attribute2 of Product2";
    }

    /**
     * @return void
     */
    public function process1()
    {
        print_r("Defined your procedure1 for product2 here". '<br>');
    }


    /**
     * @return void
     */
    public function process2()
    {
        print_r("Defined your procedure2 for product2 here". '<br>');
    }


}
