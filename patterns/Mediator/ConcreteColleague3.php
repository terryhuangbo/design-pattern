<?php

namespace Patterns\Mediator;

/**
 * 具体同事类.
 */
class ConcreteColleague3 extends Colleague
{
    /**
     * ConcreteColleague3 constructor.
     *
     * @param Mediator $mediator
     */
    public function __construct(Mediator $mediator)
    {
        parent::__construct($mediator);
    }

    /**
     * @param $message
     */
    public function send($message)
    {
        $this->mediator->dispatch($this, $message);
    }

    /**
     * @param $message
     */
    public function notify($message)
    {
        echo 'ConcreteColleague2 m:', $message, '<br/>';
    }
}
