<?php

namespace Patterns\Proxy;

/**
 *  抽象主题角色(Subject):天气.
 */
interface Weather
{
    public function request($city);

    public function display($city);

    public function isValidCity($city);
}
