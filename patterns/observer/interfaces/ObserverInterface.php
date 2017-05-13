<?php

namespace Patterns\Observer\Interfaces;

/**
 * Interface Observer.
 */
interface ObserverInterface
{
    /**
     * @param $argument
     *
     * @return mixed
     */
    public function update($argument);
}
