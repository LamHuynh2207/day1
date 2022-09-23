<?php

namespace Container3evxzqu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UXNcPh2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uXNcPh2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uXNcPh2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\StudentController::delete' => ['privates', '.service_locator.ho8CQlj', 'get_ServiceLocator_Ho8CQljService', true],
            'App\\Controller\\StudentController::edit' => ['privates', '.service_locator.ho8CQlj', 'get_ServiceLocator_Ho8CQljService', true],
            'App\\Controller\\StudentController::index' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController::new' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController::show' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\StudentController:delete' => ['privates', '.service_locator.ho8CQlj', 'get_ServiceLocator_Ho8CQljService', true],
            'App\\Controller\\StudentController:edit' => ['privates', '.service_locator.ho8CQlj', 'get_ServiceLocator_Ho8CQljService', true],
            'App\\Controller\\StudentController:index' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController:new' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController:show' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\StudentController::delete' => '?',
            'App\\Controller\\StudentController::edit' => '?',
            'App\\Controller\\StudentController::index' => '?',
            'App\\Controller\\StudentController::new' => '?',
            'App\\Controller\\StudentController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\StudentController:delete' => '?',
            'App\\Controller\\StudentController:edit' => '?',
            'App\\Controller\\StudentController:index' => '?',
            'App\\Controller\\StudentController:new' => '?',
            'App\\Controller\\StudentController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}