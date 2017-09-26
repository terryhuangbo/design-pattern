<?php

namespace Patterns\Builder\Item;

use Patterns\Builder\Packing\Wrapper;

/**
 * 食物条目的接口.
 */
abstract class Burger implements Item
{
    /**
     * @return Wrapper
     */
    public function getPacking()
    {
        return new Wrapper();
    }
}
