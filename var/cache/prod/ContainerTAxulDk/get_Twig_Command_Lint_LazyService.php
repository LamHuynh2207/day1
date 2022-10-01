<?php

namespace ContainerTAxulDk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Twig_Command_Lint_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.twig.command.lint.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.twig.command.lint.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lint:twig', [], 'Lint a Twig template and outputs encountered errors', false, function () use ($container): \Symfony\Bundle\TwigBundle\Command\LintCommand {
            return ($container->privates['twig.command.lint'] ?? $container->load('getTwig_Command_LintService'));
        });
    }
}
