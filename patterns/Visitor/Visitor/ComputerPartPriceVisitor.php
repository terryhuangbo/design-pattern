<?php

namespace Patterns\Visitor\Visitor;

use Patterns\Visitor\ComputerPart\Keyboard;
use Patterns\Visitor\ComputerPart\Monitor;
use Patterns\Visitor\ComputerPart\Mouse;

/**
 * Class ComputerPartPriceVisitor.
 */
class ComputerPartPriceVisitor implements ComputerPartVisitor
{
    /**
     * @var int
     */
    private $price = 0;

    /**
     * ComputerPriceDisplayVisitor constructor.
     */
    public function __construct()
    {
        $this->price = 0;
    }

    /**
     * @param Keyboard $keyboard
     *
     * @return mixed
     */
    public function visitKeyboard(Keyboard $keyboard)
    {
        return $this->price += 400;
    }

    /**
     * @param Monitor $monitor
     *
     * @return mixed
     */
    public function visitMonitor(Monitor $monitor)
    {
        return $this->price += 2000;
    }

    /**
     * @param Mouse $mouse
     *
     * @return mixed
     */
    public function visitMouse(Mouse $mouse)
    {
        return $this->price += 100;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->price;
    }
}
