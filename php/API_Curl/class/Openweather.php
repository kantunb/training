<?php

class Openweather
{

    private $apiKey; // = '376eb14167df15ca68d9fb0aa51154ae';

    public function __construct(string $apiKey){
        $this->apiKey = $apiKey;
    }

    public function getForecast(string $city, $country) : ?array 
    {
        $curl = curl_init("https://api.openweathermap.org/data/2.5/weather?q={$city},{$country}&appid={$this->apiKey}&units=metric&lang=fr");
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CAINFO          => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cert.pem',
            CURLOPT_TIMEOUT => 1
        ]);
        $data = curl_exec($curl);

        if ($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) {
            return null;
        } else {
            $data = json_decode($data, true);
            $meteo['date'] = date('d/m/Y');
            $meteo['description'] = $data['weather'][0]['description'];
            $meteo['temp'] = $data['main']['temp'];
            return $meteo;
        }

        curl_close($curl);
    }
};