<?php

namespace Patterns\Factory\Pizza;

/**
 * Class Pizza.
 */
abstract class Pizza
{
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $dough;
    /**
     * @var
     */
    protected $sauce;
    /**
     * @var array
     */
    protected $toppings = [];

    public function prepare()
    {
        print_r('Preparing '.$this->name.'<br>');
        print_r('Tossing dough...'.'<br>');
        print_r('Adding sauce...'.'<br>');
        print_r('Adding toppings...'.'<br>');
        foreach ($this->toppings as $topping) {
            print_r("$topping".'<br>');
        }
    }

    public function bake()
    {
        print_r('Bake: Bake for 25 minutes at 350'.'<br>');
    }

    public function cut()
    {
        print_r('Cut: Cutting the pizza into diagonal slices'.'<br>');
    }

    public function box()
    {
        print_r('Box: Place pizza in official PizzaStore box'.'<br>');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}
