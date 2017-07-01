<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Veggie;


use Patterns\AbstractFactory\Interfaces\Veggie;


/**
 * Class Pepper
 * @package Patterns\AbstractFactory\PizzaIngrediant\Veggie
 */
class Pepper implements Veggie
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
        $this->name = "Pepper";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
