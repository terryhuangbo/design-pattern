<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Dough;


use Patterns\AbstractFactory\Interfaces\Dough;


/**
 * Class ThinDough
 * @package Patterns\AbstractFactory\PizzaIngrediant\Dough
 */
class ThinDough implements Dough
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
        $this->name = "Thin dough";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
