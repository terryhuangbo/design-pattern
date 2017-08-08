<?php

namespace Patterns\Composite;

/**
 * Class Composite.
 */
abstract class Composite extends Component implements \RecursiveIterator
{
    /**
     * @var bool
     */
    private $valid = false;

    /**
     * @var array
     */
    protected $items = [];

    /**
     * {@inheritdoc}
     */
    public function add(Component $component)
    {
        $this->items[] = $component;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(Component $component)
    {
        foreach ($this->items as $key => $item) {
            if ($item == $component) {
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

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->items);
    }

    /**
     * @return mixed
     */
    public function next()
    {
        $this->valid = (next($this->items) !== false);
    }

    /**
     * @return mixed
     */
    public function key()
    {
        return key($this->items);
    }

    /**
     * @return mixed
     */
    public function valid()
    {
        return $this->valid;
    }

    /**
     * @return mixed
     */
    public function rewind()
    {
        $this->valid = (reset($this->items) !== false);
    }

    /**
     * @return mixed
     */
    public function hasChildren()
    {
        return $this->current() instanceof self;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->current();
    }
}
