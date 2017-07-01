<?php

namespace Patterns\Factory;


/**
 * Class Product1
 * @package Patterns\Factory
 */
class Product1 extends Product
{
    /**
     * Product1 constructor.
     */
    public function __construct()
    {
        // Defined the attributes of this product to make it differs from others
        $this->name = "Name of Product1";
        $this->attribute1 = "Attribute1 of Product1";
        $this->attribute2 = "Attribute2 of Product1";
    }

    /**
     * @return void
     */
    public function process1()
    {
        parent::process1();
        print_r("The product is under procedure 1 again". '<br>');
    }


}
