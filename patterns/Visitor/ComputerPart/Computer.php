<?php

namespace Patterns\Visitor\ComputerPart;

use Patterns\Visitor\Visitor\ComputerPartVisitor;

/**
 * Class Computer.
 */
class Computer
{
    /**
     * @var array
     */
    private $parts = [];

    /**
     * Computer constructor.
     */
    public function __construct()
    {
        $this->parts = [
            new Keyboard(),
            new Monitor(),
            new Mouse(),
        ];
    }

    /**
     * @param ComputerPart $computerPart
     */
    public function add(ComputerPart $computerPart)
    {
        $this->parts[] = $computerPart;
    }

    /**
     * @param ComputerPart $computerPart
     *
     * @return mixed
     */
    public function delete(ComputerPart $computerPart)
    {
        $index = array_search($computerPart, $this->parts);
        if ($index !== false) {
            unset($this->parts[$index]);
        }

        return $index;
    }

    /**
     * @param ComputerPartVisitor $visitor
     */
    public function accept(ComputerPartVisitor $visitor)
    {
        foreach ($this->parts as $part) {
            $part->accept($visitor);
        }
    }
}
