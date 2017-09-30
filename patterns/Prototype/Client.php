<?php

namespace Patterns\Prototype;

/**
 *Client.
 */
class Client
{
    public static function Main()
    {
        //原型：白色
        ColorManager::add('white', new Color(255, 0, 0));

        //红色可以由原型白色对象得到，只是重新修改白色: r
        $red = ColorManager::getCopy('white');
        $red->setRed(255);
        $red->display();

        //绿色可以由原型白色对象得到，只是重新修改白色: g
        $green = ColorManager::getCopy('white');
        $green->setGreen(255);
        $green->display();

        //绿色可以由原型白色对象得到，只是重新修改白色: b
        $blue = ColorManager::getCopy('white');
        $blue->setBlue(255);
        $blue->display();

        // 深拷贝和浅拷贝
        $blue1 = ColorManager::getCopy('white');
        $blue1->setBlue(255);
        $blue1->display();

        //深拷贝时恒为false；但是如果是浅拷贝，则恒为true，即便$blue1的$blue属性不同
        var_dump($blue === $blue1);
        exit();
    }
}
