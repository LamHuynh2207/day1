<?php

namespace ContainerTAxulDk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_SerializerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'twig.runtime.serializer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\SerializerRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['twig.runtime.serializer'] = new \Symfony\Bridge\Twig\Extension\SerializerRuntime(($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));
    }
}
