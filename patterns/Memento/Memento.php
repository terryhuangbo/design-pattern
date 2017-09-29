<?php

namespace Patterns\Memento;

/**
 * 备忘录类。负责保存对象的状态，是对象快照的载体。这里说的状态，不一定只有一个维度，比如还可以有时间等维度。
 * 此时就要增加字段。
 */
class Memento
{
    /**
     * @var
     */
    protected $state;

    /**
     * Memento constructor.
     *
     * @param $state
     */
    public function __construct($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}
