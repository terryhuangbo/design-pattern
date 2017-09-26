<?php

namespace Patterns\Visitor\Visitor;

use Patterns\Visitor\ComputerPart\Keyboard;
use Patterns\Visitor\ComputerPart\Monitor;
use Patterns\Visitor\ComputerPart\Mouse;

/**
 * Interface ComputerPartVisitor.
 */
interface ComputerPartVisitor
{
    /**
     * @param Keyboard $keyboard
     *
     * @return mixed
     */
    public function visitKeyboard(Keyboard $keyboard);

    /**
     * @param Monitor $monitor
     *
     * @return mixed
     */
    public function visitMonitor(Monitor $monitor);

    /**
     * @param Mouse $mouse
     *
     * @return mixed
     */
    public function visitMouse(Mouse $mouse);
}
