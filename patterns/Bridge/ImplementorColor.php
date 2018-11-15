<?php

namespace Patterns\Bridge;

/**
 * 实现类接口(Implementor)
 * 之所有要被称为Implementor，是因为要满足画图颜色这一维度的可变，一般是要实现/继承AbstractColor
 * 这么一个抽象类。但是现在颜色这一抽象部分被单独拿出来称为另一个抽象类，在运行的时候又被动态的注入回
 * BrushPenAbstraction里面。因此实现了“抽象化-实例化”这一对立统一过程的分离。
 */
abstract class ImplementorColor
{
    protected $value;

    /**
     * 着色.
     */
    abstract public function paint();
}
