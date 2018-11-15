<?php

namespace Patterns\Bridge;

/**
 * Abstraction抽象类的接口
 * 毛笔的大小和颜料颜色是两个不同的维度。可以让毛笔同时继承大小抽象类和颜色抽象类来实现。
 * 但是这样的话每个子类都必须同时实现两个维度，不再具有任何扩展性。
 * 可以采用桥接方式，只让抽象的毛笔的子类只扩展大小的维度，而颜色的维度委托给抽象的颜色去
 * 完成。
 * 如果再有第三个维度，那就应该再注入第二个Implementor(注入方式可以为setter也可以constructor注入)
 * 这样，桥接模式实现功能所需的类数量就是各个维度数量的相加，而若是通过继承获取该维度属性，那就是各个
 * 维度数量的相乘。
 */
abstract class BrushPenAbstraction
{
    /**
     * @var ImplementorColor
     */
    protected $color;

    /**
     * @param ImplementorColor $color
     */
    public function setImplementorColor(ImplementorColor $color)
    {
        $this->color = $color;
    }

    /**
     * Draw.
     */
    abstract public function draw();
}
