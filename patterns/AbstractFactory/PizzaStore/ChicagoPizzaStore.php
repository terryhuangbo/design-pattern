<?php

namespace Patterns\AbstractFactory\PizzaStore;

use Patterns\AbstractFactory\PizzaIngrediant\ChicagoPizzaIngredientFactory;
use Patterns\AbstractFactory\Pizza\CheesePizza;
use Patterns\AbstractFactory\Pizza\ClamPizza;

/**
 * Class ChicagoPizzaStore
 * @package Patterns\AbstractFactory\PizzaStore
 */
class ChicagoPizzaStore extends PizzaStore
{

    /**
     * @param $type
     * @return null|CheesePizza|ClamPizza
     */
    protected function createPizza($type)
    {
        $pizza = null;

        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type == 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago style Cheese Piazza');
        } elseif ($type == 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago style Clam Piazza');
        }

        return $pizza;
    }

}
