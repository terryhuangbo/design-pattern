<?php

namespace Patterns\Composite;

/**
 * Class Composite.
 */
class Composite extends Component implements \IteratorAggregate
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
     * @var \ArrayObject
     */
    private $items;

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
     * {@inheritdoc}
     */
    public function add(Component $component)
    {
        $this->items[] = $component;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(Component $component)
    {
        foreach ($this->items as $key => $item) {
            if ($item == $component) {
                unset($this->items[$key]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChild($key)
    {
        return $this->items[$key] ?: null;
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
     * @return mixed
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->items);
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

        $iterator = $this->getIterator();
        while ($iterator->valid()) {
            $component = $iterator->current();

            // Call operation recursively
            $component->operation();

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
