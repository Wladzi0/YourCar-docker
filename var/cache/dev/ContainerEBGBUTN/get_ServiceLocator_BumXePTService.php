<?php

namespace ContainerEBGBUTN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BumXePTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BumXePT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BumXePT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'engine' => ['privates', '.errored..service_locator.BumXePT.App\\Entity\\Engine', NULL, 'Cannot autowire service ".service_locator.BumXePT": it references class "App\\Entity\\Engine" but no such service exists.'],
        ], [
            'engine' => 'App\\Entity\\Engine',
        ]);
    }
}
