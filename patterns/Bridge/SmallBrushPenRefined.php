<?php

namespace Patterns\Bridge;

/**
 * 扩充由Abstraction;小毛笔.
 *
 * @author guisu
 */
class SmallBrushPenRefined extends BrushPenAbstraction
{
    public function draw()
    {
        echo 'Small and ', $this->color->paint(), ' drawing<br>';
    }
}
