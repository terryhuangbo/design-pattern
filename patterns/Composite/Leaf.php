<?php

namespace Patterns\Composite;

/**
 * Class Leaf.
 */
abstract class Leaf extends Component
{
    /**
     * @return \EmptyIterator
     */
    public function createIterator()
    {
        return new \EmptyIterator();
    }
}
