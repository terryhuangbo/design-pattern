<?php

namespace Patterns\Memento;

/**
 * 需要保存状态的类。其将状态或者快照保存到备忘录类中。
 */
class Originator
{
    /**
     * @var
     */
    protected $state;

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * 可以在Memento保存多个维度的状态
     *
     * @return Memento
     */
    public function saveStateToMemento()
    {
        return new Memento($this->state);
    }

    /**
     * 可以从Memento装载多个维度的状态
     *
     * @param Memento $memento
     */
    public function loadStateFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}
