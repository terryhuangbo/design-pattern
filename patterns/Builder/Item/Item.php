<?php

namespace Patterns\Builder\Item;

/**
 * 食物条目的接口.
 */
interface Item
{
    public function getName();

    public function getPacking();

    public function getPrice();
}
