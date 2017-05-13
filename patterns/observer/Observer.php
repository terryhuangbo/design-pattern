<?php

/**
 * Interface Observer
 */
interface Observer
{
    /**
     * @var Subject|Obserable 被观察者
     */
    protected $subject;

    public function __construct(Subject $subject);

    /**
     * @param $argument
     * @return mixed
     */
    public function update($argument)
    {
    }

    /**
     * @param $errorCode
     * @param $errorMessage
     * @param Subject $subject
     * @return mixed
     */
    public function reportError($errorCode, $errorMessage, Subject $subject)
    {
    }

}

