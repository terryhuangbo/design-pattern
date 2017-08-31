<?php

namespace Patterns\Adapter\Ext;

/**
 * 类适配器模式，使用的是继承
 */

/**
 * 目标角色.
 *
 * @version 2.0
 */
interface Target
{
    /**
     * 源类的方法：这个方法将来有可能继续改进.
     */
    public function hello();

    /**
     * 目标点.
     */
    public function world();
}
