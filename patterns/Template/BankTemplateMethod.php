<?php

namespace Patterns\Template;

/**
 * Class BankTemplateMethod.
 */
abstract class BankTemplateMethod
{
    /**
     *  1.取号排队
     */
    public function takeNumber()
    {
        print_r('排队取号<br>');
    }

    /**
     * 2.办理具体的业务：这里留给子类来实现.
     *
     * @return mixed
     */
    abstract public function transact();

    /**
     * 3.给客服评分.
     */
    public function evaluate()
    {
        print_r('反馈评分<br>');
    }

    /**
     * 模板方法.
     */
    final public function process()
    {
        $this->takeNumber();
        $this->transact();
        $this->evaluate();
    }
}
