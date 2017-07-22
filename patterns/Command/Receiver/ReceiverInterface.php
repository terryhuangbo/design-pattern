<?php

namespace Patterns\Command\Receiver;

/**
 * Command receiver and finisher.
 * What command will actually do is determined and fulfilled by receiver.
 */
interface ReceiverInterface
{
    /**
     * @return mixed
     */
    public function on();

    /**
     * @return mixed
     */
    public function off();

    /**
     * @return mixed
     */
    public function other();
}
