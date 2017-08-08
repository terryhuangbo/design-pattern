<?php

namespace Patterns\Composite\Menu;

use Patterns\Composite\Composite;

/**
 * Class Menu.
 */
class Menu extends Composite
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

        $iterator = $this->createIterator();
        while ($iterator->valid()) {
            $component = $iterator->current();

            // Call operation recursively
            $component->printMenu();

            $iterator->next();
        }
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

        $iterator = $this->createIterator();
        while ($iterator->valid()) {
            $component = $iterator->next();
            $msg .= $component;
        }

        return $msg;
    }
}
