<?php

namespace Patterns\Adapter;

/**
 * Interface Target. The desirable interface.
 */
interface Target
{
    /**
     * @return mixed
     */
    public function desirable();
}
