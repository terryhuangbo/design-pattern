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

    /**
     * Observer constructor.
     *
     * @param Subject $subject
     */
    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
    }

    /**
     * 关注.
     */
    public function attach()
    {
        $this->subject->attach($this);
    }

    /**
     * 取消关注.
     */
    public function detach()
    {
        $this->subject->detach($this);
    }

    /**
     * @return mixed
     */
    abstract public function update();
}
