<?php

namespace Patterns\Command;

use Patterns\Command\Command\OffCommand;
use Patterns\Command\Command\OnCommand;
use Patterns\Command\Receiver\Receiver;

/**
 * Client is who request a command.
 *
 * A client ask for an invoker, and some commands. Command
 * can be executed by the invoker, and fulfilled by a specific receiver.
 */
class Client
{
    public static function request()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        /* on command */
        $on = new OnCommand($receiver);
        $invoker->setCommand($on);
        $invoker->invoke();

        /* off command */
        $off = new OffCommand($receiver);
        $invoker->setCommand($off);
        $invoker->invoke();
    }
}
