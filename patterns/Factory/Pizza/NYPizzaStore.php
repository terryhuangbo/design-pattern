<?php

namespace Patterns\Factory\Pizza;

/**
 * Class NYPizzaStore.
 */
class NYPizzaStore extends PizzaStore
{
    /**
     * Create a Pizza.
     *
     * @param $type
     *
     * @return Pizza
     */
    public function createPizza($type)
    {
        if ('cheese' == $type) {
            return new NYStyleCheesePizza();
        } elseif ('clam' == $type) {
            return new NYStyleClamPizza();
        }
    }
}
