<?php

include __DIR__ . '/class/Openweather.php';

$meteo = new Openweather();

$meteo->getForecast('Orléans', 'fr');

var_dump($meteo);

curl_close($curl);