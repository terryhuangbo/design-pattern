<?php

namespace Patterns\Decorator;

/**
 * Class DottedShapeDecorator.
 */
class DottedShapeDecorator extends ShapeDecorator
{
    /**
     * Draw a shape.
     *
     * @return mixed
     */
    public function draw()
    {
        $this->shape->draw();
        print_r('Border Line: dotted'.'<br>');
    }
}
