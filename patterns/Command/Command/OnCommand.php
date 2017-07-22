<?php

namespace Patterns\Command\Command;

use Patterns\Command\Receiver\ReceiverInterface;


/**
 * Class OnCommand.
 */
class OnCommand implements CommandInterface
{
    /**
     * @var ReceiverInterface
     */
    protected $receivier;

    /**
     * Command constructor.
     */
    public function __construct(ReceiverInterface $receiver)
    {
        $this->receivier = $receiver;
    }

    public function execute()
    {
        $this->receivier->on();
    }
}
