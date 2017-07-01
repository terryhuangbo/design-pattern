<?php

namespace Patterns\AbstractFactory\PizzaIngrediant;


use Patterns\AbstractFactory\PizzaIngrediant\Cheese\MozzarellaCheese;
use Patterns\AbstractFactory\PizzaIngrediant\Clams\FrozenClams;
use Patterns\AbstractFactory\PizzaIngrediant\Dough\ThickDough;
use Patterns\AbstractFactory\PizzaIngrediant\Sauce\TomatoSauce;
use Patterns\AbstractFactory\PizzaIngrediant\Veggie\Garlic;
use Patterns\AbstractFactory\PizzaIngrediant\Veggie\Ginger;
use Patterns\AbstractFactory\PizzaIngrediant\Veggie\Pepper;
use Patterns\AbstractFactory\Interfaces\Cheese;
use Patterns\AbstractFactory\Interfaces\Clams;
use Patterns\AbstractFactory\Interfaces\Dough;
use Patterns\AbstractFactory\Interfaces\PizzaIngredientFactory;
use Patterns\AbstractFactory\Interfaces\Sauce;
use Patterns\AbstractFactory\Interfaces\Veggie;


/**
 * Class ChicagoPizzaIngredientFactory
 * @package Patterns\AbstractFactory\PizzaIngrediant
 */
class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    /**
     * @return Dough
     */
    public function createDough()
    {
        return new ThickDough();
    }

    /**
     * @return Sauce
     */
    public function createSauce()
    {
        return new TomatoSauce();
    }

    /**
     * @return Cheese
     */
    public function createCheese()
    {
        return new MozzarellaCheese();
    }

    /**
     * @return Veggie[]
     */
    public function createVeggies()
    {
        return [
            new Garlic(),
            new Ginger(),
            new Pepper(),
        ];
    }

    /**
     * @return Clams
     */
    public function createClams()
    {
        return new FrozenClams();
    }

}
