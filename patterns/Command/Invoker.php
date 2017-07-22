<?php

namespace Patterns\Command;

use Patterns\Command\Command\CommandInterface;

/**
 * Command executor.
 * Invoker get a command with method setCommand(), and then execute it.
 * What the invoker cares about is not what kind the command is nor what the
 * command will do, but whether it is executable.
 * Invoker decouples from command and command receiver.
 */
class Invoker
{
    /**
     * @var CommandInterface
     */
    protected $command;

    /**
     * @param CommandInterface $command
     */
    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function invoke()
    {
        $this->command->execute();
    }
}
