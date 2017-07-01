<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Dough;

use Patterns\AbstractFactory\Interfaces\Dough;


/**
 * Class ThickDough
 * @package Patterns\AbstractFactory\PizzaIngrediant\Dough
 */
class ThickDough implements Dough
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
        $this->name = "Thick dough";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
