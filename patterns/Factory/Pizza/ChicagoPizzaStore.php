<?php

namespace Patterns\Factory\Pizza;

/**
 * Class ChicagoPizzaStore.
 */
class ChicagoPizzaStore extends PizzaStore
{
    /**
     * @param $type
     *
     * @return Pizza
     */
    public function createPizza($type)
    {
        if ('cheese' == $type) {
            return new ChicagoStyleCheesePizza();
        } elseif ('clam' == $type) {
            return new ChicagoStyleClamPizza();
        }
    }
}
