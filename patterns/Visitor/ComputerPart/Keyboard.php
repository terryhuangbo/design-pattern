<?php

namespace Patterns\Visitor\ComputerPart;

use Patterns\Visitor\Visitor\ComputerPartVisitor;

class Keyboard implements ComputerPart
{
    /**
     * @param ComputerPartVisitor $visitor
     *
     * @return mixed
     */
    public function accept(ComputerPartVisitor $visitor)
    {
        $visitor->visitKeyboard($this);
    }
}
