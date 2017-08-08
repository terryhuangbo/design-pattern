<?php

namespace Patterns\Composite\Menu;

/**
 * Class Waitress.
 */
class Waitress
{
    /**
     * @var Menu
     */
    private $allMenus;

    /**
     * Waitress constructor.
     */
    public function __construct(Menu $menu)
    {
        $this->allMenus = $menu;
    }

    public function printMenu()
    {
        $this->allMenus->printMenu();
    }

    public function printObject()
    {
        echo '<pre>';
        print_r($this->allMenus);
    }

    public function recursiveMenuItem()
    {
        $recursive = new \RecursiveIteratorIterator($this->allMenus);
        $recursive->rewind();
        while ($recursive->valid()) {
            $component = $recursive->current();

            print_r($component->operation().'<br>');

            $recursive->next();
        }
    }
}
