<?php

namespace Patterns\Visitor;

use Patterns\TestInterface;
use Patterns\Visitor\ComputerPart\Computer;
use Patterns\Visitor\Visitor\ComputerPartDisplayVisitor;
use Patterns\Visitor\Visitor\ComputerPartPriceVisitor;

class Test implements TestInterface
{
    public function run($argument)
    {
        $computer = new Computer();
        $computer->accept(new ComputerPartDisplayVisitor());

        echo '<br><br>';

        $costVistor = new ComputerPartPriceVisitor();
        $computer->accept($costVistor);
        print_r('Total cost is '.$costVistor->getCost().' RMB');
    }
}
