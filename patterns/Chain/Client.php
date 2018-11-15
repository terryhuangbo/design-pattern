<?php

namespace Patterns\Chain;

/**
 * 在具体使用时候，需要注意两点：
 * 1.设置责任链，由哪些人来签字，签字顺序是怎么样的
 * 2.设置起始点，从谁开始签字.
 */
class Client
{
    /**
     * 流程1：leader -> manager -> generalManager.
     */
    public static function main()
    {
        $leader = new LeaderHandler('Leader');
        $manager = new ManagerHandler('Manager');
        $generalManager = new GeneralManagerHandler('GeneralManager');

        //请求实例
        $request = new Request('Minirice', 4, '休息');

        //设置责任链
        $leader->setSuccessor($manager);
        $manager->setSuccessor($generalManager);

        //设置起始点
        $leader->handleRequest($request);
    }

    /**
     * 流程2: leader -> generalManager.
     */
    public static function main2()
    {
        //签字列表
        $leader = new LeaderHandler('Leader');
        $generalManager = new GeneralManagerHandler('GeneralManager');

        //请求实例
        $request = new Request('Terry', 3, '休息');
        //设置责任链
        $leader->setSuccessor($generalManager);

        //设置起始点
        $leader->handleRequest($request);
    }

    /**
     * 流程3: 如果leader不在，那么完全可以写这样的代码
     * manager -> generalManager.
     */
    public static function main3()
    {
        //签字列表
        $leader = new LeaderHandler('Leader');
        $manager = new ManagerHandler('Manager');
        $generalManager = new GeneralManagerHandler('GeneralManager');

        //请求实例
        $request = new Request('Jennifer', 0.1, '休息');
        //设置责任链
        $leader->setSuccessor($manager);
        $manager->setSuccessor($generalManager);

        //设置起始点
        $manager->handleRequest($request);
    }
}
