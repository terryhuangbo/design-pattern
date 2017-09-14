<?php

namespace Patterns\Proxy;

/**
 * 代理角色(Proxy):延迟代理.
 */
class ProxyWeather implements Weather
{
    private $_client;

    private function client()
    {
        // 这是延迟代理的关键
        if (!$this->_client instanceof RealWeather) {
            $this->_client = new RealWeather();
        }

        return $this->_client;
    }

    public function request($city)
    {
        $this->client()->request($city);
    }

    public function isValidCity($city)
    {
        return $this->client()->isValidCity($city);
    }

    public function display($city)
    {
        return $this->client()->display($city);
    }
}
