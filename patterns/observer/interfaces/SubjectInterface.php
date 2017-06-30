<?php

namespace Patterns\Observer\Interfaces;

/**
 * Interface Subject.
 */
interface SubjectInterface
{
    /**
     * 关注.
     *
     * @param Observer $observer
     */
    public function attach(Observer $observer);

    /**
     * 取消关注.
     *
     * @param Observer $observer
     */
    public function detach(Observer $observer);

    /**
     * 通知观察者.
     */
    public function notify();
}
