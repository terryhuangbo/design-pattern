<?php

namespace Patterns\Visitor\ComputerPart;

use Patterns\Visitor\Visitor\ComputerPartVisitor;

/**
 * Interface ComputerPart.
 */
interface ComputerPart
{
    /**
     * @param ComputerPartVisitor $computerPartVisitor
     *
     * @return mixed
     */
    public function accept(ComputerPartVisitor $computerPartVisitor);
}
