<?php

namespace Patterns\Flyweight\Complex;

/**
 * 复合享元模式
 * 复合享元模式实际上是简单享元模式与组合模式的组合。
 */

/**
 * 抽象享元角色.
 */
abstract class Flyweight
{
    /**
     * 示意性方法.
     *
     * @param string $state 外部状态
     */
    abstract public function operation($state);
}
