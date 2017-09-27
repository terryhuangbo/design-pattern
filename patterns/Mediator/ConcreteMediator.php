<?php

namespace Patterns\Mediator;

/**
 * 具体中介者类.
 */
class ConcreteMediator extends Mediator
{
    /**
     * @param Colleague $obj
     * @param $message
     */
    public function dispatch($obj, $message)
    {
        /*获取交互/通知的对象，可以从Hash表里面获取，也可以有更为复杂的映射关系*/
        $className = self::$colleaguesend[get_class($obj)];
        if ($className == get_class($obj)) {  // 自己不需要和自己再交互
            return;
        }
        if ($this->colleagues[$className]) {  // 如果交互对象已经注册进来，就交互/通知对方
            $this->colleagues[$className]->notify($message);
        }

        return;
    }
}
