<?php

namespace ContainerTAxulDk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_10iiG0Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.1_0iiG0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1_0iiG0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'checkAttendance' => ['privates', '.errored..service_locator.1_0iiG0.App\\Entity\\CheckAttendance', NULL, 'Cannot autowire service ".service_locator.1_0iiG0": it references class "App\\Entity\\CheckAttendance" but no such service exists.'],
            'checkAttendanceRepository' => ['privates', 'App\\Repository\\CheckAttendanceRepository', 'getCheckAttendanceRepositoryService', true],
        ], [
            'checkAttendance' => 'App\\Entity\\CheckAttendance',
            'checkAttendanceRepository' => 'App\\Repository\\CheckAttendanceRepository',
        ]);
    }
}
