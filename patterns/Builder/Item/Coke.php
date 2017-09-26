<?php

namespace Patterns\Builder\Item;

/**
 * 扩展了ColdDrink的实体类.
 */
class Coke extends ColdDrink
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Coke';
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return 10.0;
    }
}
