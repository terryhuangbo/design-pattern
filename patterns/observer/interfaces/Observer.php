<?php

namespace Patterns\Observer\Interfaces;

/**
 * Interface Observer.
 */
abstract class Observer implements ObserverInterface
{
    /**
     * @var Subject| Observer 被观察者
     */
    private $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    /**
     * @param $argument
     *
     * @return mixed
     */
    abstract public function update($argument);
}
