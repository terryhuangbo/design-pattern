<?php

namespace Patterns\Builder\Item;

/**
 * 扩展了Burger的实体类.
 */
class VegBurger extends Burger
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Veg Burger';
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return 25.0;
    }
}
