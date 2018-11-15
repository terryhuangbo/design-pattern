<?php

namespace Patterns\Factory;

/**
 * Abstract Class Product.
 */
abstract class Product
{
    /**
     * @var
     */
    protected $name;

    /**
     * @var
     */
    protected $attribute1;
    /**
     * @var
     */
    protected $attribute2;

    public function process1()
    {
        print_r('The product is under procedure 1'.'<br>');
    }

    public function process2()
    {
        print_r('The product is under procedure 2'.'<br>');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAttribute1()
    {
        return $this->attribute1;
    }

    /**
     * @return mixed
     */
    public function getAttribute2()
    {
        return $this->attribute2;
    }
}
