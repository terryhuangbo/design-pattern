<?php

namespace Patterns\AbstractFactory\Pizza;

/**
 * Class CheesePizza
 * @package Patterns\AbstractFactory\Pizza
 */
class CheesePizza extends Pizza
{

    /**
     * @return void
     */
    public function prepare()
    {
        print_r("Preparing ".$this->name.'...<br>');
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }

    /**
     * @inheritDoc
     */
    public function box()
    {
        print_r("Box: Place pizza in NY PizzaStore box" . '<br>');
    }


}
