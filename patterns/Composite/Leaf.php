<?php

namespace Patterns\Composite;

/**
 * Class Leaf.
 */
class Leaf extends Component
{
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $description;

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
     * @return NullIterator
     */
    public function createIterator()
    {
        return new NullIterator();
    }

    /**
     * Do something.
     *
     * @throws UnsupportedOperationException
     */
    public function operation()
    {
        $msg = '';
        $msg .= $this->name;
        $msg .= ': ';
        $msg .= $this->description;
        $msg .= '<br>';

        print_r($msg);
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
}
