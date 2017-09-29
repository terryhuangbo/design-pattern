<?php

namespace Patterns\Filter;

/**
 * Class Person.
 */
class Person
{
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $gender;
    /**
     * @var
     */
    protected $maritalStatus;

    /**
     * Person constructor.
     *
     * @param $name
     * @param $gender
     * @param $maritalStatus
     */
    public function __construct($name, $gender, $maritalStatus)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->maritalStatus = $maritalStatus;
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
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }
}
