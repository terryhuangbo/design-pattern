<?php

namespace Patterns\AbstractFactory\Pizza;

/**
 * Class ClamPizza
 * @package Patterns\AbstractFactory\Pizza
 */
class ClamPizza extends Pizza
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
        $this->clams = $this->ingredientFactory->createClams();
    }

    /**
     * @return void
     */
    public function cut()
    {
        print_r("Cut: Cutting the pizza into square slices" . '<br>');
    }


}
