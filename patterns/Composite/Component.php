<?php

namespace Patterns\Composite;

/**
 * Class Component.
 */
abstract class Component
{
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
     * @param $key
     *
     * @throws UnsupportedOperationException
     */
    public function getChild($key)
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
     * Do something.
     *
     * @throws UnsupportedOperationException
     */
    public function operation()
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
