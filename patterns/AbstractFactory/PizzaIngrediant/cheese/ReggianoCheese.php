<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Cheese;


use Patterns\AbstractFactory\Interfaces\Cheese;


/**
 * Class ReggianoCheese
 * @package Patterns\AbstractFactory\PizzaIngrediant\Cheese
 */
class ReggianoCheese implements Cheese
{
    /**
     * @var string
     */
    protected $name;

    /**
     * ThickDough constructor.
     */
    public function __construct()
    {
        $this->name = "Reggiano cheese";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
