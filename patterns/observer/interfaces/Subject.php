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
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed 获取观察者的名称
     */
    public function getName()
    {
        return $this->name;
    }

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
        foreach ($this->observers as $key => $val) {
            if ($observer == $val) {
                unset($this->observers[$key]);
            }
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
     *
     * @param $argument
     */
    public function notify($argument)
    {
        foreach ($this->observers as $observer) {
            $observer->update($argument);
        }
    }

    /**
     *  Subject changes its status.
     */
    abstract public function change($arguments);
}
