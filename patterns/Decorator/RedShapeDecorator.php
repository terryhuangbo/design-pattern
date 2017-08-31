<?php

namespace Patterns\Decorator;

/**
 * Class RedShapeDecorator.
 */
class RedShapeDecorator extends ShapeDecorator
{
    /**
     * Draw a shape.
     *
     * @return mixed
     */
    public function draw()
    {
        $this->shape->draw();
        print_r('Border Color: Red'.'<br>');
    }
}
