<?php

namespace Patterns\Proxy;

/**
 * 代理角色(Proxy):动态代理.
 *
 * @method request()
 * @method display()
 */
class GenericProxyWeather
{
    /**
     * @var Weather
     */
    protected $_subject;

    /**
     * GenericProxyWeather constructor.
     *
     * @param Weather $subject
     */
    public function __construct(Weather $subject)
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
