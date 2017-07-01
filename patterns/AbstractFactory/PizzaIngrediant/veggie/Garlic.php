<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Veggie;


use Patterns\AbstractFactory\Interfaces\Veggie;


/**
 * Class Garlic
 * @package Patterns\AbstractFactory\PizzaIngrediant\Veggie
 */
class Garlic implements Veggie
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
        $this->name = "garlic";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
