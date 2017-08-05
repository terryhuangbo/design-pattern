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
        $this->allMenus->operation();
    }

    public function printObject()
    {
        echo '<pre>';
        print_r($this->allMenus);
    }
}
