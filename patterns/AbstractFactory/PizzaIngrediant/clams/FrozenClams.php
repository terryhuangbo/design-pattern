<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Clams;


use Patterns\AbstractFactory\Interfaces\Clams;


/**
 * Class FrozenClams
 * @package Patterns\AbstractFactory\PizzaIngrediant\Clams
 */
class FrozenClams implements Clams
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
        $this->name = "Frozen clams";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
