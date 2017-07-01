<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Veggie;


use Patterns\AbstractFactory\Interfaces\Veggie;


/**
 * Class Mushroom
 * @package Patterns\AbstractFactory\PizzaIngrediant\Veggie
 */
class Mushroom implements Veggie
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
        $this->name = "mushroom";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
