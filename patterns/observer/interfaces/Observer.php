<?php

namespace Patterns\Observer\Interfaces;

/**
 * Abstract Class Observer.
 */
abstract class Observer implements ObserverInterface
{
    /**
     * @var Subject 被观察者
     */
    protected $subject;

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
