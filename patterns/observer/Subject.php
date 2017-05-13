<?php

/**
 * Class Subject
 */
class Subject
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

    public function getName()
    {
        return $this->name;
    }

    /**
     * 关注
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * 取消关注
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
     * 通知观察者
     * @param $argument
     */
    protected function notify($argument)
    {
        foreach ($this->observers as $observer) {
            $observer->update($argument);
        }
    }

    public function doSomething()
    {
        // Do something.
        // ...

        // Notify observers that we did something.
        $this->notify('something');
    }

    public function doSomethingBad()
    {
        foreach ($this->observers as $observer) {
            $observer->reportError(42, 'Something bad happened', $this);
        }
    }



    // Other methods.
}