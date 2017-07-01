<?php

namespace Patterns\Factory;

use Patterns\Factory\Pizza\ChicagoPizzaStore;
use Patterns\Factory\Pizza\NYPizzaStore;
use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        print_r("Terry ordered a NY Style Cheese Pizza" . '<br>');
        $pizza1 = $nyStore->orderPizza('cheese');

        echo '<br><br>';

        print_r("Json ordered a Chicago Style Clam Pizza" . '<br>');
        $pizza2 = $chicagoStore->orderPizza('clam');
    }
}
