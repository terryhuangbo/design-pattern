<?php

namespace Patterns\Prototype;

/**
 * Concrete Prototype.
 */
class Color extends ColorPrototype
{
    //Fields
    private $red;
    private $green;
    private $blue;

    //Constructors
    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    /**
     * Set red.
     *
     * @param mixed $red
     */
    public function setRed($red)
    {
        $this->red = $red;
    }

    /**
     * Get red.
     */
    public function getRed()
    {
        return $this->red;
    }

    /**
     * Set Green.
     *
     * @param  $green
     */
    public function setGreen($green)
    {
        $this->green = $green;
    }

    /**
     * Get Green.
     *
     * @return mixed
     */
    public function getGreen()
    {
        return $this->green;
    }

    /**
     * Set Blue.
     *
     * @param  $blue
     */
    public function setBlue($blue)
    {
        $this->blue = $blue;
    }

    /**
     * Get Blue.
     *
     * @return mixed
     */
    public function getBlue()
    {
        return $this->blue;
    }

    /**
     * 克隆该对象。如果是深拷贝用clone，如果是浅拷贝就直接返回.
     *
     * @return static
     */
    public function copy()
    {
        return clone $this;  // return $this;
    }

    /**
     * Display the color.
     */
    public function display()
    {
        echo $this->red, ',', $this->green, ',', $this->blue, '<br>';
    }
}
