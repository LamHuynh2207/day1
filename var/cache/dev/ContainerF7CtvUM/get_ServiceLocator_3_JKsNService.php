<?php

namespace ContainerF7CtvUM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3_JKsNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3.JKs_N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3.JKs_N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CheckAttendanceController::delete' => ['privates', '.service_locator.1_0iiG0', 'get_ServiceLocator_10iiG0Service', true],
            'App\\Controller\\CheckAttendanceController::edit' => ['privates', '.service_locator.1_0iiG0', 'get_ServiceLocator_10iiG0Service', true],
            'App\\Controller\\CheckAttendanceController::index' => ['privates', '.service_locator.MdkrM0p', 'get_ServiceLocator_MdkrM0pService', true],
            'App\\Controller\\CheckAttendanceController::new' => ['privates', '.service_locator.MdkrM0p', 'get_ServiceLocator_MdkrM0pService', true],
            'App\\Controller\\CheckAttendanceController::show' => ['privates', '.service_locator.plSQT4L', 'get_ServiceLocator_PlSQT4LService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.iSfEFXi', 'get_ServiceLocator_ISfEFXiService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.iSfEFXi', 'get_ServiceLocator_ISfEFXiService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\ProductController::new' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\ProductController::show' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\StudentController::delete' => ['privates', '.service_locator.ho8CQlj', 'get_ServiceLocator_Ho8CQljService', true],
            'App\\Controller\\StudentController::edit' => ['privates', '.service_locator.ho8CQlj', 'get_ServiceLocator_Ho8CQljService', true],
            'App\\Controller\\StudentController::getJson' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController::index' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController::indexJson' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController::new' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController::show' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CheckAttendanceController:delete' => ['privates', '.service_locator.1_0iiG0', 'get_ServiceLocator_10iiG0Service', true],
            'App\\Controller\\CheckAttendanceController:edit' => ['privates', '.service_locator.1_0iiG0', 'get_ServiceLocator_10iiG0Service', true],
            'App\\Controller\\CheckAttendanceController:index' => ['privates', '.service_locator.MdkrM0p', 'get_ServiceLocator_MdkrM0pService', true],
            'App\\Controller\\CheckAttendanceController:new' => ['privates', '.service_locator.MdkrM0p', 'get_ServiceLocator_MdkrM0pService', true],
            'App\\Controller\\CheckAttendanceController:show' => ['privates', '.service_locator.plSQT4L', 'get_ServiceLocator_PlSQT4LService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.iSfEFXi', 'get_ServiceLocator_ISfEFXiService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.iSfEFXi', 'get_ServiceLocator_ISfEFXiService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\ProductController:new' => ['privates', '.service_locator.JeTwYn4', 'get_ServiceLocator_JeTwYn4Service', true],
            'App\\Controller\\ProductController:show' => ['privates', '.service_locator.iyEwlLH', 'get_ServiceLocator_IyEwlLHService', true],
            'App\\Controller\\StudentController:delete' => ['privates', '.service_locator.ho8CQlj', 'get_ServiceLocator_Ho8CQljService', true],
            'App\\Controller\\StudentController:edit' => ['privates', '.service_locator.ho8CQlj', 'get_ServiceLocator_Ho8CQljService', true],
            'App\\Controller\\StudentController:getJson' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController:index' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController:indexJson' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController:new' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'App\\Controller\\StudentController:show' => ['privates', '.service_locator.QLgPRBq', 'get_ServiceLocator_QLgPRBqService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CheckAttendanceController::delete' => '?',
            'App\\Controller\\CheckAttendanceController::edit' => '?',
            'App\\Controller\\CheckAttendanceController::index' => '?',
            'App\\Controller\\CheckAttendanceController::new' => '?',
            'App\\Controller\\CheckAttendanceController::show' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Controller\\ProductController::new' => '?',
            'App\\Controller\\ProductController::show' => '?',
            'App\\Controller\\StudentController::delete' => '?',
            'App\\Controller\\StudentController::edit' => '?',
            'App\\Controller\\StudentController::getJson' => '?',
            'App\\Controller\\StudentController::index' => '?',
            'App\\Controller\\StudentController::indexJson' => '?',
            'App\\Controller\\StudentController::new' => '?',
            'App\\Controller\\StudentController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CheckAttendanceController:delete' => '?',
            'App\\Controller\\CheckAttendanceController:edit' => '?',
            'App\\Controller\\CheckAttendanceController:index' => '?',
            'App\\Controller\\CheckAttendanceController:new' => '?',
            'App\\Controller\\CheckAttendanceController:show' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'App\\Controller\\ProductController:new' => '?',
            'App\\Controller\\ProductController:show' => '?',
            'App\\Controller\\StudentController:delete' => '?',
            'App\\Controller\\StudentController:edit' => '?',
            'App\\Controller\\StudentController:getJson' => '?',
            'App\\Controller\\StudentController:index' => '?',
            'App\\Controller\\StudentController:indexJson' => '?',
            'App\\Controller\\StudentController:new' => '?',
            'App\\Controller\\StudentController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
