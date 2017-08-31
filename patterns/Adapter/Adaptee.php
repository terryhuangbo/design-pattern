<?php

namespace Patterns\Adapter;

/**
 * Interface Adaptee. The available interface.
 */
interface Adaptee
{
    /**
     * @return mixed
     */
    public function available();
}
