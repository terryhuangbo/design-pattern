<?php

namespace Patterns\Observer\Interfaces;

/**
 * Interface Observer.
 */
interface ObserverInterface
{
    /**
     * 关注.
     */
    public function attach();

    /**
     * 取消关注.
     */
    public function detach();

    /**
     * @return mixed
     */
    public function update();
}
