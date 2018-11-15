<?php

namespace Patterns\Builder;

use Patterns\Builder\Item\ChickenBurger;
use Patterns\Builder\Item\Coke;
use Patterns\Builder\Item\Pepsi;
use Patterns\Builder\Item\VegBurger;

/**
 * 创建一个MealBuilder类，实际的builder类负责创建Meal对象
 */
class MealBuilder
{
    /**
     * @return Meal
     */
    public function prepareVegMeal()
    {
        $meal = new Meal();
        $meal->addItem(new VegBurger());
        $meal->addItem(new Coke());

        return $meal;
    }

    /**
     * @return Meal
     */
    public function prepareMeatMeal()
    {
        $meal = new Meal();
        $meal->addItem(new ChickenBurger());
        $meal->addItem(new Pepsi());

        return $meal;
    }
}
