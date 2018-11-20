<?php

namespace Patterns\Proxy;

/**
 * 真实主题角色(RealSubject):.
 */
class RealWeather implements Weather
{
    protected $_url = 'http://t.weather.sojson.com/api/weather/city/';
    protected $_weather = '';

    public function __construct()
    {
    }

    public function request($city)
    {
        $this->_weather = file_get_contents($this->_url.$city);
    }

    public function display($city)
    {
        if ('' == $this->_weather) {
            $this->request($city);
        }
        $data = $this->_weather = json_decode($this->_weather, true);
        $weather = date(
                'Y年n月j日'
            ).'  天气预报：<span class="cor_ff6c00 f_bold">'.$data['cityInfo']['city'].'</span><img class="v_middle" src="'.$this->_url.$city.'" width="16" height="17" align="absmiddle" /> <span class="f_bold">'.$data['data']['wendu'].'°C  '.$data['data']['quality'].'</span><br>';
        echo $weather;
    }
}
