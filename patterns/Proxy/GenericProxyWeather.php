<?php

namespace Patterns\Proxy;

/**
 * 代理角色(Proxy):动态代理.
 */
class GenericProxyWeather
{
    protected $_subject;

    public function __construct($subject)
    {
        $this->_subject = $subject;
    }

    /**
     * 这是实现保护代理的关键.
     *
     * @param $method
     * @param $args
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        return call_user_func_array(
            array($this->_subject, $method),
            $args
        );
    }
}
