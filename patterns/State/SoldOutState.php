<?php

namespace Patterns\State;

/**
 * Class SoldOutState.
 */
class SoldOutState implements State
{
    /**
     * @var GumballMachine
     */
    protected $stateMachine;

    /**
     * SoldOutState constructor.
     *
     * @param GumballMachine $stateMachine
     */
    public function __construct(GumballMachine $stateMachine)
    {
        $this->stateMachine = $stateMachine;
    }

    public function insertQuarter()
    {
        print_r('Sorry, there is no more gumball now!'.'<br>');
    }

    public function ejectQuarter()
    {
        print_r('Sorry, there is no more gumball now!'.'<br>');
    }

    public function turnCrank()
    {
        print_r('Sorry, there is no more gumball now!'.'<br>');
    }

    public function dispense()
    {
        print_r('Sorry, there is no more gumball now!'.'<br>');
    }
}
