<?php

namespace Patterns\Factory\Pizza;


/**
 * Class ChicagoStyleCheesePizza
 * @package Patterns\Factory\Pizza
 */
class ChicagoStyleCheesePizza extends Pizza
{

    /**
     * ChicagoStyleCheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";

        $this->toppings[] = "Shredded Mozzarella Cheese";
    }

    /**
     * @return void
     */
    public function cut()
    {
        print_r("Cut: Cutting the pizza into square slices") . '<br>';
    }


}
