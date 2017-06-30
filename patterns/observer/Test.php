<?php

namespace Patterns\Observer;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($arguments)
    {
        $subject = new Subject('My first Subject');

        //关注
        $observer1 = new Observer1($subject);
        $observer1->attach();

        $observer2 = new Observer2($subject);
        $observer2->attach();

        var_dump('Now subject is changed:');
        $subject->change('Now subject is changed!');

        echo '<br><br>';
        //取消关注
        $observer1->detach();
        $subject->change('Now subject is changed!');

        echo '<br><br>';
        //再关注
        $subject->attach($observer1);
        $subject->change('Now subject is changed!');

        echo '<br><br>';
        //取消所有关注
        $subject->detachAll();
        $subject->change('Now subject is changed!');
    }
}
