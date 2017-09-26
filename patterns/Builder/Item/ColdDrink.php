<?php

namespace Patterns\Builder\Item;

use Patterns\Builder\Packing\Bottle;

/**
 * 食物条目的接口.
 */
abstract class ColdDrink implements Item
{
    /**
     * @return Bottle
     */
    public function getPacking()
    {
        return new Bottle();
    }
}
