<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Veggie;


use Patterns\AbstractFactory\Interfaces\Veggie;


/**
 * Class Ginger
 * @package Patterns\AbstractFactory\PizzaIngrediant\Veggie
 */
class Ginger implements Veggie
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
        $this->name = "ginger";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
