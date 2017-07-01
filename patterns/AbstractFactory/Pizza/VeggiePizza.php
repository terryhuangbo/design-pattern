<?php

namespace Patterns\AbstractFactory\Pizza;

/**
 * Class CheesePizza
 * @package Patterns\AbstractFactory\Pizza
 */
class VeggiePizza extends Pizza
{

    /**
     * @return void
     */
    public function prepare()
    {
        print_r("Preparing ".$this->name.'...<br>');
        $this->dough = $this->ingredientFactory->createDough();
        $this->veggie = $this->ingredientFactory->createVeggies();
        $this->cheese = $this->ingredientFactory->createCheese();
    }

    /**
     * @return void
     */
    public function bake()
    {
        print_r("Bake: Bake for 40 minutes at 400" . '<br>');
    }

    /**
     * @return void
     */
    public function box()
    {
        print_r("Box: Place pizza in your box" . '<br>');
    }
}
