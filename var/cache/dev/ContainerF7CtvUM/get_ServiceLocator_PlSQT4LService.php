<?php

namespace ContainerF7CtvUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PlSQT4LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.plSQT4L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.plSQT4L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'checkAttendance' => ['privates', '.errored..service_locator.plSQT4L.App\\Entity\\CheckAttendance', NULL, 'Cannot autowire service ".service_locator.plSQT4L": it references class "App\\Entity\\CheckAttendance" but no such service exists.'],
        ], [
            'checkAttendance' => 'App\\Entity\\CheckAttendance',
        ]);
    }
}
