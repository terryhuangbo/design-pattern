<?php

namespace Patterns\State;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        $gumballMachine = new GumballMachine(2);

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo '<br>';

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();

        echo '<br>';

        $gumballMachine->insertQuarter();
        $gumballMachine->ejectQuarter();
        $gumballMachine->turnCrank();
    }
}
