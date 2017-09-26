<?php

namespace Patterns\Builder\Item;

/**
 * 扩展了Burger的实体类.
 */
class ChickenBurger extends Burger
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Chicken Burger';
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return 50.0;
    }
}
