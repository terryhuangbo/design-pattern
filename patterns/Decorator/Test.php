<?php

namespace Patterns\Decorator;

use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        // draw a circle
        $circle = new Circle();

        $circle = new RedShapeDecorator($circle);
        $circle = new BoldShapeDecorator($circle);
        $circle = new DottedShapeDecorator($circle);

        $circle->draw();

        echo '<br><br>';

        // draw a rectangle
        $rectangle = new Rectangle();
        $rectangle = new SolidShapeDecorator($rectangle);
        $rectangle = new BlueShapeDecorator($rectangle);

        $rectangle->draw();
    }
}
