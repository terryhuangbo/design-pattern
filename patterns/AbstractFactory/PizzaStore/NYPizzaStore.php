<?php

namespace Patterns\AbstractFactory\PizzaStore;

use Patterns\AbstractFactory\PizzaIngrediant\NYPizzaIngredientFactory;
use Patterns\AbstractFactory\Pizza\CheesePizza;
use Patterns\AbstractFactory\Pizza\ClamPizza;
use Patterns\AbstractFactory\Pizza\Pizza;
use Patterns\AbstractFactory\Pizza\VeggiePizza;


/**
 * Class NYPizzaStore
 * @package Patterns\AbstractFactory\PizzaStore
 */
class NYPizzaStore extends PizzaStore
{
    /**
     * Create a Pizza
     *
     * @param $type
     * @return Pizza
     */
    protected function createPizza($type)
    {
        $pizza = null;

        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type == 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ($type == 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        } elseif ($type == 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        }

        return $pizza;
    }

}
