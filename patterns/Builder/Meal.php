<?php

namespace Patterns\Builder;

use Patterns\Builder\Item\Item;

class Meal
{
    /**
     * @var array
     */
    protected $items = [];

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function removeItem(Item $item)
    {
        foreach ($this->items as $key => $val) {
            if ($item == $val) {
                unset($this->items[$key]);
            }
        }
    }

    /**
     * @return \ArrayIterator
     */
    public function createIterator()
    {
        return new \ArrayIterator($this->items);
    }

    public function getCost()
    {
        $cost = 0.0;
        foreach ($this->items as $item) {
            $cost += $item->getPrice();
        }

        return $cost;
    }

    public function showItems()
    {
        $str = '';

        foreach ($this->items as $item) {
            $str .= 'Item: '.$item->getName().'<br>';
            $str .= 'Packing : '.$item->getPacking()->pack().'<br>';
            $str .= 'Price  : '.$item->getPrice();
        }

        print_r($str);
    }
}
