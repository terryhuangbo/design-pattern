<?php

namespace Patterns\Bridge;

/**
 * 扩充由Abstraction;大毛笔.
 */
class BigBrushPenRefined extends BrushPenAbstraction
{
    public function draw()
    {
        echo 'Big and ', $this->color->paint(), ' drawing<br>';
    }
}
