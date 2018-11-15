<?php

namespace Patterns\Chain;

/**
 * 具体处理者角色(ConcreteHandler:President):处理它所负责的请求，可以访问后继者，如果可以处理请求则处理，否则将该请求转给他的后继者。
 */
class GeneralManagerHandler extends Handler
{
    public function __construct($handlerName)
    {
        $this->handlerName = $handlerName;
    }

    /**
     * @param Request $request
     *
     * @return bool|mixed
     */
    public function handleRequest(Request $request)
    {
        //表示责任传递到总经理这里来了
        echo $this->handlerName, ' was signed <br/>';

        //这是GeneralManager的权限范围，GeneralManager截留请求，处理请求然后返回
        if (3 < $request->getDay()) {
            return $this->success($request);
        }

        //如果自己处理不了，传递给下一位处理者
        if ($this->handler instanceof Handler) {
            return $this->handler->handleRequest($request);
        }
    }
}
