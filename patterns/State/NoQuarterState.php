<?php

namespace Patterns\State;

/**
 * Class NoQuarterState.
 */
class NoQuarterState implements State
{
    /**
     * @var GumballMachine
     */
    protected $stateMachine;

    /**
     * NoQuarterState constructor.
     *
     * @param GumballMachine $stateMachine
     */
    public function __construct(GumballMachine $stateMachine)
    {
        $this->stateMachine = $stateMachine;
    }

    public function insertQuarter()
    {
        print_r('You insert a quarter'.'<br>');
        $this->stateMachine->setState($this->stateMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        print_r('You have not inserted a quarter yet!'.'<br>');
    }

    public function turnCrank()
    {
        print_r('You turn the crank, but you have not inserted a quarter'.'<br>');
    }

    public function dispense()
    {
        print_r('You need to pay first'.'<br>');
    }
}
