<?php

namespace Patterns\State;

/**
 * State Machine.
 */
class GumballMachine
{
    /**
     * @var NoQuarterState
     */
    protected $noQuarterState;
    /**
     * @var HasQuarterState
     */
    protected $hasQuarterState;
    /**
     * @var SoldState
     */
    protected $soldState;
    /**
     * @var SoldOutState
     */
    protected $soldOutState;

    /**
     * @var SoldOutState
     */
    protected $state;
    /**
     * @var int
     */
    protected $count;

    /**
     * NoQuarterState constructor.
     */
    public function __construct($gumballNum = 0)
    {
        // SoldOutState must come first
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);

        $this->count = $gumballNum;

        if ($this->count > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    /**
     * @param State $state
     */
    public function setState(State $state)
    {
        $this->state = $state;
    }

    /**
     * @return SoldOutState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return NoQuarterState
     */
    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    /**
     * @return HasQuarterState
     */
    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    /**
     * @return SoldState
     */
    public function getSoldState()
    {
        return $this->soldState;
    }

    /**
     * @return SoldOutState
     */
    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    public function releaseBall()
    {
        print_r('A gumball <b>comes out</b> rolling out the slot'.'<br>');
        if ($this->count != 0) {
            $this->count = $this->count - 1;
        }
    }
}
