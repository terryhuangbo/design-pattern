<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Sauce;


use Patterns\AbstractFactory\Interfaces\Sauce;


/**
 * Class TomatoSauce
 * @package Patterns\AbstractFactory\PizzaIngrediant\Sauce
 */
class TomatoSauce implements Sauce
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
        $this->name = "Tomato sauce";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
