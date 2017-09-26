<?php

namespace Patterns\Builder;

class Client
{
    public static function main()
    {
        $proxy = new ProxyWeather();
        $report = $proxy->display('beijing');
    }

    public static function Genericmain()
    {
        $proxy = new GenericProxyWeather(new RealWeather());
        $report = $proxy->display('beijing');
    }
}
