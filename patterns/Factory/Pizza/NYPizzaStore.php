<?php

namespace Patterns\Factory\Pizza;


/**
 * Class NYPizzaStore
 * @package Patterns\Factory\Pizza
 */
class NYPizzaStore extends PizzaStore
{
    /**
     * Create a Pizza
     *
     * @param $type
     * @return Pizza
     */
    public function createPizza($type)
    {
        if ($type == "cheese") {
            return new NYStyleCheesePizza();
        } elseif ($type == 'clam') {
            return new NYStyleClamPizza();
        }
    }


}
