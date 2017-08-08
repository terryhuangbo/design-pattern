<?php

namespace Patterns\Composite;

/**
 * Class Component.
 */
abstract class Component
{
    /**
     * @var int
     */
    protected $level = 0;

    /**
     * @param Component $component
     *
     * @throws UnsupportedOperationException
     */
    public function add(Component $component)
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @param Component $component
     *
     * @throws UnsupportedOperationException
     */
    public function remove(Component $component)
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @throws UnsupportedOperationException
     */
    public function createIterator()
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @throws UnsupportedOperationException
     */
    public function getName()
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @throws UnsupportedOperationException
     */
    public function getDescription()
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @throws UnsupportedOperationException
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Do something.
     *
     * @throws UnsupportedOperationException
     */
    public function printMenu()
    {
        throw new UnsupportedOperationException();
    }

    /**
     * @throws UnsupportedOperationException
     */
    public function __toString()
    {
        throw new UnsupportedOperationException();
    }
}
