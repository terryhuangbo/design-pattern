<?php

namespace Patterns\AbstractFactory\PizzaIngrediant\Clams;

use Patterns\AbstractFactory\Interfaces\Clams;


/**
 * Class FreshClams
 * @package Patterns\AbstractFactory\PizzaIngrediant\Clams
 */
class FreshClams implements Clams
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
        $this->name = "Fresh clams";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
