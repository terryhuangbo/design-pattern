<?php

namespace Patterns\AbstractFactory;

use Patterns\AbstractFactory\PizzaStore\ChicagoPizzaStore;
use Patterns\AbstractFactory\PizzaStore\NYPizzaStore;
use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        $nyStore = new NYPizzaStore();
        $pizza = $nyStore->orderPizza('cheese');

        echo '<br>';

        $chicagoStore = new ChicagoPizzaStore();
        $pizza = $chicagoStore->orderPizza('clam');

        echo '<br>';
        $pizza = $nyStore->orderPizza('veggie');
    }
}
