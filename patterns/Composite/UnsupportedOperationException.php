<?php

namespace Patterns\Composite;

use Exception;

class UnsupportedOperationException extends Exception
{
    /**
     * UnsupportedOperationException constructor.
     */
    public function __construct()
    {
        $message = 'Method is not allowed';
        parent::__construct($message, 500);
    }
}
