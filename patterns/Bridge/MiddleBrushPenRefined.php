<?php

namespace Patterns\Bridge;

/**
 * 扩充由Abstraction;中毛笔.
 *
 * @author guisu
 */
class MiddleBrushPenRefined extends BrushPenAbstraction
{
    public function draw()
    {
        echo 'Middle and ', $this->color->paint(), ' drawing<br>';
    }
}
