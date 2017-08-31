<?php

namespace Patterns\Decorator;

/**
 * Class Rectangle.
 */
class Rectangle implements Shape
{
    /**
     * Draw a shape.
     *
     * @return mixed
     */
    public function draw()
    {
        print_r('Draw a Rectangle'.'<br>');
    }
}
