<?php

namespace Patterns\Decorator;

/**
 * Class BoldShapeDecorator.
 */
class BoldShapeDecorator extends ShapeDecorator
{
    /**
     * Draw a shape.
     *
     * @return mixed
     */
    public function draw()
    {
        $this->shape->draw();
        print_r('Border Bold: true'.'<br>');
    }
}
