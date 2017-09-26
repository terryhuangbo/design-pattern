<?php

namespace Patterns\Visitor\ComputerPart;

use Patterns\Visitor\Visitor\ComputerPartVisitor;

class Monitor implements ComputerPart
{
    /**
     * @param ComputerPartVisitor $visitor
     *
     * @return mixed
     */
    public function accept(ComputerPartVisitor $visitor)
    {
        $visitor->visitMonitor($this);
    }
}
