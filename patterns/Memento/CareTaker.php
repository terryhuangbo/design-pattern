<?php

namespace Patterns\Memento;

/**
 * 是管理备忘录的类。负责将对象的状态添加到备忘录或者从备忘录中恢复对象的状态。
 * CareTaker保存的历史状态，可以保存在数组中，也可以保存在数据库，缓存等媒介
 * 当中。
 */
class CareTaker
{
    /**
     * @var
     */
    protected $mementoList = [];

    /**
     * @param Memento $memento
     */
    public function add(Memento $memento)
    {
        array_push($this->mementoList, $memento);
    }

    /**
     * @param int $offset
     *
     * @return mixed|string
     */
    public function get($offset = 0)
    {
        return isset($this->mementoList[$offset]) ? $this->mementoList[$offset] : '';
    }
}
