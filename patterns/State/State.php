<?php

namespace Patterns\State;

/**
 * Interface State.
 */
interface State
{
    public function insertQuarter();

    public function ejectQuarter();

    public function turnCrank();

    public function dispense();
}
