<?php

namespace Patterns\Visitor\ComputerPart;

use Patterns\Visitor\Visitor\ComputerPartVisitor;

class Mouse implements ComputerPart
{
    /**
     * @param ComputerPartVisitor $visitor
     *
     * @return mixed
     */
    public function accept(ComputerPartVisitor $visitor)
    {
        $visitor->visitMouse($this);
    }
}
