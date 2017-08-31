<?php

namespace Patterns\Decorator;

class Circle implements Shape
{
    /**
     * Draw a shape.
     *
     * @return mixed
     */
    public function draw()
    {
        print_r('Draw a Circle'.'<br>');
    }
}
