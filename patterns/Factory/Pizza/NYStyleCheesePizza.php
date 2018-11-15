<?php

namespace Patterns\Factory\Pizza;

/**
 * Class NYStyleCheesePizza.
 */
class NYStyleCheesePizza extends Pizza
{
    /**
     * NYStyleCheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
    }

    /**
     * {@inheritdoc}
     */
    public function box()
    {
        print_r('Box: Place pizza in NY PizzaStore box'.'<br>');
    }
}
