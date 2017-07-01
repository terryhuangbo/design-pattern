<?php

namespace Patterns\Factory\Pizza;


/**
 * Class ChicagoPizzaStore
 * @package Patterns\Factory\Pizza
 */
class ChicagoPizzaStore extends PizzaStore
{
    /**
     * @param $type
     * @return Pizza
     */
    public function createPizza($type)
    {
        if ($type == "cheese") {
            return new ChicagoStyleCheesePizza();
        } elseif ($type == 'clam') {
            return new ChicagoStyleClamPizza();
        }
    }


}
