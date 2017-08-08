<?php

namespace Patterns\Composite\Dir;

use Patterns\Composite\Composite;

/**
 * Class Menu.
 */
class Directory extends Composite
{
    /**
     * @var
     */
    protected $name;

    /**
     * Leaf constructor.
     */
    public function __construct($dir = __DIR__, $level = 0)
    {
        if (!is_dir($dir)) {
            throw new \Exception($dir.' is not a directory');
        }
        $this->name = $dir;
        $this->level = $level + 1;

        $items = scandir($dir);
        $items = array_filter($items, function ($val) {
            return !in_array($val, ['.', '..']);
        });

        foreach ($items as $item) {
            if (is_dir($dir.DIRECTORY_SEPARATOR.$item)) {
                $this->items[] = new self($dir.DIRECTORY_SEPARATOR.$item, $this->level);
            } elseif (is_file($dir.DIRECTORY_SEPARATOR.$item)) {
                $this->items[] = new File($dir.DIRECTORY_SEPARATOR.$item, $this->level);
            } else {
                throw new \Exception($dir.' is not a directory or file');
            }
        }
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

        $iterator = $this->createIterator();
        while ($iterator->valid()) {
            $component = $iterator->current();
            $iterator->next();

            $component->printOut();
        }
    }

    /**
     * @return mixed
     */
    public function fileName()
    {
        return basename($this->name);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isDir()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isFile()
    {
        return false;
    }
}
