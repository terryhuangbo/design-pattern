<?php

namespace Patterns\Observer\Interfaces;

/**
 * Abstract Class Subject.
 */
abstract class Subject implements SubjectInterface
{
    /**
     * @var Observer[] 观察者列表
     */
    protected $observers = [];

    /**
     * 关注.
     *
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 取消关注.
     *
     * @param Observer $observer
     */
    public function detach(Observer $observer)
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    /**
     * 取消所有关注.
     */
    public function detachAll()
    {
        $this->observers = [];
    }

    /**
     * 通知观察者.
     */
    public function notify()
    {
        $args = func_get_args();

        foreach ($this->observers as $observer) {
            $observer->update(...$args);
        }
    }

    /**
     *  Subject changes its status.
     */
    abstract public function change();
}
