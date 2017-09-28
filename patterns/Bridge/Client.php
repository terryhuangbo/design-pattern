<?php

namespace Patterns\Bridge;

class Client
{
    public static function Main()
    {
        //小笔画红色
        $smallBrushPen = new SmallBrushPenRefined();
        $smallBrushPen->setImplementorColor(new ImplementorRed());
        $smallBrushPen->draw();
        //小笔画黑色
        $smallBrushPen->setImplementorColor(new ImplementorBlack());
        $smallBrushPen->draw();

        //大笔画白色
        $bigBrushPen = new BigBrushPenRefined();
        $bigBrushPen->setImplementorColor(new ImplementorWhite());
        $bigBrushPen->draw();

        //中笔画蓝色
        $middleBrushPen = new MiddleBrushPenRefined();
        $middleBrushPen->setImplementorColor(new ImplementorBlue());
        $middleBrushPen->draw();
        //中笔画绿色
        $middleBrushPen->setImplementorColor(new ImplementorGreen());
        $middleBrushPen->draw();
    }
}
