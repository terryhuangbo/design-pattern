<?php

namespace Patterns\Decorator;

/**
 * Class BlueShapeDecorator.
 */
class BlueShapeDecorator extends ShapeDecorator
{
    /**
     * Draw a shape.
     *
     * @return mixed
     */
    public function draw()
    {
        $this->shape->draw();
        print_r('Border Color: Blue'.'<br>');
    }
}
