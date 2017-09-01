<?php

namespace Patterns\State;

/**
 * Class HasQuarterState.
 */
class HasQuarterState implements State
{
    /**
     * @var GumballMachine
     */
    protected $stateMachine;

    /**
     * HasQuarterState constructor.
     *
     * @param GumballMachine $stateMachine
     */
    public function __construct(GumballMachine $stateMachine)
    {
        $this->stateMachine = $stateMachine;
    }

    public function insertQuarter()
    {
        print_r('You already inserted a quarter, please wait for gumball'.'<br>');
        $this->stateMachine->setState($this->stateMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        print_r('You eject a quarter, there is no quarter in gumball machine now'.'<br>');
        $this->stateMachine->setState($this->stateMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        print_r('You turn the crank, please wait for dispense...'.'<br>');
        $this->stateMachine->setState($this->stateMachine->getSoldState());
    }

    public function dispense()
    {
        print_r('You have not turned crank yet, please turn first'.'<br>');
    }
}
