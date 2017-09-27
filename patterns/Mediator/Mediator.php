<?php

namespace Patterns\Mediator;

/**
 * 抽象中介者类.
 */
abstract class Mediator
{
    /**
     * 对象之间交互的关系图Map.
     *
     * @var array
     */
    protected static $colleaguesend = array(
        ConcreteColleague1::class => ConcreteColleague2::class,
        ConcreteColleague2::class => ConcreteColleague3::class,
        ConcreteColleague3::class => ConcreteColleague1::class,
    );
    /**
     * 已经注册的进来的对象
     *
     * @var null|Colleague[]
     */
    protected $colleagues = null;

    /**
     * 注册需要进行交互的对象
     *
     * @param Colleague $colleague
     */
    public function register(Colleague $colleague)
    {
        $this->colleagues[get_class($colleague)] = $colleague;
    }

    /**
     * 负责进行调度，完成对象之间的交互/通信工作.
     *
     * @param $name
     * @param $message
     *
     * @return mixed
     */
    abstract public function dispatch($name, $message);
}
