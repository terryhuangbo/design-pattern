<?php

namespace Patterns\Prototype;

/**
 * 为了符合“迪米特法则”，使得用户程序Client对对象创建所知细节越少，需要一个管理员类。
 * 用户只需要操作ColorManager中的简单、易懂的方法来创建自己想要的类即可。
 */
class ColorManager
{
    /**
     * Fields.
     *
     * @var ColorPrototype[]
     */
    public static $colors = array();

    /**
     * 添加模板
     *
     * @param $name
     * @param ColorPrototype $value
     */
    public static function add($name, ColorPrototype $value)
    {
        self::$colors[$name] = $value;
    }

    /**
     * 获取模板的克隆。获取之后，用户可以进一步的DIY.
     *
     * @param $name
     *
     * @return mixed
     */
    public static function getCopy($name)
    {
        return self::$colors[$name]->copy();
    }
}
