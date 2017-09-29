<?php

namespace Patterns\Chain;

/**
 * 加入在公司里，如果你的请假时间小于0.5天，那么只需要向leader打声招呼就OK了。
 * 如果0.5<请假天数<=3天，需要先leader打声招呼，要不然leader不知你跑哪里，然后部门经理直接签字。
 * 如果3<请假天数天，需要先leader打声招呼，然后到部门经理签字，最后总经经理确认签字，
 * 这样就是个list。也是个不纯的职责链，因为每个对象可能处理一部分后，就需要传给下个对象来处理。
 */

/**
 * 纯职责链模式
 * 为解除请求的发送者和接收者之间的耦合,而使用多个对象都用机会处理这个请求,将这些对象连成一条链,
 * 并沿着这条链传递该请求，直到有一个对象处理它.
 */

/**
 * 抽象处理者角色(Handler:Approver):定义一个处理请求的接口，和一个后继连接(可选).
 */
abstract class Handler
{
    /**
     * @var null|static
     */
    protected $handler = null;
    /**
     * @var null|string
     */
    protected $handlerName = null;

    /**
     * @param $handler
     */
    public function setSuccessor(Handler $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param $request
     *
     * @return bool
     */
    protected function success($request)
    {
        echo $request->getName(), '\' request was passed  <br/>';

        return true;
    }

    /**
     * @param $request
     *
     * @return mixed
     */
    abstract public function handleRequest($request);
}
