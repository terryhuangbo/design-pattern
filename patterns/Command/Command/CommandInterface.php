<?php

namespace Patterns\Command\Command;

/**
 * Command interface must be implemented by all commands.
 *
 * A concrete command usually holds a receiver and delegate it to
 * fulfil the specific affairs within method execute().
 * A command can be made somewhere and be executed elsewhere.
 * So the generating and taking effect of a command decouples from time
 * and space.
 */
interface CommandInterface
{
    public function execute();
}
