<?php

namespace Container22Z3xxp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMybuilder_CronosBundle_CronProcessUpdaterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'mybuilder.cronos_bundle.cron_process_updater' shared service.
     *
     * @return \MyBuilder\Cronos\Updater\CronUpdater
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/mybuilder/cronos/src/Updater/CronUpdater.php';
        include_once \dirname(__DIR__, 4).'/vendor/mybuilder/cronos/src/Updater/CronManipulator.php';
        include_once \dirname(__DIR__, 4).'/vendor/mybuilder/cronos/src/Updater/CommandCronManipulator.php';
        include_once \dirname(__DIR__, 4).'/vendor/mybuilder/cronos/src/Updater/ProcessRunner.php';
        include_once \dirname(__DIR__, 4).'/vendor/mybuilder/cronos/src/Updater/SymfonyProcessRunner.php';
        include_once \dirname(__DIR__, 4).'/vendor/mybuilder/cronos/src/Updater/FileSystem.php';
        include_once \dirname(__DIR__, 4).'/vendor/mybuilder/cronos/src/Updater/SymfonyFileSystem.php';

        return $container->services['mybuilder.cronos_bundle.cron_process_updater'] = new \MyBuilder\Cronos\Updater\CronUpdater(new \MyBuilder\Cronos\Updater\CommandCronManipulator(new \MyBuilder\Cronos\Updater\SymfonyProcessRunner(), new \MyBuilder\Cronos\Updater\SymfonyFileSystem()));
    }
}