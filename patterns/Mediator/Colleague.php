<?php

namespace Patterns\Mediator;

/**
 * 抽象同事类.
 */
abstract class Colleague
{
    /**
     * @var null|Mediator
     */
    protected $mediator = null;

    /**
     * Colleague constructor.
     *
     * @param Mediator $mediator
     */
    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
        $this->mediator->register($this);
    }

    /**
     * 发送消息，具体谁来接收由Mediator来决定。
     * 通过中介实现相互调用.
     */
    abstract public function send($message);

    /**
     * 接收消息，具体谁发送的由Mediator来决定。
     * 具体需要实现的业务逻辑代码
     */
    abstract public function notify($message);
}
