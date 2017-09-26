<?php

namespace Patterns\Builder\Item;

/**
 * 扩展了ColdDrink的实体类.
 */
class Pepsi extends ColdDrink
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Pepsi';
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return 12.5;
    }
}
