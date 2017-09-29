<?php

namespace Patterns\Memento;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        $originator = new Originator();
        $careTaker = new CareTaker();

        $originator->setState('State #1');
        $originator->setState('State #2');
        $careTaker->add($originator->saveStateToMemento());

        $originator->setState('State #3');
        $careTaker->add($originator->saveStateToMemento());

        $originator->setState('State #4');
        print_r('Current State: '.$originator->getState());
        echo '<br>';

        $originator->loadStateFromMemento($careTaker->get());
        print_r('First saved State: '.$originator->getState());
        echo '<br>';

        $originator->loadStateFromMemento($careTaker->get(1));
        print_r('Second saved State: '.$originator->getState());
        echo '<br>';
    }
}
