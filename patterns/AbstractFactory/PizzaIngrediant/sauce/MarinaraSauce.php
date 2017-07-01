<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Sauce;


use Patterns\AbstractFactory\Interfaces\Sauce;


/**
 * Class MarinaraSauce
 * @package Patterns\AbstractFactory\PizzaIngrediant\Sauce
 */
class MarinaraSauce implements Sauce
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
        $this->name = "Marinara sauce";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
