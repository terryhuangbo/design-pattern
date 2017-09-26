<?php

namespace Patterns\Builder;

class Waiter
{
    public function main()
    {
        $mealBuilder = new MealBuilder();

        $vegMeal = $mealBuilder->prepareVegMeal();
        print_r('<b>Veg Meal:</b> <br>');
        $vegMeal->showItems();
        print_r('<br>'.'Total Cost: '.$vegMeal->getCost());

        print_r('<br><br><br>');

        $meatMeal = $mealBuilder->prepareMeatMeal();
        print_r('<b>Meat Meal:</b> <br>');
        $meatMeal->showItems();
        print_r('<br>'.'Total Cost: '.$meatMeal->getCost());
    }
}
