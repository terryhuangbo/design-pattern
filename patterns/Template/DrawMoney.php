<?php

namespace Patterns\Template;

/**
 * Class BankTemplateMethod.
 */
class DrawMoney extends BankTemplateMethod
{
    /**
     * 2.办理具体的业务：这里留给子类来实现.
     *
     * @return mixed
     */
    public function transact()
    {
        print_r('我要取款<br>');
    }
}
