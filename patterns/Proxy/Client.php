<?php

namespace Patterns\Proxy;

/**
 * 北京  101010100
 * 上海  101020100
 * 苏州  101190401
 * 成都  101270101.
 */
class Client
{
    public static function main()
    {
        /*一种代理的方式:延迟代理*/
        $proxy = new ProxyWeather();
        // 干别的事情...或者执行别的不需要调用client()的方法
        sleep(0.5);
        // 真正需要获取天气预报的地方
        $proxy->display('101190401');  //苏州

        /*另一种代理的方式:动态代理*/
        $proxy = new GenericProxyWeather(new RealWeather());
        $proxy->display('101270101');  //成都
    }
}
