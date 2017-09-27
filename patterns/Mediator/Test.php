<?php

namespace Patterns\Mediator;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        $objMediator = new  ConcreteMediator();
        $objC1 = new ConcreteColleague1($objMediator);
        $objC2 = new ConcreteColleague2($objMediator);
        $objC3 = new ConcreteColleague3($objMediator);

        $objC1->send('from ConcreteColleague1');
        $objC2->send('from ConcreteColleague2');
        $objC3->send('from ConcreteColleague3');
    }
}
