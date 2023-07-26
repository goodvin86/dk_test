<?php

namespace App\Service;

use App\Repository\UserRepository;

class Weather
{
    public function showWeather($city)
    {
        $country = "RU"; // страна
        $mode = "json"; // в каком виде мы получим данные json или xml
        $units = "metric"; // Единицы измерения. metric или imperial
        $lang = "ru"; // язык
        $countDay = 1; // количество дней (максимум 14 дней)
        $appID = "0fdcfb86f3581aaad88a6d3adc680950"; // APPID

        // URL для запроса
        $url = "http://api.openweathermap.org/data/2.5/forecast?q=$city,$country, $mode&cnt=$countDay&lang=$lang&units=$units&appid=$appID";
        // запрос к API
        $data = @file_get_contents($url);
        // если получили данные
        if($data){
            // декодируем полученные данные
            $dataJson = json_decode($data);
            // получаем только нужные данные
            $arrayDays = $dataJson->list;
            // выводим данные
            foreach($arrayDays as $oneDay){
                $weather = "" . $oneDay->main->temp . " ℃, " . $oneDay->weather[0]->description . "";
            }
            //return $weather;
        }else{
            $weather = "Сервер не доступен!";
        }
        return $weather;
    }
}