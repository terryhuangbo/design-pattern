<?php

namespace Patterns\Visitor\ComputerPart;

use Patterns\Visitor\Visitor\ComputerPartVisitor;

/**
 * Computer是一个对象结构，存储了不同类型的元素对象，以供不同访问者访问。
 * 该对象结构的类很少改变，但经常需要在此结构上定义新的操作(算法)。
 *
 * 很多系统可以按照算法和数据结构分开，也就是说一些对象含有算法，而另一些对象含有数据，
 * 接受算法的操作。如果这样的系统有比较稳定的数据结构，又有易于变化的算法的话，
 * 使用访问者模式就是比较合适的，因为访问者模式使得算法操作的增加变得容易。
 */
class Computer
{
    /**
     * @var ComputerPart[]
     */
    private $parts = [];

    /**
     * Computer constructor.
     */
    public function __construct()
    {
        $this->parts = [
            new Keyboard(),
            new Monitor(),
            new Mouse(),
        ];
    }

    /**
     * @param ComputerPart $computerPart
     */
    public function add(ComputerPart $computerPart)
    {
        $this->parts[] = $computerPart;
    }

    /**
     * @param ComputerPart $computerPart
     *
     * @return mixed
     */
    public function delete(ComputerPart $computerPart)
    {
        $index = array_search($computerPart, $this->parts);
        if (false !== $index) {
            unset($this->parts[$index]);
        }

        return $index;
    }

    /**
     * @param ComputerPartVisitor $visitor
     */
    public function accept(ComputerPartVisitor $visitor)
    {
        foreach ($this->parts as $part) {
            $part->accept($visitor);
        }
    }
}
