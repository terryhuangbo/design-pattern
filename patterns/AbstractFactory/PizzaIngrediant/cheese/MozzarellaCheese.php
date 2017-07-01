<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Cheese;


use Patterns\AbstractFactory\Interfaces\Cheese;

/**
 * Class MozzarellaCheese
 * @package Patterns\AbstractFactory\PizzaIngrediant\Cheese
 */
class MozzarellaCheese implements Cheese
{
    /**
     * @var string
     */
    protected $name;

    /**
     * ThinDough constructor.
     */
    public function __construct()
    {
        $this->name = "MozzarellaChesse";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
