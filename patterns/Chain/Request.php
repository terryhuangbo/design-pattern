<?php

namespace Patterns\Chain;

/**
 * 请假申请.
 */
class Request
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $day;
    /**
     * @var string
     */
    private $reason;

    /**
     * Request constructor.
     *
     * @param string $name
     * @param int    $day
     * @param string $reason
     */
    public function __construct($name = '', $day = 0, $reason = '')
    {
        $this->name = $name;
        $this->day = $day;
        $this->reason = $reason;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }
}
