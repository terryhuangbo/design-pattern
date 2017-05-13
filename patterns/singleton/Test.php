<?php

namespace Patterns\Singleton;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        //now I get an instance of Singleton
        $singleton = Singleton::getInstance();
        $singleton->otherMethod();

        //now I get an instance of Singleton again
        $singleton2 = Singleton::getInstance();
        //compare whether the tow instances are equal
        echo '<br>';
        echo 'Whether the tow instances are equal: ';
        var_dump($singleton === $singleton2);

        //now I instantiate the Class Singleton
//        $singleton = new Singleton();
//        $singleton->otherMethod();
    }
}
