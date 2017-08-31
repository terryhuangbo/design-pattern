<?php

namespace Patterns\Decorator;

/**
 * Class ShapeDecorator.
 */
abstract class ShapeDecorator implements Shape
{
    /**
     * @var Shape
     */
    protected $shape;

    /**
     * ShapeDecorator constructor.
     */
    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
    }

    /**
     * Draw a shape.
     *
     * @return mixed
     */
    abstract public function draw();
}
