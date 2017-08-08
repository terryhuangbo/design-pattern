<?php

namespace Patterns\Composite;

use Patterns\Composite\Dir\Directory;
use Patterns\Composite\Menu\Menu;
use Patterns\Composite\Menu\MenuItem;
use Patterns\Composite\Menu\Waitress;
use Patterns\TestInterface;

/**
 * Class Test.
 */
class Test implements TestInterface
{
    public function run($argument)
    {
        $breakfastMenu = new Menu(
            'Breakfast menu',
            'this is  menu for breakfast'
        );
        $lunchMenu = new Menu(
            'Lunch menu',
            'this is  menu for lunch'
        );
        $dinnerMenu = new Menu(
            'Dinner menu',
            'this is  menu for dinner'
        );
        $dessertMenu = new Menu(
            'Dessert menu',
            'this is  menu for lunch dessert'
        );

        $allMenus = new Menu(
            'All menu',
            'this is  menu for all dinners'
        );

        $allMenus->add($breakfastMenu);
        $allMenus->add($lunchMenu);
        $allMenus->add($dinnerMenu);

        $breakfastMenu->add(new MenuItem('Milk', 'Milk with sugar'));
        $breakfastMenu->add(new MenuItem('Steamed buns', 'Steamed buns with pork'));

        $lunchMenu->add(new MenuItem('Tofu', 'Spicy tofu'));
        $lunchMenu->add(new MenuItem('Yuxiang shredded pork', 'Yuxiang shredded pork'));
        $lunchMenu->add(new MenuItem('Peppery chicken', 'Peppery chicken'));
        $lunchMenu->add($dessertMenu);

        $dinnerMenu->add(new MenuItem('Kung-pao chicken', 'Kung-pao chicken'));
        $dinnerMenu->add(new MenuItem('Borsch chicken', 'Delicious borsch'));

        $dessertMenu->add(new MenuItem('Fruit', 'Water melon'));
        $dessertMenu->add(new MenuItem('Biscuit', 'biscuit'));

        $waitress = new Waitress($allMenus);
        $waitress->printMenu();

        echo '<br><br>';

        $dir = new Directory((__DIR__));
        $dir->printOut();

        echo '<br><br>';

        $recusive = new \RecursiveIteratorIterator($dir, \RecursiveIteratorIterator::SELF_FIRST);
        foreach ($recusive as $file) {
            //            if ($file->isFile())
            print_r(str_repeat('&nbsp;', ($file->getLevel() - 1) * 4).$file->fileName().'<br>');
        }
    }
}
