<?php

namespace Patterns\Composite\Dir;

use Patterns\Composite\Leaf;

class File extends Leaf
{
    /**
     * @var
     */
    protected $name;

    /**
     * Leaf constructor.
     *
     * @param $name
     */
    public function __construct($name, $level = 0)
    {
        $this->name = $name;
        $this->level = $level + 1;
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
    public function printOut()
    {
        $msg = str_repeat('&nbsp;', ($this->getLevel() - 1) * 4);
        $msg .= $this->getName();
        $msg .= '<br>';

        print_r($msg);
    }

    public function fileName()
    {
        return basename($this->name);
    }

    /**
     * @return bool
     */
    public function isDir()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isFile()
    {
        return true;
    }
}
