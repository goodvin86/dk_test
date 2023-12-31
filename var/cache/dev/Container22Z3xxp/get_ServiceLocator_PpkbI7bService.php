<?php

namespace Container22Z3xxp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PpkbI7bService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PpkbI7b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PpkbI7b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'userWithWeather' => ['privates', 'App\\Service\\UserWithWeather', 'getUserWithWeatherService', true],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
            'userWithWeather' => 'App\\Service\\UserWithWeather',
        ]);
    }
}
