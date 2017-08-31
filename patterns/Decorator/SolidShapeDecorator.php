<?php

namespace Patterns\Decorator;

/**
 * Class SolidShapeDecorator.
 */
class SolidShapeDecorator extends ShapeDecorator
{
    /**
     * Draw a shape.
     *
     * @return mixed
     */
    public function draw()
    {
        $this->shape->draw();
        print_r('Border Line: solid'.'<br>');
    }
}
