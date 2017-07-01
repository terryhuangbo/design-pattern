<?php

namespace Patterns\AbstractFactory\PizzaIngrediant;


use Patterns\AbstractFactory\PizzaIngrediant\Cheese\ReggianoCheese;
use Patterns\AbstractFactory\PizzaIngrediant\Clams\FreshClams;
use Patterns\AbstractFactory\PizzaIngrediant\Dough\ThinDough;
use Patterns\AbstractFactory\PizzaIngrediant\Sauce\MarinaraSauce;
use Patterns\AbstractFactory\PizzaIngrediant\Veggie\Garlic;
use Patterns\AbstractFactory\PizzaIngrediant\Veggie\Ginger;
use Patterns\AbstractFactory\PizzaIngrediant\Veggie\Mushroom;
use Patterns\AbstractFactory\PizzaIngrediant\Veggie\Onion;
use Patterns\AbstractFactory\Interfaces\Cheese;
use Patterns\AbstractFactory\Interfaces\Clams;
use Patterns\AbstractFactory\Interfaces\Dough;
use Patterns\AbstractFactory\Interfaces\PizzaIngredientFactory;
use Patterns\AbstractFactory\Interfaces\Sauce;
use Patterns\AbstractFactory\Interfaces\Veggie;


/**
 * Class NYPizzaIngredientFactory
 * @package Patterns\AbstractFactory\PizzaIngrediant
 */
class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    /**
     * @return Dough
     */
    public function createDough()
    {
        return new ThinDough();
    }

    /**
     * @return Sauce
     */
    public function createSauce()
    {
        return new MarinaraSauce();
    }

    /**
     * @return Cheese
     */
    public function createCheese()
    {
        return new ReggianoCheese();
    }

    /**
     * @return Veggie[]
     */
    public function createVeggies()
    {
        return [
            new Garlic(),
            new Ginger(),
            new Onion(),
            new Mushroom()
        ];
    }

    /**
     * @return Clams
     */
    public function createClams()
    {
        return new FreshClams();
    }


}
