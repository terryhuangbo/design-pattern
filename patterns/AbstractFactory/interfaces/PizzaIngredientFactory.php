<?php

namespace Patterns\AbstractFactory\Interfaces;


/**
 * Interface PizzaIngredientFactory
 * @package Patterns\AbstractFactory\Interfaces
 */
interface PizzaIngredientFactory
{
    /**
     * @return Dough
     */
    public function createDough();

    /**
     * @return Sauce
     */
    public function createSauce();

    /**
     * @return Cheese
     */
    public function createCheese();

    /**
     * @return Veggie[]
     */
    public function createVeggies();

    /**
     * @return Clams
     */
    public function createClams();


}
