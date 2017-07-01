<?php

namespace Patterns\AbstractFactory\Pizza;


use Patterns\AbstractFactory\Interfaces\Cheese;
use Patterns\AbstractFactory\Interfaces\Clams;
use Patterns\AbstractFactory\Interfaces\Dough;
use Patterns\AbstractFactory\Interfaces\Sauce;
use Patterns\AbstractFactory\Interfaces\Veggie;
use Patterns\AbstractFactory\Interfaces\PizzaIngredientFactory;

/**
 * Class Pizza
 * @package Patterns\AbstractFactory\Pizza
 */
abstract class Pizza
{

    /**
     * @var string
     */
    protected $name;
    /**
     * @var Dough
     */
    protected $dough;
    /**
     * @var Sauce
     */
    protected $sauce;
    /**
     * @var Veggie[]
     */
    protected $veggie = [];
    /**
     * @var Cheese
     */
    protected $cheese;
    /**
     * @var Clams
     */
    protected $clams;

    /**
     * @var PizzaIngredientFactory
     */
    protected $ingredientFactory;

    /**
     * Pizza constructor.
     */
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    /**
     * @return mixed
     */
    abstract public function prepare();

    /**
     * @return void
     */
    public function bake()
    {
        print_r("Bake: Bake for 25 minutes at 350" . '<br>');
    }

    /**
     * @return void
     */
    public function cut()
    {
        print_r("Cut: Cutting the pizza into diagonal slices" . '<br>');
    }

    /**
     * @return void
     */
    public function box()
    {
        print_r("Box: Place pizza in official PizzaStore box" . '<br>');
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
