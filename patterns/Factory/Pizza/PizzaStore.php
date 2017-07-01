<?php

namespace Patterns\Factory\Pizza;


/**
 * Class PizzaStore
 * @package Patterns\Factory\Pizza
 */
abstract class PizzaStore
{
    /**
     * @var Pizza
     */
    protected $pizza;


    /**
     * @param $type
     * @return Pizza
     */
    public function orderPizza($type)
    {
        // create a Pizza
        $this->pizza = $this->createPizza($type);

        // handle the pizza
        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();
        $this->pizza->box();

        // return the prepared pizza
        return $this->pizza;
    }

    /**
     * Create a Pizza
     *
     * @param $type
     * @return Pizza
     */
    abstract protected function createPizza($type);
}
