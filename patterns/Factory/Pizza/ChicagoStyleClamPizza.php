<?php

namespace Patterns\Factory\Pizza;

/**
 * Class ChicagoStyleClamPizza.
 */
class ChicagoStyleClamPizza extends Pizza
{
    /**
     * ChicagoStyleClamPizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Clam Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Clam';
    }

    public function cut()
    {
        print_r('Cut: Cutting the pizza into square slices'.'<br>');
    }
}
