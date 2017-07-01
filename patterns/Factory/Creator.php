<?php

namespace Patterns\Factory;


/**
 * Abstract Class Creator
 * @package Patterns\Factory
 */
abstract class Creator
{

    /**
     * @var Product
     */
    protected $product;

    /**
     * Provide a product. This is called by user.
     *
     * @param $type
     * @return Product
     */
    public function handle($type)
    {
        // create a product by abstract method factoryMethod
        $this->product = $this->factoryMethod($type);

        // process the product
        $this->product->process1();
        $this->product->process2();

        // return the processed product
        return $this->product;
    }

    /**
     * Create a product. Subclass must overwrite it.
     *
     * @param  mixed $type
     * @return Product
     */
    abstract protected function factoryMethod($type);
}
