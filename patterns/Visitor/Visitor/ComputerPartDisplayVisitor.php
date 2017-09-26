<?php

namespace Patterns\Visitor\Visitor;

use Patterns\Visitor\ComputerPart\Keyboard;
use Patterns\Visitor\ComputerPart\Monitor;
use Patterns\Visitor\ComputerPart\Mouse;

class ComputerPartDisplayVisitor implements ComputerPartVisitor
{
    /**
     * @param Keyboard $keyboard
     *
     * @return mixed
     */
    public function visitKeyboard(Keyboard $keyboard)
    {
        print_r('Displaying Keyboard.'.'<br>');
    }

    /**
     * @param Monitor $monitor
     *
     * @return mixed
     */
    public function visitMonitor(Monitor $monitor)
    {
        print_r('Displaying Monitor.'.'<br>');
    }

    /**
     * @param Mouse $mouse
     *
     * @return mixed
     */
    public function visitMouse(Mouse $mouse)
    {
        print_r('Displaying Mouse.'.'<br>');
    }
}
