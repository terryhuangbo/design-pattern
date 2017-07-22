<?php

namespace Patterns\Command\Receiver;

/**
 * Command receiver and finisher.
 * What command will actually do is determined and fulfilled by receiver.
 *
 * @package Patterns\Receiver
 */
class Receiver implements ReceiverInterface
{
    /**
     * @return mixed
     */
    public function on()
    {
        print_r('I have do something <b>On</b>!'.'<br>');
    }

    /**
     * @return mixed
     */
    public function off()
    {
        print_r('I have do something <b>Off</b>!'.'<br>');
    }

    /**
     * @return mixed
     */
    public function other()
    {
        print_r('I have do something <b>Other</b>!'.'<br>');
    }
}
