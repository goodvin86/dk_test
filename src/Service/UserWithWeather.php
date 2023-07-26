<?php

namespace App\Service;

use App\Repository\UserRepository;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class UserWithWeather
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function updateUserWithWeather()
    {
        $userRepository = $this->userRepository;
        $weather = new Weather();

        //настройка для кэша, 2 значение - время в секундах
        $cachePool = new FilesystemAdapter('',10, 'cache');
        $cacheWeather = $cachePool->getItem('cache_weather');

        $users = $userRepository->findAllUsers();
        foreach ($users as $user){
            foreach ($user as $key => $value ){
                if ($key == 'city'){
                    // получаем погоду по названию города для конкретного пользователя
                    // и формируем массив с данными погоды для кэша
                    $cacheArray[]=$weather->showWeather($value);
                }
            }
        }

        //если находим элемент с ключом cache_weather, то выдаем его
        if ($cachePool->hasItem('cache_weather'))
        {
            $cacheWeather = $cachePool->getItem('cache_weather');
            //формируем массив с погодными данными из кэша
            $usersWeatherArray=$cacheWeather->get();

            //сравнение массива с новыми погодными данными с массивом погодныч данных из кэша
            if (count($cacheArray) == count($usersWeatherArray)) {
                // дополняем массив пользователей с данными по погоде из кэша
                for ($i = 0; $i < count($usersWeatherArray); ++$i) {
                    $users[$i]['weather'] = $usersWeatherArray[$i];
                }
            }
            else {
                // дополняем массив пользователей с данными по погоде с учетом изменений,
                // а также обновляем кэш
                for ($i = 0; $i < count($cacheArray); ++$i){
                    $users[$i]['weather']=$cacheArray[$i];
                }
                $cacheWeather->set($cacheArray);
                $cachePool->save($cacheWeather);
            }

        }
        //если кэш пустой и есть массив из пользователей, заполняем его данными массива $cacheArray
        elseif (!$cacheWeather->isHit()&&isset($cacheArray))
        {
            $cacheWeather->set($cacheArray);
            $cachePool->save($cacheWeather);
            for ($i = 0; $i < count($cacheArray); ++$i){
                $users[$i]['weather']=$cacheArray[$i];
            }
        }

        return $users;
    }
}