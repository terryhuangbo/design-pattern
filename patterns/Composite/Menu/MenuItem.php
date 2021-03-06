<?php

namespace Patterns\Composite\Menu;

use Patterns\Composite\Leaf;

class MenuItem extends Leaf
{
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $description;

    /**
     * Leaf constructor.
     *
     * @param $name
     * @param $description
     */
    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $msg = '';
        $msg .= $this->name;
        $msg .= ': ';
        $msg .= $this->description;
        $msg .= '<br>';

        return $msg;
    }

    /**
     * Do something.
     */
    public function printMenu()
    {
        $msg = '';
        $msg .= $this->getName();
        $msg .= ': ';
        $msg .= $this->getDescription();
        $msg .= '<br>';

        print_r($msg);
    }
}
