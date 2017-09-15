<?php

namespace Patterns\Facade;

/**
 * 外观模式
 * 注入的各个类就是子系统。用户Client仅通过SwitchFacade获取所需功能，
 * 而SwitchFacade是委托给各个子系统来完成的。Client不用和子系统打交道，
 * 不用关心单个功能的实现，因此和各个子系统之间完成解耦。
 */
class SwitchFacade
{
    private $_light = null;     //电灯
    private $_ac = null;     //空调
    private $_fan = null;     //电扇
    private $_tv = null;     //电视

    public function __construct()
    {
        $this->_light = new Light();
        $this->_fan = new Fan();
        $this->_ac = new AirConditioner();
        $this->_tv = new Television();
    }

    /**
     * 晚上开电灯.
     */
    public function night($isOpen = 1)
    {
        if ($isOpen == 1) {
            $this->_light->on();
            $this->_fan->on();
            $this->_ac->on();
            $this->_tv->on();
        } else {
            $this->_light->off();
            $this->_fan->off();
            $this->_ac->off();
            $this->_tv->off();
        }
    }

    /**
     * 白天不需要电灯.
     */
    public function day($isOpen = 0)
    {
        if ($isOpen == 1) {
            $this->_fan->on();
            $this->_ac->on();
            $this->_tv->on();
        } else {
            $this->_fan->off();
            $this->_ac->off();
            $this->_tv->off();
        }
    }
}
