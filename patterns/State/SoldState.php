<?php

namespace Patterns\State;

/**
 * Class SoldState.
 */
class SoldState implements State
{
    /**
     * @var GumballMachine
     */
    protected $stateMachine;

    /**
     * SoldState constructor.
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
        print_r('You can not eject the quarter because you have turned the crank, '.'<br>');
    }

    public function turnCrank()
    {
        print_r('Turning crank twice does not give you another gumball'.'<br>');
    }

    public function dispense()
    {
        $this->stateMachine->releaseBall();
        if ($this->stateMachine->getCount() > 0) {
            $this->stateMachine->setState($this->stateMachine->getNoQuarterState());
        } else {
            print_r('Oops, out of gumballs!'.'<br>');
            $this->stateMachine->setState($this->stateMachine->getSoldOutState());
        }
    }
}
