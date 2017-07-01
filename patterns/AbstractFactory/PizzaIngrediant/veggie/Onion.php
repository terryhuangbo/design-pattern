<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Veggie;


use Patterns\AbstractFactory\Interfaces\Veggie;


/**
 * Class Onion
 * @package Patterns\AbstractFactory\PizzaIngrediant\Veggie
 */
class Onion implements Veggie
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
        $this->name = "onion";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
